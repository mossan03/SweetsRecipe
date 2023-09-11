<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sweet;
use App\Models\Category;
use App\Models\CategorySweet;

class RecipeController extends Controller
{
    public function index($category = null) 
    {
        $sweet_category = '';

        if($category === null) {
            $sweets = Sweet::orderBy('created_at', 'desc')->get();
        } else {
            $category_arry = Category::Where('id', $category)->first();
            $sweet_category = 'カテゴリー：'. $category_arry->name;
            $sweets = Category::find($category)->sweets()->get();
        }

        return view('index')
            ->with([
                'sweet_category' => $sweet_category,
                'sweets' => $sweets
            ]);
    }

    public function show(Sweet $sweet)
    {
        return view('recipes.show')
            ->with(['sweet' => $sweet]);
    }
}

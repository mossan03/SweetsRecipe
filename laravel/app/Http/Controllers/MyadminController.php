<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sweet;
use App\Models\Category;

class MyadminController extends Controller
{
    public function index() {
        return view('myadmin.myadmin');
    }

    public function add(Request $request)
    {
        $sweet = new Sweet();
        $sweet->name = $request->sweet_name;
        $sweet->point = $request->point;
        $sweet->save();
        $sweet_id = $sweet->id;

        // $ingredient = new Ingredient();
        // $ingredient->name = $request->ingredient_name;

        $image = $request->file('file')->storeAs('', 'image'. $sweet_id. '.webp', 'public');

        $category = $request->category;
        Category::find($category)->sweets()->attach($sweet_id);

        return redirect()
            ->route('recipes.index');
    }
}

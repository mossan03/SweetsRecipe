<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sweet extends Model
{
    use HasFactory;

    public function ingredients()
    {
        return $this->hasMany(Ingredient::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }
}

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RecipeController;

use App\Http\Controllers\MyadminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/{category?}', [RecipeController::class, 'index'])
    ->name('recipes.index')
    ->where('category', '[0-9]+');

Route::get('/recipes/{sweet}', [RecipeController::class, 'show'])
    ->name('recipes.show')
    ->where('sweet', '[0-9]+');


Route::get('/myadmin', [MyadminController::class, 'index']);

Route::post('/myadmin/add', [MyadminController::class, 'add'])
    ->name('myadmin.add');





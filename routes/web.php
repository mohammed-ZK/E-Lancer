<?php

use App\Http\Controllers\CategoriesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/categories',[CategoriesController::class,'index']);
Route::get('/categories/create',[CategoriesController::class,'create']);
Route::get('/categories/show/{id}',[CategoriesController::class,'show']);
Route::post('/categories',[CategoriesController::class,'store']);
Route::get('/categories/{id}/edit',[CategoriesController::class,'edit']);
Route::put('/categories/{id}',[CategoriesController::class,'update']);
Route::delete('/categories/{id}',[CategoriesController::class,'delete']);

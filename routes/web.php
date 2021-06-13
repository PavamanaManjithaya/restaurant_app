<?php

use Illuminate\Support\Facades\Route;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes(['register'=>false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('category', 'App\Http\Controllers\CategoryController')->middleware('auth');
Route::resource('food','App\Http\Controllers\FoodController')->middleware('auth');
Route::get('/','App\Http\Controllers\FoodController@listfood');
Route::get('/foods/{id}','App\Http\Controllers\FoodController@view')->name('food.view');

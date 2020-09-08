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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/status', 'CategoryController@status');

Route::get('/category', 'CategoryController@list');
Route::post('/category', 'CategoryController@store');
Route::get('/category/{id}', 'CategoryController@show');
Route::put('/category/{id}', 'CategoryController@update');
Route::delete('/category/{id}', 'CategoryController@delete');

Route::get('/product', 'ProductController@list');
Route::post('/product', 'ProductController@store');
Route::get('/product/{id}', 'ProductController@show');
Route::patch('/product/{id}', 'ProductController@update');
Route::post('/product/{id}/sendPhoto', 'ProductController@sendPhoto');
Route::delete('/product/{id}', 'ProductController@delete');

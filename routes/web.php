<?php

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

Route::get('/', 'ProductController@getIndex');
Route::get('/products/show/{id}', 'ProductController@getShow');
Route::post('/products/sold/{id}', 'ProductController@stockMore');
Route::post('/products/restock/{id}', 'ProductController@stockLess');
Route::post('/products', 'ProductController@PostProductAdd');
Route::delete('/products/{id}', 'ProductController@deletProduct');
Route::post('/products/{id}', 'ProductController@ModifProduct');
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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 * Orders routes
 */

// index
Route::get('/orders', 'OrdersController@index');

// create
Route::get('/orders/create', 'OrdersController@create');

// store
Route::post('/orders', 'OrdersController@store');

// show
Route::get('/orders/{id}', 'OrdersController@show');

// edit
Route::get('/orders/{id}/edit', 'OrdersController@edit');

// update
Route::put('/orders/{id}', 'OrdersController@update');

// destroy
Route::delete('/orders/{id}', 'OrdersController@destroy');
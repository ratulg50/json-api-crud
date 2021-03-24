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

Route::get('item_show', 'App\Http\Controllers\ItemController@show')->name('item.show');
Route::get('item_create', 'App\Http\Controllers\ItemController@create')->name('item.create');
Route::post('item_create', 'App\Http\Controllers\ItemController@store');
Route::get('item_delete/{id}', 'App\Http\Controllers\ItemController@delete');
Route::get('item_edit/{id}', 'App\Http\Controllers\ItemController@edit');
Route::post('item_edit/{id}', 'App\Http\Controllers\ItemController@update')->name('item.update');

Route::get('user_show', 'App\Http\Controllers\UserController@show')->name('user.show');
Route::get('user_create', 'App\Http\Controllers\UserController@create')->name('user.create');
Route::post('user_create', 'App\Http\Controllers\UserController@store');
Route::get('user_delete/{id}', 'App\Http\Controllers\UserController@delete');
Route::get('user_edit/{id}', 'App\Http\Controllers\UserController@edit');
Route::post('user_edit/{id}', 'App\Http\Controllers\UserController@update')->name('user.update');
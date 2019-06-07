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
    return view('/welcome');
});

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    return Auth::user();
});

Route::get('/imovel', 'PropertyController@viewOnly')->name('imovel');

Route::get('/home', 'SearchController@index')->name('search-default');
Route::get('/search', 'SearchController@search')->name('search-filter');

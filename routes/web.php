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

/*Route::get('/', function () {
    return view('pets.index');
});*/
Route::get('/', ['uses' => 'PetController@index', 'as' => 'pets.index']);

Route::resource('pets', 'PetController');

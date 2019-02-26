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
Route::group(['prefix' => 'horses'], function () {
  Route::get('/index','HorsesController@index')->name('horses.index');
  Route::get('/destroy/{id}','HorsesController@destroy')->name('horses.destroy');
});

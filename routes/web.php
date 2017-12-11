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
    return view('/home');
});

Route::get('cadastro','cadastroController@index');
Route::get('cadastro/create','cadastroController@create');
Route::get('cadastro/{id}','cadastroController@edit');
Route::post('cadastro/update/{id}','cadastroController@update');
Route::get('cadastro/delete/{id}','cadastroController@destroy');
Route::post('cadastro/new','cadastroController@store');

Route::get('users', 'userController@index');
Route::get('users/create','userController@create');
Route::get('users/{id}', 'userController@edit');
Route::post('users/update/{id}','userController@update');
Route::get('users/delete/{id}','userController@destroy');
Route::post('users/new','userController@store');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

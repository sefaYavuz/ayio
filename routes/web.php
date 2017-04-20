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

Auth::routes();

Route::get('/home', 'HomeController@index');


//users dingen
Route::get('/users', 'UsersController@index');
Route::post('/users', 'UsersController@store');

Route::get('/users/create', 'UsersController@create');
Route::get('/profile/{username}', 'ProfileController@profile');

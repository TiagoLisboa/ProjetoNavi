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

Route::group(['middleware' => 'guest'], function () {
	Route::get('/', function () {
		return view ('home');
	})->name('welcome');
});

Route::get('/user', function () {
	return redirect()->home();
});
Route::get('/home', 'AppController@index')->name('home');
Route::get('/user/edit', 'AppController@edit');
Route::patch('/user', 'AppController@update');
Route::get('/user/delete', function () {
	return view ('users.delete');
});
Route::delete('/user', 'AppController@destroy');

Route::get('/login', 'SessionsController@create')->name('login');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');

Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
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

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth')->group(function() {

	Route::resource('events', 'EventController', ['except' => [
		'update', 'destroy', 'edit'
	]]);

	Route::prefix('events/{event}/')->group(function() {
		Route::resource('photos', 'PhotoController', ['except' => [
			'update', 'destroy', 'edit', 'show'
		]]);
	});
});


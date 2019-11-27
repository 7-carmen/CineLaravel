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

//Route::get('/Hola/{nombre}', "hola@index");

Route::get('usuario', 'UserController@index')->name('user.index');
Route::get('usuario/{id}', 'UserController@show')->name('user.show');
Route::get('usuario/crear', 'UserController@create')->name('user.create');
Route::post('usuario', 'UserController@store')->name('user.store');
Route::get('usuario/{id}/editar', 'UserController@edit')->name('user.edit');
Route::post('usuario/{id}', 'UserController@update')->name('user.update');
Route::get('usuario/{id}/borrar', 'UserController@destroy')->name('user.destroy');
Route::get('cerrar_sesion', 'UserController@logout')->name('user.logout');

Route::get('movie', 'MovieController@index')->name('movie.index');
Route::get('inicio', 'MovieController@index2')->name('movie.index2');
Route::get('movie/{id}', 'MovieController@show')->name('movie.show');
Route::get('movie/crear', 'MovieController@create')->name('movie.create');
Route::post('movie', 'MovieController@store')->name('movie.store');
Route::get('movie/{id}/editar', 'MovieController@edit')->name('movie.edit');
Route::post('movie/{id}', 'MovieController@update')->name('movie.update');
Route::get('movie/borrar/{id}', 'MovieController@destroy')->name('movie.destroy');
Route::get('buscar', 'MovieController@search')->name('movie.search');
Route::get('buscar_año', 'MovieController@search_anyo')->name('search_anyo');
Route::get('buscar_genero', 'MovieController@search_genero')->name('search_genero');

Route::get('genero', 'GeneroController@index')->name('genero.index');
Route::get('genero/{id}', 'GeneroController@show')->name('genero.show');
Route::get('genero/crear', 'GeneroController@create')->name('genero.create');
Route::post('genero', 'GeneroController@store')->name('genero.store');
Route::get('genero/{id}/editar', 'GeneroController@edit')->name('genero.edit');
Route::post('genero/{id}', 'GeneroController@update')->name('genero.update');
Route::get('genero/{id}/borrar', 'GeneroController@destroy')->name('genero.destroy');

Route::get('people', 'peopleController@index')->name('people.index');
Route::get('people/{id}', 'peopleController@show')->name('people.show');
Route::get('people/crear', 'peopleController@create')->name('people.create');
Route::post('people', 'peopleController@store')->name('people.store');
Route::get('people/{id}/editar', 'peopleController@edit')->name('people.edit');
Route::post('people/{id}', 'peopleController@update')->name('people.update');
Route::get('people/{id}/borrar', 'peopleController@destroy')->name('people.destroy');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

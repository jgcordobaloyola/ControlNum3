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

Route::get('list/','DetailController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//usuarios
Route::get('listUsuario/','UsuarioController@index');
Route::get('CreateUsuario/','UsuarioController@create');
Route::get('EditUsuario/','UsuarioController@update');
Route::get('DeleteUsuario/','UsuarioController@destroy');


//detalles
Route::get('listDetail/','DetailController@index');
Route::get('CreateDetail/','DetailController@create');
Route::get('EditDetail/','DetailController@update');
Route::get('DeleteDetail/','DetailController@destroy');

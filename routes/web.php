<?php

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('usuarios', 'UserController')->middleware('auth');

//Rutas Mascotas
Route::get('perdidos', 'PerdidosController@mascotas');
Route::get('encontrados', 'EncontradosController@mascotas');

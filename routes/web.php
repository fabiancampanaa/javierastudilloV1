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
Route::resource('Product', 'ProductController');
Route::resource('cotizacion', 'CotizacionController');
Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('inicio', 'InicioController@index')->name('inicio');

Route::post('login', 'Auth\LoginController@login')->name('login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');



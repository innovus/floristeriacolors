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
Route::get('/','PrincipalController@index');
Route::get('realizarArreglo/','PrincipalController@realizarArreglo');
Route::get('categoriaSeleccionada/{id}','PrincipalController@categoriaSeleccionada');
Route::get('arregloSeleccionado/{id}','PrincipalController@arregloSeleccionado');
/*-----login----------*/
Route::get('login/','PrincipalController@login');
/*-------------------*/
Route::resource('categoria','CategoryController');
Route::resource('producto','ProductController');
Route::resource('price','PriceController');

/*Route::get('/', function () {
    //return view('welcome');
});*/

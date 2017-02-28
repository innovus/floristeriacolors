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
Route::get('contacto/','PrincipalController@contacto');
Route::get('cuentaUsuario/','PrincipalController@cuentaUsuario');
Route::get('ayuda/','PrincipalController@ayuda');
Route::get('conocenos/','PrincipalController@conocenos');
Route::get('puntosFloristeria/','PrincipalController@puntosFloristeria');
Route::get('resumenCompra/','PrincipalController@resumenCompra');
Route::get('finalizarCompra/','PrincipalController@finalizarCompra');
Route::get('blog/','PrincipalController@blog');


Route::get('panelAdmin/','PrincipalController@panelAdmin');

/*-------------------*/
Route::resource('admin/categorias','CategoryController');
Route::resource('admin/productos','ProductController');
Route::resource('admin/precios','PriceController');

/*Route::get('/', function () {
    //return view('welcome');
});*/

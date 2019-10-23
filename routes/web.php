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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Usuarios*/
Route::resource('/administrador/Usuario','UsuarioController');
Route::get('/Usuario','UsuarioController@index');

/*Proveedores*/
Route::resource('/administrador/Proveedor','ProveedorController');
Route::get('/Proveedor','ProveedorController@index');
Route::get('/administrador/Proveedor/{id}/destroy','ProveedorController@destroy');
Route::get('/administrador/Proveedor/{id}/edit','ProveedorController@edit');

/*Cliente*/
Route::resource('/administrador/Cliente','ClienteController');
Route::get('/Cliente','ClienteController@index');
Route::get('/administrador/Cliente/{id}/destroy','ClienteController@destroy');
Route::get('/administrador/Cliente/{id}/edit','ClienteController@edit');

/*Empleado*/
Route::resource('/administrador/Empleado','EmpleadoController');
Route::get('/Empleado','EmpleadoController@index');
Route::get('/administrador/Empleado/{id}/destroy','EmpleadoController@destroy');
Route::get('/administrador/Empleado/{id}/edit','EmpleadoController@edit');

/*Material*/
Route::resource('/administrador/Material','MaterialesController');
Route::get('/Material','MaterialesController@index');
Route::get('/administrador/Material/{id}/destroy','MaterialesController@destroy');
Route::get('/administrador/Material/{id}/edit','MaterialesController@edit');

/*Servicios*/
Route::resource('/administrador/Servicio','ServiciosController');
Route::get('/Servicio','ServiciosController@index');
Route::get('/administrador/Servicio/{id}/destroy','ServiciosController@destroy');
Route::get('/administrador/Servicio/{id}/edit','ServiciosController@edit');

/*Centro*/
Route::resource('/administrador/Centro','CentroController');
Route::get('/Centro','CentroController@index');
Route::get('/administrador/Centro/{id}/destroy','CentroController@destroy');
Route::get('/administrador/Centro/{id}/edit','CentroController@edit');

/*Orden Compra*/
Route::resource('/administrador/OrdenCompra','OrdenCompraController');
Route::get('/OrdenCompra','OrdenCompraController@index');
Route::get('/administrador/OrdenCompra/{id}/destroy','OrdenCompraController@destroy');

/*consultas Ajax*/
Route::get('/search_proveedor','AjaxController@search_proveedor');
Route::get('/search_materiales','AjaxController@search_materiales');
Route::get('/save_producto', 'AjaxController@save_producto');
Route::get('/delete_producto/{id}', 'AjaxController@delete_producto');
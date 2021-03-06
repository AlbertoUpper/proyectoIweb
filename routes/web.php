<?php

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix' => 'usuarios', 'middleware' => 'auth'], function(){
   Route::get('/', 'Auth\RegisterController@index')->name('usuarios');
   Route::get('/cuenta/{id}', 'Auth\RegisterController@show')->name('cuenta');
   Route::get('/nuevo', 'Auth\RegisterController@nuevo');
   Route::get('/cambiar_contrasena', 'Auth\RegisterController@cambiarcontra')->name('cambiarcontra');
   Route::post('/cambiar_contrasena', 'Auth\RegisterController@guardarcambiarcontra');
   Route::post('/guardar', 'Auth\RegisterController@guardar')->name('guardar');
   Route::post('/borrar/{prod}', 'Auth\RegisterController@borrar');
   Route::get('/editar/{id}', 'Auth\RegisterController@editar');
   Route::post('/modificar/{id}', 'Auth\RegisterController@modificar');
});

Route::group(['prefix' => 'productos', 'middleware' => 'auth'], function(){
   Route::get('/', 'ProductosController@index');
   Route::get('/entradas', 'ProductosController@entradas');
   Route::post('/guardaEntradas', 'EntradasController@guardaEntrada');
   Route::get('/ventas', 'ProductosController@ventas');
   Route::post('/productosFactura', 'ProductosController@productosFactura');
   Route::post('/guardarFactura', 'ProductosController@guardarFactura');
   Route::get('/ordenes', 'OrdenesController@ordenes');
   Route::get('/nuevo', 'ProductosController@nuevo');
   Route::post('/guardar', 'ProductosController@guardar');
   Route::post('/borrar/{prod}', 'ProductosController@borrar');
   Route::get('/editar/{id}', 'ProductosController@editar');
   Route::post('/modificar/{id}', 'ProductosController@modificar');
});

Route::group(['prefix' => 'categorias', 'middleware' => 'auth'], function(){
   Route::get('/', 'CategoriasController@index');
   Route::get('nueva', 'CategoriasController@nueva');
   Route::post('guardar', 'CategoriasController@guardar');
   Route::post('borrar/{cate}', 'CategoriasController@borrar');
   Route::get('editar/{id}', 'CategoriasController@editar');
   Route::post('modificar/{id}', 'CategoriasController@modificar');
});


Route::group(['prefix' => 'empleados', 'middleware' => 'auth'], function(){
   Route::get('/', 'EmployeesController@index');
   Route::get('/nuevo', 'EmployeesController@nuevo');
   Route::post('/guardar', 'EmployeesController@guardar');
   Route::post('/borrar/{emple}', 'EmployeesController@borrar');
   Route::get('/editar/{id}', 'EmployeesController@editar');
   Route::post('/modificar/{id}', 'EmployeesController@modificar');
});

Route::group(['prefix' => 'proveedores', 'middleware' => 'auth'], function(){
   Route::get('/', 'ProveedoresController@index');
   Route::get('/nuevo', 'ProveedoresController@nuevo');
   Route::post('/guardar', 'ProveedoresController@guardar');
   Route::post('/borrar/{emple}', 'ProveedoresController@borrar');
   Route::get('/editar/{id}', 'ProveedoresController@editar');
   Route::post('/modificar/{id}', 'ProveedoresController@modificar');
});

Route::group(['prefix' => 'clientes', 'middleware' => 'auth'], function(){
   Route::get('/', 'CustomersController@index');
   Route::get('/nuevo', 'CustomersController@nuevo');
   Route::post('/guardar', 'CustomersController@guardar');
   Route::post('/borrar/{cli}', 'CustomersController@borrar');
   Route::get('/editar/{id}', 'CustomersController@editar');
   Route::post('/modificar/{id}', 'CustomersController@modificar');
});

route::get('prueba', function(){
   dd(Auth::user());
});





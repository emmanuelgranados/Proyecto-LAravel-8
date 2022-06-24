<?php

use Doctrine\DBAL\Schema\Index;

// Route::group(['namespace' => 'Administracion', 'middleware' => 'auth'], function () {
Route::group(['namespace' => 'Administracion'], function () {

    Route::get('usuarios', 'UsuariosController@index')->name('usuarios');
    // Route::get('trabajadores', 'TrabajadoresController@index')->name('trabajadores');
    // Route::get('usuarios', 'UsuariosController@index')->name('usuarios');
    // Route::get('mark_read', 'UsuariosController@mark_read')->name('mark_read');
    // Route::post('cargar/empleados', 'EmpleadosMaestraController@storeEmpleados')->name('cargar.empleados');
    // Route::post('cargar/puestos', 'EmpleadosMaestraController@storePuestos')->name('cargar.puestos');
    // Route::post('crear_usuario', 'UsuariosController@crear_usuario');
    // Route::post('crear_rol', 'UsuariosController@crear_rol');
    // Route::post('editar_rol/{id}', 'UsuariosController@editar_rol');
    // Route::post('editar_usuario/{id}', 'UsuariosController@editar_usuario');
    // Route::post('editar_pass/{id}', 'UsuariosController@editar_pass');
    // Route::post('cargar/foto', 'EmpleadosMaestraController@cargar')->name('cargar.foto');
    // Route::post('cardinal_insert', 'EmpleadosMaestraController@cardinal_insert')->name('cardinal.insert');
    // Route::post('cardinal_update', 'EmpleadosMaestraController@cardinal_update')->name('cardinal.update');
    // Route::get('ajustemasivoinventario', 'AjusteMasivoInventarioController@index')->name('ajustemasivoinventario');
    // Route::post('/cargarInventarioMasivo', 'AjusteMasivoInventarioController@cargar_inventario');
    // Route::post('cargar/puestos', 'EmpleadosMaestraController@storePuestos')->name('cargar.puestos');
    // Route::post('activar_empleado', 'EmpleadosMaestraController@activar_empleado')->name('activar_empleado');
    // Route::post('cargar/fotos_insert', 'EmpleadosMaestraController@fotos_insert')->name('cargar.fotos_insert');
});

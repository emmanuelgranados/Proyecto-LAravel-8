<?php

use App\Http\Controllers\Administracion\GruposTrabajoController;
use Doctrine\DBAL\Schema\Index;
// use Symfony\Component\Routing\Route;

// Route::group(['namespace' => 'Administracion', 'middleware' => 'auth'], function () {
Route::group(['namespace' => 'Administracion'], function () {

    Route::get('usuarios', 'UsuariosController@index')->name('usuarios');
    Route::post('nuevo_usuario','UsuariosController@crear_usuario')->name('nuevo_usuario');
    Route::post('eliminar_usuario','UsuariosController@eliminar_usuario')->name('eliminar_usuario');
    Route::post('desactivar_usuario','UsuariosController@desactivar_usuario')->name('desactivar_usuario');
    Route::post('activar_usuario','UsuariosController@activar_usuario')->name('activar_usuario');
    Route::post('password_usuario','UsuariosController@password_usuario')->name('password_usuario');
    Route::post('editar_usuario','UsuariosController@editar_usuario')->name('editar_usuario');

    Route::post('nuevo_rol','UsuariosController@nuevo_rol')->name('nuevo_rol');



    Route::get('perfilUsuario','PerfilUsuarioController@index')->name('perfilUsuario');
    Route::post('editar_perfil','PerfilUsuarioController@editar_perfil')->name('editar_perfil');




    Route::get('grupos','GruposTrabajoController@index')->name('grupos');
    Route::post('nuevo_grupo','GruposTrabajoController@nuevo_grupo')->name('nuevo_grupo');
    Route::post('agregar_users_grupo','GruposTrabajoController@agregar_users_grupo')->name('agregar_users_grupo');




});

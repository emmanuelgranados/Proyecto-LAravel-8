<?php

use App\Http\Controllers\Administracion\GruposTrabajoController;
use Doctrine\DBAL\Schema\Index;
// use Symfony\Component\Routing\Route;

// Route::group(['namespace' => 'Administracion', 'middleware' => 'auth'], function () {
Route::group(['namespace' => 'Administracion'], function () {

    Route::get('usuarios', 'UsuariosController@index')->name('usuarios');
    Route::post('nuevo_usuario','UsuariosController@crear_usuario')->name('nuevo_usuario');




    Route::get('perfilUsuario','PerfilUsuarioController@index')->name('perfilUsuario');

    Route::get('grupos','GruposTrabajoController@index')->name('grupos');
    Route::post('nuevo_grupo','GruposTrabajoController@nuevo_grupo')->name('nuevo_grupo');
    Route::post('agregar_users_grupo','GruposTrabajoController@agregar_users_grupo')->name('agregar_users_grupo');




});

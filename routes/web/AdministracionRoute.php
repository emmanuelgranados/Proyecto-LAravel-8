<?php

use Doctrine\DBAL\Schema\Index;
// use Symfony\Component\Routing\Route;

// Route::group(['namespace' => 'Administracion', 'middleware' => 'auth'], function () {
Route::group(['namespace' => 'Administracion'], function () {

    Route::get('usuarios', 'UsuariosController@index')->name('usuarios');
    Route::post('nuevo_usuario','UsuariosController@crear_usuario')->name('nuevo_usuario');

});

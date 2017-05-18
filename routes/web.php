<?php


/*
	Grupo para tener todo los prefijos admin en un solo grupo y no estar redundando
	Para ver las rutas completas
	php artisan route:list
*/

Route::group(['namespace' => 'Admin','prefix' => 'admin'],function(){

	Route::get('/','IndexController@index');

	Route::resource('usuario','UsuarioController');

});
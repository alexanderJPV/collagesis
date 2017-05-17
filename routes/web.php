<?php

/*
	Grupo para tener todo los prefijos admin en un solo grupo y no estar redundando
 */
Route::group(['namespace' => 'Admin','prefix' => 'admin'],function(){

	Route::get('/','IndexController@index');
	Route::get('/create','IndexController@create');

});

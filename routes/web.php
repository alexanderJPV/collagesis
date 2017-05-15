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

Route::get('admin', function () {
    return view('Admin/index');
    //return "hola";
});
Route::get('admin/crear', function () {
    return view('sistema/creacion/Administrador');
    //return "hola";
});

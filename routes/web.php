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
Route::get('docente', function () {
    return view('Admin/Docente');
    //return "hola";
});
Route::get('estudiante', function () {
    return view('Admin/Estudiante');
    //return "hola";
});
Route::get('tutor', function () {
    return view('Admin/Tutor');
    //return "hola";
});
Route::resource('admin/crear','UsuarioController');
Route::resource('crear','UsuarioController');

/*Route::get('admin/crear', function () {
    return view('Admin/Administrador');    
});*/

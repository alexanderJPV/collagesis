<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function index(){
		return view('admin.plantilla.index');
	}

	public function create(){
		return view('sistema.creacion.administrador');
	}
}

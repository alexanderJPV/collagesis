<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
	public function index(){
		return view('admin.master');
	}

	public function create(){
		return view('sistema.creacion.administrador');
	}
}

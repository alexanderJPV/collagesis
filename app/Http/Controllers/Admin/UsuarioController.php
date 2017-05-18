<?php

namespace App\Http\Controllers\Admin;

use App\Docente;
use App\estudidante;
use App\tutor;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class UsuarioController extends Controller
{
    public function index(){
        return view('admin.page.usuario.index');
    }

    public function create(){
        return view('admin.page.usuario.create');
    }

    public function store(Request $request){                
        $u = new User;        
        /*$file = $request->file('foto');
        $ruta_destino = 'uploads/';
        $nombredearchivo = str_random(6).'_'.($file);                
        $file->move($ruta_destino, $nombredearchivo);*/
          
        $u->name       = $request->input('nombre');
        $u->ap_paterno = $request->input('paterno');
        $u->ap_materno = $request->input('materno');
        $u->ci         = $request->input('ci');
        $u->genero     = $request->input('genero');
        //$u->tipo_usuario  = $request->input('tipo_usuario');                
        $u->direcion      = $request->input('direccion');        
        $u->email         = $request->input('email');
        $u->password      = $request->input('password');        
        //$u->foto          = $ruta_destino.$nombredearchivo;            
        $u->telefono      = $request->input('telefono');        
        $u->save();
        return redirect('/admin/crear')->with('message', 'a ingresado correctamente.');                
        //return Redirect::back()->with(['success' => ' ']);
    }
}

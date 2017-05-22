<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Persona;
use Validator;
use Redirect;
use Session;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Persona::where('permiso','1')->get();
        return view("admin.page.administrador.list",compact("admin"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.page.administrador.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = array('nombre'   => 'required',
           'ci'       => 'required',
           'genero'   => 'required',
           'direccion'=> 'required' );

        $validator = Validator::make($request->all(),$rules);
        if($validator->fails()){
            return redirect()->back()->withInput()->withErrors($validator->errors());
        }else{
            $u = new Persona;
            $file_image       = $this->save_file($request,"admin","foto");
            $u->nombre        = $request->input('nombre');
            $u->ap_paterno    = $request->input('paterno');
            $u->ap_materno    = $request->input('materno');
            $u->ci            = $request->input('ci');
            $u->genero        = $request->input('genero');
            $u->permiso       = 1;
            $u->direccion     = $request->input('direccion');        
            $u->email         = $request->input('email');
            $u->password      = $request->input('password');        
            $u->foto          = $file_image;  
            $u->telefono      = $request->input('telefono');        
            $u->save();
        }
        Session::flash('success', 'Pregunta Frecuente Eliminada');
        return redirect()->route('admin.administrador');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin = Persona::find($id);
        return view("admin.page.administrador.edit",compact("admin")); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Persona::delete($id);
    }
}

@extends("admin.master")

@section("options")
<h3>LLene los datos del nuevo administrador</h3>
@stop

@section("content")
<form action="{{route('administrador.store')}}"  enctype="multipart/form-data" method="POST">
	<input type="hidden" name="_token" value="{{csrf_token()}}"/>

	<div class="form-group label-floating">
		<label class="control-label">Nombre</label>												
		<input class="form-control" type="text" name="nombre">
	</div>

	<div class="form-group label-floating">
		<label class="control-label">Apellido paterno</label>
		<input class="form-control" type="text" name="paterno">
	</div>
	<div class="form-group label-floating">
		<label class="control-label">Apellido materno</label>
		<input class="form-control" type="text" name="materno">
	</div>
	<div class="form-group label-floating">
		<label class="control-label">Cedula de identidad</label>
		<input class="form-control" type="text" name="ci">
	</div>
	<div class="form-group label-floating">
		<label class="control-label">Genero</label>
		<select name="genero">
			<option >Seleccione</option>
			<option value="1">Masculino</option>
			<option value="2">Femenino</option>
			<option value="3">Otro</option>

		</select>
	</div>
	<div class="form-group label-floating">
		<label class="control-label">Direccion</label>
		<input class="form-control" type="text" name="direccion">
	</div>
	<div class="form-group label-floating">
		<label class="control-label">email</label>
		<input class="form-control" type="text" name="email">
	</div>
	<div class="form-group label-floating">
		<label class="control-label">password</label>
		<input class="form-control" type="text" name="password">
	</div>
	<div class="form-group label-floating">
		<label class="control-label">Telefono</label>
		<input class="form-control" type="text" name="telefono">
	</div>

	<div class="form-group">
		<label class="control-label">Foto</label>
		<div>
			<input type="text" readonly="" class="form-control" placeholder="Seleccionar...">
			<input type="file"  name="foto">
		</div>
	</div>

	<p class="text-center">													
		<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
	</p>
</form>
@stop
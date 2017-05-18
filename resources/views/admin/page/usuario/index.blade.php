@extends("admin.plantilla.main")

@section("legend")
<div class="container-fluid">
	<div class="page-header">
		<h1 class="text-titles"><i class="zmdi zmdi-account zmdi-hc-fw"></i> Usuarios <small>Administradores</small></h1>
	</div>
	<p class="lead">Fuerza valor y diciplina </p>
</div>
@stop

@section("content")
<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<ul class="nav nav-tabs" style="margin-bottom: 15px;">
				<li class="active"><a href="#new" data-toggle="tab">Nuevo</a></li>
				<li><a href="#list" data-toggle="tab">Lista</a></li>
			</ul>
			<div id="myTabContent" class="tab-content">
				<div class="tab-pane fade active in" id="new">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12 col-md-10 col-md-offset-1">
								<!--.............................formulario para administradores.....................................-->
								<form action="{{route('usuario.store')}}" method="POST">											
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
										<input class="form-control" type="text" name="genero">
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
										<label class="control-label">Fotografia</label>
										<div>
											<input type="text" readonly="" class="form-control" placeholder="Browse...">
											<input type="file"  name="foto" value="{{old('foto')}}">
										</div>
									</div>

									<p class="text-center">													
										<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
									</p>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="list">
					<div class="table-responsive">
						<table class="table table-hover text-center">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Nombre</th>
									<th class="text-center">Apellido</th>
									<th class="text-center">Address</th>
									<th class="text-center">Email</th>
									<th class="text-center">Telefono</th>
									<th class="text-center">Actualizar</th>
									<th class="text-center">Borrar</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>Carlos</td>
									<td>Alfaro</td>
									<td>El alto</td>
									<td>carlos@gmail.com</td>
									<td>+78855720</td>
									<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
									<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
								</tr>
								<tr>
									<td>2</td>
									<td>Alicia</td>
									<td>Melendez</td>
									<td>El alto</td>
									<td>alicia@gmail.com</td>
									<td>+78855720</td>
									<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
									<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
								</tr>
								<tr>
									<td>3</td>
									<td>Sarai</td>
									<td>Lopez</td>
									<td>El alto</td>
									<td>sarai@gmail.com</td>
									<td>+78855720</td>
									<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
									<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
								</tr>
								<tr>
									<td>4</td>
									<td>Alba</td>
									<td>Bonilla</td>
									<td>El alto</td>
									<td>alba@gmail.com</td>
									<td>+78855720</td>
									<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
									<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
								</tr>
							</tbody>
						</table>
						<ul class="pagination pagination-sm">
							<li class="disabled"><a href="#!">«</a></li>
							<li class="active"><a href="#!">1</a></li>
							<li><a href="#!">2</a></li>
							<li><a href="#!">3</a></li>
							<li><a href="#!">4</a></li>
							<li><a href="#!">5</a></li>
							<li><a href="#!">»</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
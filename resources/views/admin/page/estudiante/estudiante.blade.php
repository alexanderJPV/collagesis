<!DOCTYPE html>
<html lang="es">
<head>
	<title>Admin</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="/css/main.css">
</head>
<body>
	<!-- SideBar -->
	@include('Plantilla.sidebar')
	<!-- Content page-->
	<secundaria class="full-box dashboard-contentPage">
		<!-- NavBar header-->
		@include('Plantilla.header')		        
		<div class="container-fluid">
			<div class="page-header">
				<h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Usuarios <small>Estudiantes</small></h1>
			</div>
			<p class="lead">Fuerza valor y diciplina </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-Femeninom: 15px;">
						<li class="active"><a href="#nuevo" data-toggle="tab">Nuevo</a></li>
						<li><a href="#list" data-toggle="tab">Lista</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						Femenino	<div class="tab-pane fade active in" id="nuevo">
						<div class="container-fluid">
							<div class="row">
								<div class="col-xs-12 col-md-10 col-md-offset-1">
									<form action="">
										<fieldset>Datos Estudiantes</fieldset>
										<div class="form-group label-floating">
											<label class="control-label">Nombre</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Apellido</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Direccion</label>
											<textarea class="form-control"></textarea>
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Email</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group label-floating">
											<label class="control-label">Telefono</label>
											<input class="form-control" type="text">
										</div>
										<div class="form-group">
											<label class="control-label">Cumple años</label>
											<input class="form-control" type="date">
										</div>
										<div class="form-group">
											<label class="control-label">Genero</label>
											<select class="form-control">
												<option>Masculino</option>
												<option>Femenino</option>
											</select>
										</div>
										<div class="form-group">
											<label class="control-label">Fotografia</label>
											<div>
												<input type="text" readonly="" class="form-control" placehantiguoer="Buscar...">
												<input type="file" >
											</div>
										</div>
										<div class="form-group">
											<label class="control-label">Tipo estudiante</label>
											<select class="form-control">
												<option>Antiguo</option>
												<option>Nuevo</option>
											</select>
										</div>
										<div class="form-group">
											<label class="control-label">Grado</label>
											<select class="form-control">
												<option>1 Inicial</option>
												<option>2 Primaria</option>
												<option>3 Secundaria</option>										          
											</select>
										</div>
										<br><br>
										<fieldset>Documento representativo</fieldset>
										<div class="form-group label-floating">
											<label class="control-label">Documento</label>
											<div class="form-group label-floating">
												<input class="form-control" type="text">
											</div>
											<label class="control-label"></label>
											<input class="form-control" type="text">
										</div>
										<p class="text-center">
											<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
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
										<th class="text-center">Birthday</th>
										<th class="text-center">Genero</th>
										<th class="text-center">Tipo</th>
										<th class="text-center">Grado</th>
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
										<td>+78894893</td>
										<td>07/03/1997</td>
										<td>Masculino</td>
										<td>antiguo</td>
										<td>secundaria</td>
										<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
									</tr>
									<tr>
										<td>2</td>
										<td>Alicia</td>
										<td>Melendez</td>
										<td>El alto</td>
										<td>alicia@gmail.com</td>
										<td>+78894893</td>
										<td>07/07/1990</td>
										<td>Femenino</td>
										<td>nuevo</td>
										<td>secundaria</td>
										<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
									</tr>
									<tr>
										<td>3</td>
										<td>Sarai</td>
										<td>Mercado</td>
										<td>El alto</td>
										<td>sarai@gmail.com</td>
										<td>+78894893</td>
										<td>09/09/1991</td>
										<td>Femenino</td>
										<td>antiguo</td>
										<td>secundaria</td>
										<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
									</tr>
									<tr>
										<td>4</td>
										<td>Alba</td>
										<td>Bonilla</td>
										<td>El alto</td>
										<td>alba@gmail.com</td>
										<td>+78894893</td>
										<td>01/10/1993</td>
										<td>Femenino</td>
										<td>nuevo</td>
										<td>secundaria</td>
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
</secundaria>

<!-- Notifications area -->
<secundaria class="full-box Notifications-area">
	<div class="full-box Notifications-bg btn-Notifications-area"></div>
	<div class="full-box Notifications-body">
		<div class="Notifications-body-title text-titles text-center">
			Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
		</div>
		<div class="list-group">
			<div class="list-group-item">
				<div class="row-action-primary">
					<i class="zmdi zmdi-alert-triangle"></i>
				</div>
				<div class="row-content">
					<div class="least-content">17m</div>
					<h4 class="list-group-item-heading">Tile with a label</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				</div>
			</div>
			<div class="list-group-separator"></div>
			<div class="list-group-item">
				<div class="row-action-primary">
					<i class="zmdi zmdi-alert-octagon"></i>
				</div>
				<div class="row-content">
					<div class="least-content">15m</div>
					<h4 class="list-group-item-heading">Tile with a label</h4>
					<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				</div>
			</div>
			<div class="list-group-separator"></div>
			<div class="list-group-item">
				<div class="row-action-primary">
					<i class="zmdi zmdi-help"></i>
				</div>
				<div class="row-content">
					<div class="least-content">10m</div>
					<h4 class="list-group-item-heading">Tile with a label</h4>
					<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				</div>
			</div>
			<div class="list-group-separator"></div>
			<div class="list-group-item">
				<div class="row-action-primary">
					<i class="zmdi zmdi-info"></i>
				</div>
				<div class="row-content">
					<div class="least-content">8m</div>
					<h4 class="list-group-item-heading">Tile with a label</h4>
					<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				</div>
			</div>
		</div>

	</div>
</secundaria>

<!-- Dialog help -->
<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Help</h4>
			</div>
			<div class="modal-body">
				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
			</div>
		</div>
	</div>
</div>	


<!--====== Scripts -->
<script src="/js/jquery-3.1.1.min.js"></script>
<script src="/js/sweetalert2.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/material.min.js"></script>
<script src="/js/ripples.min.js"></script>
<script src="/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/js/main.js"></script>
<script>
	$.material.init();
</script>
</body>
</html>
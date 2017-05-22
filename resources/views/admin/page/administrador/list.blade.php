@extends("admin.master")
@section("head")
<link href="https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">
@stop

@section("title_page")
<h1 class="text-titles"><i class="fa fa-user"></i> Usuarios <small>Administradores</small></h1>
@stop

@section("options")
<form action={{url("/admin/administrador/create")}}/ method="GET">
	<p data-placement="top" data-toggle="tooltip" title="" data-original-title="Agregar">
		<button class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal" data-title="Agregar">
			<i class="fa fa-user-plus fa-2x"></i> Agregar Usuario
		</button>
	</p>
</form>
@stop

@section("content")

<table id="example" class="hover" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>#</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Direccion</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Actualizar</th>
			<th>Borrar</th>
		</tr>
	</thead>
	<tbody>
		@foreach($admin as $i=>$a)
		<tr>
			<td>{{($i)+1}}</td>
			<td>{{$a->nombre}}</td>
			<td>{{$a->ap_paterno}} {{$a->ap_materno}}</td>
			<td>{{$a->direccion}}</td>
			<td>{{$a->email}}</td>
			<td>{{$a->telefono}}</td>
			<td>
				<form action={{url("/admin/administrador/$a->id")}}/edit/ method="POST">
					<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
					<input type="hidden" name="_method" value="GET" />  
					
					<p data-placement="top" data-original-title="Edit">
						<button class="btn btn-primary btn-xs" data-title="Edit">
							<i class="fa fa-pencil fa-2x" aria-hidden="true"></i>
						</button>
					</p>
				</form>
			</td>
			<td>
				<form action={{url("/admin/administrador/$a->id")}} method="POST">
					<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token()}}" />
					<input type="hidden" name="_method" value="DELETE" />  
					
					<p data-placement="top" data-original-title="Borrar">
						<button class="btn btn-danger btn-xs" data-title="Borrar">
							<i class="fa fa-trash fa-2x" aria-hidden="true"></i>
						</button>
					</p>
				</form>
			</td>

		</tr>
		@endforeach
	</tbody>
</table>

@stop



@section('scripts')
<script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#example').DataTable();
	} );
</script>
@stop


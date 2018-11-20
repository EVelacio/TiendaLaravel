@extends('admin/templateCitas')
@section('conten')
<div class="container">
	<div class="row">
		<legend>Paquetes KAIA</legend>

		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Precio</th>
					<th>Duracion</th>
					<th>Descripcion</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				@foreach($packages as $p)
				<tr>
					<td>{{ $p->package_name }}</td>
					<td>{{ '$'.$p->package_price }}</td>
					<td>{{ $p->package_time.' horas' }}</td>
					<td>{{ $p->package_description }}</td>
					<td><a href="{{ url('admin/edit-package/'.$p->id) }}" class="btn btn-primary">Editar</a>
						<a href="#" class="btn btn-danger">Eliminar</a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div align="right"><a href="{{ route('crearp') }}" class="btn btn-success">Agregar Nuevo Paquete</a></div>
	</div>
</div>
@stop
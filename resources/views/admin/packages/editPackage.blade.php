@extends('admin/templateCitas')
@section('conten')

<div class="container">
	<div class="row text-center">
		<legend>Editar Paquete</legend>
		  {!! Form::model($package, array('route' => array('package.update', $package->id))) !!}
<div>
        <!-- name -->
        {!! Form::label('package_name', 'Nombre:') !!}
        {!! Form::text('package_name') !!}
</div>
<div>
        <!-- price -->
        {!! Form::label('package_price', 'Precio:') !!}
        {!! Form::number('package_price') !!}
</div>
        {!! Form::label('package_time', 'Tiempo:') !!}
        {!! Form::number('package_time') !!}
        <br>
		<br>
        {!! Form::label('package_description', 'Descripcion') !!}
        <br>
        {!! Form::textarea('package_description') !!}
				<br>
        {!! Form::submit('Actualizar Paquete', ['class' => 'btn btn-primary']) !!}
        <a href="/admin/packages" class="btn btn-warning">Cancelar</a>

    {!! Form::close() !!}
	</div>
</div>
@endsection
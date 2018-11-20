@extends('admin/templateCitas')
@section('conten')

  
  <div class="row text-center">
  <h1>Selecciona un Paquete</h1>
  @foreach($packages as $package)
   
    <div class="col-md-4 center-block" style="float:none;">
    <div class="panel panel-default">
      <div class="panel-heading">
    <p><b>Paquete: </b><a href="booking/calendar/{{ $package->id }}">{{ $package->package_name }}</a><br>
      </div>
      <div class="panel-body">
    <b>Tiempo: </b>{{ $package->package_time }} horas<br>
    <b>Precio: </b>{{ $package->package_price }}<br>
    <b>Descripcion: </b>{{ $package->package_description }}</p>
    </div>
</div>
</div>
  @endforeach
</div>
 
@stop

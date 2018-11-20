@extends('admin/templateCitas')
@section('conten')

<!-- Output correct data for checking -->
<div class="row jumbotron text-center">
  <h3> Selecciono: {{ $package_name }} </h3>
  <h3> Para realizar en la siguente fecha:  </h3>
  <h3> {{ $dateFormat }} </h3>

</div>
<br><br><br>
<!-- <div class="col-md-6 center-block" style="float:none;"> -->
<div class="row col-md-6 center-block" style="float:none;">
    
  
  <!-- Hidden forms to be used later for appointment confirmation -->
{!! Form::open(array('action' => 'BookingController@anyConfirm', 'class' => 'form-horizontal', 'data-abide'=>true)) !!}
{!! Form::hidden('pid', $pid) !!}


<fieldset>
  <legend>Informacion del Cliente </legend>
  
  <!-- Mascota Input -->
  <div class="form-group">
    <label for="fname" class="col-lg-3 control-label">Nombre Mascota</label>
    <div class="col-lg-8">
      <input type="text" class="form-control" name="fname" id="fname" placeholder="Rupert" required >
    </div>
  </div>
  
  <!-- Dueño Input -->
  <div class="form-group">
    <label for="lname" class="col-lg-3 control-label">Nombre dueño</label>
    <div class="col-lg-8">
       <input type="text" class="form-control" name="lname" id="lname" placeholder="Juan Perez" required>
    </div>
  </div>
  
  <!-- Number -->
  <div class="form-group">
    <label for="number" class="col-lg-3 control-label">Numero de Contacto</label>
    <div class="col-lg-8">
       <input type="number" class="form-control" name="number" id="number" placeholder="444 444 4444" required>
    </div>
  </div>
  
  <!-- Email -->
   <div class="form-group">
    <label for="email" class="col-lg-3 control-label">Correo Electronico</label>
    <div class="col-lg-8">
       <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required>
    </div>
  </div>
  
  <div class="checkbox text-center">
      <label>
        <input id="newsletterBox" name="newsletterBox" type="checkbox" checked> Si, deseo recibir una notificacion a mi correo</input>
    </label>
  </div>

  <div class="text-center">
    <button type="submit" class="btn btn-primary">Siguiente</button>
  </div>
  
 
  </div>
  
   {!! Form::close() !!} 
@stop

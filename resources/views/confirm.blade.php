@extends('admin/templateCitas')
@section('conten')
<div class="row jumbotron text-center">
  <h1>Confirmacion del pedido</h1>
</div>

<div class="row col-md-6 well center-block">
  <h1>Del {{ $appointmentInfo['package_name'] }}</h1>
  <h3 id="momentDate"></h3>
  <legend>Detalles del Cliente</legend>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>Nombre Mascota</th>
        <th>Nombre dueño</th>
        <th>Numero Celular</th>
        <th>Correo electronico</th>
        <th>Enviarme correo</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{{ $appointmentInfo['fname'] }} </td>
        <td>{{ $appointmentInfo['lname'] }} </td>
        <td>{{ $appointmentInfo['number'] }} </td>
        <td>{{ $appointmentInfo['email'] }} </td>
        <td>{{ $appointmentInfo['updates'] }} </td>
      </tr>
    </tbody>
  </table>
  
  <div class="text-center">
  <a href="confirmed" class="btn btn-primary">Confirmar Pedido</a>
  </div>
  
</div>

<script>
  $(document).ready(function() {
    mDate = moment({{ "'".Session::get('selection')."'" }});
    $('#momentDate').text("On " + mDate.format("MMMM Do, YYYY"));
  })
</script>
@stop

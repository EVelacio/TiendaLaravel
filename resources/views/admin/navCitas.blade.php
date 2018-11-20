<div id="url" style="display: none">{{url('')}}</div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      {!! link_to('/', "Veterinaria Kaia", $attributes = array('class' => 'navbar-brand main-title')) !!}
    </div>

    <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" aria-expanded="false" style="height: 1px;">
        <ul class="nav navbar-nav">
          <li><a href="{{ url('admin/appointments') }}">Citas<span class="sr-only">(current)</span></a></li>
          <li><a href="{{ url('admin/availability') }}">Disponibilidad</a></li>
          <li><a href="{{ url('admin/packages') }}">Paquetes</a></li>
          <li><a href="{{ url('admin/configuration') }}">Configuracion</a></li>
          <li><a href="{{ route('pcontrol') }}">Panel de Control Productos</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Cerrar Sesión</a></li>
        </ul>
    </div>
  </div>
</nav>
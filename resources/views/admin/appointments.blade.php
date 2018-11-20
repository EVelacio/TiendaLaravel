@extends('admin/templateCitas')
@section('conten')
<div class="col-lg-8">
	<div id="error"></div>
	<div id="calendar"></div>
</div>
<div class="col-lg-4">
	<legend> Detalles </legend>
	<div id="appointment-details">
		<p>Click en el pedido para ver detalles.</p>
	</div>
</div>

<script src="{{ asset('/js/admin/appointments.js') }}"></script>
@stop
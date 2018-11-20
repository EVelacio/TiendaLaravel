@extends('admin/templateCitas')
@section('conten')
<div class="col-md-offset-2 col-md-8">
	<div id="error"></div>
	<div id="calendar"></div>
</div>
<script src="{{ asset('/js/admin/availability.js') }}"></script>
@stop
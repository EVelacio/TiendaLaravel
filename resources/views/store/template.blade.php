<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Tienda')</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/lumen/bootstrap.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Poiret+One|Lobster+Two' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>
<body>

	@if(\Session::has('message'))
		@include('store.partials.message')
	@endif
	
	@include('store.partials.nav')

	@yield('content')

	<section>
		<div align="center" style="background-color:white">
			<h3>Ubicacion Google Maps.</h3>
			<iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d3695.3598575906053!2d-100.94045168519926!3d22.15036995391834!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x842aa22b760e2d93%3A0x87c4da6fba5c21c2!2sTecnol%C3%B3gico+Nacional+De+M%C3%A9xico+Campus+San+Luis+Potos%C3%AD%2C+Ponciano+Arriaga%2C+78437+Soledad+de+Graciano+S%C3%A1nchez%2C+S.L.P.!3m2!1d22.150365!2d-100.93826299999999!5e0!3m2!1ses-419!2smx!4v1542676452436" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>		</div>

	</section>
	<br>

	@include('store.partials.footer')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="{{ asset('js/pinterest_grid.js') }}"></script>
	<script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
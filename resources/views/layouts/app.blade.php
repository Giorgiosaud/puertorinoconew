<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>{{ config('app.name', 'Puertorincoo') }}</title>

	<!-- Styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="{{ mix('css/app.css') }}" rel="stylesheet">
	<!-- Scripts -->
	<script>
		window.Laravel = {!! json_encode([
			'csrfToken' => csrf_token(),
			]) !!};
		</script>
	</head>
	<body>
		<div id="app">
			@include('layouts.assets.nav')
			@yield('content')
			<footer class="footer">
				<div class="container">
					<div class="content has-text-centered">
						<p>
							<strong>Sistema de Reservas</strong> realizado por <a href="http://zonapro.us">Zonapro.us</a> y <a href="http://giorgiosaud.com">Giorgiosaud</a>.
						</p>
						<p>
							<a class="icon" href="https://github.com/jgthms/bulma">
								<i class="fa fa-github"></i>
							</a>
						</p>
					</div>
				</div>
			</footer>
		</div>

		<!-- Scripts -->
		<script src="{{ mix('js/app.js') }}"></script>
	</body>
	</html>

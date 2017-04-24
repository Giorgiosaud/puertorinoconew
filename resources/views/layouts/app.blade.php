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
			<nav class="nav">
				<div class="nav-left">
					<a class="nav-item">
						<img src="/img/logo.png" alt="Logo puertorinoco">
					</a>
				</div>

				<div class="nav-center">
					<a href="https://www.facebook.com/puertorinoco" class="nav-item">
						<span class="icon">
							<i class="fa fa-facebook"></i>
						</span>
					</a>
					<a class="nav-item" href="http://instagram.com/puertorinoco/">
						<span class="icon">
							<i class="fa fa-instagram"></i>
						</span>
					</a>
					<a class="nav-item" href="http://twitter.com/puertorinoco">
						<span class="icon">
							<i class="fa fa-twitter"></i>
						</span>
					</a>
				</div>

				<!-- This "nav-toggle" hamburger menu is only visible on mobile -->
				<!-- You need JavaScript to toggle the "is-active" class on "nav-menu" -->
				<span class="nav-toggle">
					<span></span>
					<span></span>
					<span></span>
				</span>

				<!-- This "nav-menu" is hidden on mobile -->
				<!-- Add the modifier "is-active" to display it on mobile -->
				<div class="nav-right nav-menu">
					<a class="nav-item" href="http://puertorinoco.com">
						Webisite
					</a>
					@if(Auth::guest())
					<a href="/login" class="nav-item">
						Log In
					</a>
					<a href="/register" class="nav-item">
						Register
					</a>
					@else
					<a class="nav-item is-tab">
						<figure class="image is-16x16" style="margin-right: 8px;">
							<img src="https://www.gravatar.com/avatar/{{md5( strtolower( trim( Auth::user()->email ) ) )}}?s=16.jpg">
						</figure>
						{{ Auth::user()->name }}
					</a>
					<a href="/logout" class="nav-item is-tab">Log out</a>
					@endif
				</div>
			</nav>
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

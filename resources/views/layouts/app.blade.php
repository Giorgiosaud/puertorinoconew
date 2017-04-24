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
			@yield('content')
			<footer class="footer">
				<div class="container">
					<div class="content has-text-centered">
						<p>
							<strong>Bulma</strong> by <a href="http://jgthms.com">Jeremy Thomas</a>. The source code is licensed
							<a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
							is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC ANS 4.0</a>.
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

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
			<section class="hero is-primary is-medium">
				<!-- Hero header: will stick at the top -->
				<div class="hero-head">
					<header class="nav">
						<div class="container">
							<div class="nav-left">
								<a class="nav-item">
									<img src="images/bulma-type-white.png" alt="Logo">
								</a>
							</div>
							<span class="nav-toggle">
								<span></span>
								<span></span>
								<span></span>
							</span>
							<div class="nav-right nav-menu">
								<a class="nav-item is-active">
									Home
								</a>
								<a class="nav-item">
									Examples
								</a>
								<a class="nav-item">
									Documentation
								</a>
								<span class="nav-item">
									<a class="button is-primary is-inverted">
										<span class="icon">
											<i class="fa fa-github"></i>
										</span>
										<span>Download</span>
									</a>
								</span>
							</div>
						</div>
					</header>
				</div>

				<!-- Hero content: will be in the middle -->
				<div class="hero-body">
					<div class="container has-text-centered">
						<h1 class="title">
							Title
						</h1>
						<h2 class="subtitle">
							Subtitle
						</h2>
					</div>
				</div>

				<!-- Hero footer: will stick at the bottom -->
				<div class="hero-foot">
					<nav class="tabs">
						<div class="container">
							<ul>
								<li class="is-active"><a>Overview</a></li>
								<li><a>Modifiers</a></li>
								<li><a>Grid</a></li>
								<li><a>Elements</a></li>
								<li><a>Components</a></li>
								<li><a>Layout</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</section>

			@yield('content')
		</div>

		<!-- Scripts -->
		<script src="{{ mix('js/app.js') }}"></script>
	</body>
	</html>

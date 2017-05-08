<nav class="nav is-blue">
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
		<a class="nav-item" href="http://puertorinoco.com/">
			<span class="icon">
				<i class="fa fa-external-link"></i>
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
			<figure class="image is-32x32" style="margin-right: 8px;">
				<img src="https://www.gravatar.com/avatar/{{md5( strtolower( trim( Auth::user()->email ) ) )}}?s=64.jpg">
			</figure>
			{{ Auth::user()->name }}
		</a>
		<a href="{{ route('logout') }}" class="nav-item is-tab"
		onclick="event.preventDefault();
		document.getElementById('logout-form').submit();">					Logout				</a>

		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			{{ csrf_field() }}
		</form>

		@endif
	</div>
</nav>
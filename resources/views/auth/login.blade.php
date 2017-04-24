@extends('layouts.app')

@section('content')

<section class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				Login
			</h1>
			<h2 class="subtitle">
				Llena el formulario con tus credenciales
			</h2>
		</div>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="heading">
			<h1 class="title">Log In Form</h1>
			<h2 class="subtitle">
				A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
			</h2>
			<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
				{{ csrf_field() }}

				

				<div class="field">
					<label class="label">E-Mail Address</label>
					<p class="control has-icons-left has-icons-right">
						<input  class="input {{ $errors->has('login') ? 'is-danger' : '' }} " type="text" name="login" placeholder="Email input" value="{{ old('login') }}" required autofocus>
						<span class="icon is-small is-left">
							<i class="fa fa-envelope"></i>
						</span>
						@if($errors->has('login'))
						<span class="icon is-small is-right">
							<i class="fa fa-warning"></i>
						</span>
						@endif
					</p>
					@if($errors->has('login'))
					<p class="help is-danger">{{ $errors->first('login') }}</p>
					@endif
				</div>
				<div class="field">
					<label class="label">Password</label>
					<p class="control">
						<input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" placeholder="Password" name="password">
					</p>
					@if($errors->has('password'))
					<p class="help is-danger">{{ $errors->first('password') }}</p>
					@endif
				</div>
				<div class="field">
					<p class="control">
						<label class="checkbox">
							<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
							Remember Me
						</label>
					</p>
				</div>

				<div class="field is-grouped">
					<p class="control">
						<button class="button is-primary">Login</button>
					</p>
					<p class="control">
						<a class="button is-link" href="{{ route('password.request') }}">Forgot Your Password?</a>
					</p>
				</div>
		</form>

	</div>
</div>
</section>

@endsection

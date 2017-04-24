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
					<input id="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }} " type="email" placeholder="Email input" value="{{ old('email') }}" required autofocus>
						<span class="icon is-small is-left">
							<i class="fa fa-envelope"></i>
						</span>
						<span class="icon is-small is-right">
							<i class="fa fa-warning"></i>
						</span>
					</p>
					<p class="help is-danger">{{ $errors->first('email') }}/p>
				</div>

				<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
					<label for="password" class="col-md-4 control-label">Password</label>

					<div class="col-md-6">
						<input id="password" type="password" class="form-control" name="password" required>

						@if ($errors->has('password'))
						<span class="help-block">
							<strong>{{ $errors->first('password') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-6 col-md-offset-4">
						<div class="checkbox">
							<label>
								<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
							</label>
						</div>
					</div>
				</div>

				<div class="form-group">
					<div class="col-md-8 col-md-offset-4">
						<button type="submit" class="btn btn-primary">
							Login
						</button>

						<a class="btn btn-link" href="{{ route('password.request') }}">
							Forgot Your Password?
						</a>
					</div>
				</div>
			</form>

		</div>
	</div>
</section>

@endsection

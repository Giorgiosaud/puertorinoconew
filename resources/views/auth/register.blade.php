@extends('layouts.app')

@section('content')

<section class="hero is-success">
	<div class="hero-body">
		<div class="container">
			<h1 class="title">
				Register
			</h1>
			<h2 class="subtitle">
				Llena el formulario con tus credenciales
			</h2>
		</div>
	</div>
</section>
<section class="hero is-success">
	<div class="container">
		<div class="heading">
			<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
				{{ csrf_field() }}
				<div class="field">
					<label class="label">Nombre</label>
					<p class="control has-icons-left has-icons-right">
						<input  class="input {{ $errors->has('name') ? 'is-danger' : '' }} " type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required autofocus>
						<span class="icon is-small is-left">
							<i class="fa fa-user"></i>
						</span>
						@if($errors->has('name'))
						<span class="icon is-small is-right">
							<i class="fa fa-warning"></i>
						</span>
						@endif
					</p>
					@if($errors->has('name'))
					<p class="help is-danger">{{ $errors->first('name') }}</p>
					@endif
				</div>
				<div class="field">
					<label class="label">Email</label>
					<p class="control has-icons-left has-icons-right">
						<input  class="input {{ $errors->has('email') ? 'is-danger' : '' }} " type="text" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus>
						<span class="icon is-small is-left">
							<i class="fa fa-envelope"></i>
						</span>
						@if($errors->has('email'))
						<span class="icon is-small is-right">
							<i class="fa fa-warning"></i>
						</span>
						@endif
					</p>
					@if($errors->has('email'))
					<p class="help is-danger">{{ $errors->first('email') }}</p>
					@endif
				</div>
				<div class="field">
					<label class="label">Usuario</label>
					<p class="control has-icons-left has-icons-right">
						<input  class="input {{ $errors->has('usuario') ? 'is-danger' : '' }} " type="text" name="usuario" placeholder="Usuario" value="{{ old('usuario') }}" required autofocus>
						<span class="icon is-small is-left">
							<i class="fa fa-user-o"></i>
						</span>
						@if($errors->has('usuario'))
						<span class="icon is-small is-right">
							<i class="fa fa-warning"></i>
						</span>
						@endif
					</p>
					@if($errors->has('usuario'))
					<p class="help is-danger">{{ $errors->first('usuario') }}</p>

					@endif
				</div>
				<div class="field">
					<label class="label">Clave</label>
					<p class="control">
						<input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" placeholder="Password" name="password">
					</p>
					@if($errors->has('password'))
					<p class="help is-danger">{{ $errors->first('password') }}</p>
					@endif
				</div>
				<div class="field">
					<label class="label">Confirmacion de Clave</label>
					<p class="control">
						<input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password" placeholder="Confirmacion de Password" name="password_confirmation">
					</p>
					@if($errors->has('password_confirmation'))
					<p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
					@endif
				</div>
		

				<div class="field is-grouped">
					<p class="control">
						<button class="button is-primary">Register</button>
					</p>
				</div>
			</form>

		</div>
	</div>
</section>

@endsection
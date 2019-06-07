@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
	<div class="form">
		
			<div class="form-login text-center">
				<div class="login-text mb-3">
					<h4>@lang('login.welcome')</h4>
					<p class="text-muted">@lang('login.description')</p>
					<a href="{{ route('register') }}">
						<small>@lang('login.no_account')</small>
					</a>
				</div>
				<form method="POST" action="{{ route('login') }}">
					@csrf
					
					<input id="email" type="email" class="form-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="@lang('login.email')" required autofocus>
					
					@if ($errors->has('email'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
					@endif
					
					<input id="senha" type="password" class="form-input form-control{{ $errors->has('senha') ? ' is-invalid' : '' }}" name="password" placeholder="@lang('login.password')" required>
					
					@if ($errors->has('senha'))
					<span class="invalid-feedback" role="alert">
						<strong>{{ $errors->first('senha') }}</strong>
					</span>
					@endif
					
					<button type="submit" class="form-button btn btn-primary">
						@lang('login.button_login')
					</button>
					
				</form>
				<a class="btn btn-link" href="{{ route('password.request') }}">
					<small>@lang('login.forgot_password')</small>
				</a>
			</div>

	</div>
</div>
@endsection

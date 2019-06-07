@extends('layouts.app')

@section('content')
<div class="row justify-content-center register-content">
  <div class="form">
    <div class="form-register text-center">
    <div class="login-text mb-3">
					<h4>É um prazer te conhecer!</h4>
					<p class="text-muted">A gente so precisa de algumas informações, é rapidinho.</p>
					<a href="{{ route('login') }}">
						<small> Já tem uma conta? </small>
					</a>
		</div>
    <form method="POST" action="{{ route('register') }}">
      @csrf
    
        <input id="name" type="text" 
        class="form-input form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" 
        name="name" value="{{ old('name') }}" placeholder="Nome" required autofocus>
        
        @if ($errors->has('name'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif   

        <input id="sobrenome" type="text" 
        class="form-input form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}" 
        name="surname" value="{{ old('surname') }}" placeholder="Sobrenome" required >
        
        @if ($errors->has('surname'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('surname') }}</strong>
        </span>
        @endif 
 
        <input id="birth" type="text" 
        class="form-input form-control{{ $errors->has('birth') ? ' is-invalid' : '' }}" 
        name="birth" value="{{ old('birth') }}"
        placeholder="Data de nascimento"
        onfocus="(this.type='date')"
        
        required >
        
        @if ($errors->has('birth'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('birth') }}</strong>
        </span>
        @endif

        <input id="phone" type="text" 
        class="form-input form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" 
        name="phone" value="{{ old('phone') }}" placeholder="Telefone" required >
        
        @if ($errors->has('phone'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('phone') }}</strong>
        </span>
        @endif 

        <input id="email" type="email" 
        class="form-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" 
        name="email" value="{{ old('email') }}" placeholder="E-mail" required>
        
        @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    
        <input id="password" type="password" 
        class="form-input form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" 
        name="password" placeholder="Senha" required>
        
        @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    
        <button type="submit" class="form-button btn btn-primary">
          {{ __('Cadastrar') }}
        </button>
          
    </form>
  </div>
  </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
  
  <div class="header-text mb-3 mt-5">
    <h3>Esqueceu a senha?</h3>
    <p class="text-muted">Não se preocupa, a gente te ajuda nisso.</p>        
  </div>
  
  @if (session('status'))
  <div class="alert alert-success" role="alert">
    {{ session('status') }}
  </div>
  @endif
  <div class="text-center justify-content-center row mt-5">
    <form method="POST" action="{{ route('password.email') }}">
      @csrf
      <small class="text-muted"> Digite seu e-mail abaixo para recuperar a sua senha.</small> 
      <input id="email" type="email" class="mt-3 form-input form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required>
      
      @if ($errors->has('email'))
      <span class="invalid-feedback" role="alert">
        <strong>{{ $errors->first('email') }}</strong>
      </span>
      @endif
      
      <button type="submit" class="w-100 btn btn-primary mt-2">Enviar</button>
    </form>
  </div>
    
</div>
@endsection

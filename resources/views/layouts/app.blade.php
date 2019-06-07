<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name') }}</title>
	<script src="{{ asset('js/app.js') }}" defer></script>
	<link href="{{ asset('css/app.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick-theme.css"/>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<<script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.9.0/slick/slick.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body class="@yield('class-body')">
	<div id="app">
		<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
			<div class="container">
				<a class="navbar-laravel-logo navbar-brand" href="{{ url('/home') }}">
					<img style="width: 90px; height: auto;" src="../images/cobertura-logo.png"/>
				</a>
				<!-- Searchbar start -->
				<form class="navbar-laravel-searchbar input-group mb-3" action="/search" method="GET" role="search">
					<input name="q" type="text" class="form-control" placeholder="Busque por cidade, bairro ou região" aria-label="Search" aria-describedby="busca-imovel">
					<div class="input-group-append">
						<button class="btn btn-outline-primary" style="z-index: 0" type="submit" id="button-addon2"><i class="material-icons">search</i></button>
					</div>
				</form>
				<!-- Searchbar end -->
				<button class="navbar-laravel-button-menu navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<div class="navbar-laravel-menu collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						@auth
						<li class="nav-item dropdown">
							<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								Bem-vindo, {{ Auth::user()->name }} <span class="caret"></span>
							</a>
							
							<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								@if( Auth::user()->admin)
									<a class="dropdown-item" href="#"><i class="material-icons">dashboard</i> Dashboard</a>
								@endif
									<a class="dropdown-item" href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}</a>
							
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>
						</div>
					</li>
					@endauth
				</ul>
			</div>
		</div>
	</nav>
	
	<main>
		@yield('content')
	</main>
</div>
</body>
<script type="text/javascript">
$(document).ready(function(){
	$('.house-pics').slick({
		autoplay: false,
		arrows: false,
		dots: true,
		infinite: false,
		slidesToShow: 3,
		slidesToScroll: 1
	});
	});
</script>
</html>

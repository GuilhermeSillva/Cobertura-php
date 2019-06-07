@extends('layouts.app')
@section('class-body', 'house-perfil')
@section('content')
<div class="row justify-content-center house-pics w-100 house-perfil-slider" >
	<img alt="Foto do imóvel" src="{{ asset('images/casa.jpeg') }}" width="100%" height="250px"/>
	<img alt="Foto do imóvel" src="{{ asset('images/exemplo1.jpeg') }}" width="100%" height="250px"/>
	<img alt="Foto do imóvel" src="{{ asset('images/exemplo2.jpg') }}" width="100%" height="250px"/>
	<img alt="Foto do imóvel" src="{{ asset('images/exemplo3.jpeg') }}" width="100%" height="250px"/>
	<img alt="Foto do imóvel" src="{{ asset('images/exemplo4.jpeg') }}" width="100%" height="250px"/>
</div>
<div class="house-perfil-container">
	<div class="row">
		<div class="hpc-content">
			<?php 
			/* TODO: Adicionar botões estilizados de mapa e rua, etc 
			<div class="row mb-3">
				<button class="mx-auto btn btn-sm btn-primary">Fotos</button>
				<button class="mx-auto btn btn-sm btn-outline-primary">Mapa</button>
				<button class="mx-auto btn btn-sm btn-outline-primary">Rua</button>
			</div> */ 
			?>
			<div class="text-left">
				<h1>Aluga-se: Casa de Rico </h1>
				<p class="text-muted">CEP: 12245-810</p>
			</div>
			<hr>
			<div class="row d-flex flex-row justify-content-between icons">
				<div class="d-flex flex-column text-center">
					<i class="fas fa-bed fa-2x"></i>
					<span>3 dorms</span>
				</div>
				<div class="d-flex flex-column text-center">
					<i class="fas fa-bath fa-2x"></i>
					<span>2 ban's</span>
				</div>
				<div class="d-flex flex-column text-center">
					<i class="fas fa-car fa-2x"></i>
					<span>4 vagas</span>
				</div>
				<div class="d-flex flex-column text-center">
					<i class="fas fa-ruler-combined fa-2x"></i>
					<span>200m²</span>
				</div>
			</div>
			<hr>
			<div class="row w-100">
				<div class="col-1">
					<i class="fas fa-align-left"></i>
				</div>
				<div class="col-11">
					<h6>Descrição</h6>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit arcu non enim posuere, eu ultricies est accumsan. Sed quis justo facilisis, iaculis mi non, elementum dolor. Nunc at pulvinar dolor. Ut at metus facilisis, cursus velit sed, blandit mauris. Pellentesque pretium quam non purus aliquet sollicitudin. Morbi vitae arcu ligula. Nam est orci, dictum a pulvinar sit amet, dapibus quis lorem. Phasellus consectetur quam nec ligula euismod, ac dapibus dolor venenatis.</p>
				</div>
			</div>
			<div class="row w-100">
				<div class="col-1">
					<i class="fas fa-hotel"></i>
				</div>
				<div class="col-11">
					<h6>Outras caracteristicas</h6>
					<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras suscipit arcu non enim posuere, eu ultricies est accumsan. Sed quis justo facilisis, iaculis mi non, elementum dolor.</p>
				</div>
			</div>
			<hr>			
			<div class="w-100">
				<h5>O que preciso para alugar esse imóvel?</h5>
				<h6>Comprovar renda mensal bruta de aproximadamente</h6>
				<p class="text-green">R$ 6.000,00</p>
				<p class="text-muted">A renda pode ser composta por até 4 pessoas físicas. Esse valor pode variar em função do aluguel final acordado.</p>
			</div>
			<hr>
			<div class="row d-flex flex-column">
				<h3>Anunciante</h3>
				<div class="row">
					<img alt="Foto do anunciante" src="https://picsum.photos/50/50?image=1005" class="img-circle"/> 
					<div class="ml-2">
						<p class="mb-0 font-weight-bold">Renato Carvalho Pereira Santos de Bragrança</p> 
						<a href="#">Enviar uma mensagem</a>
					</div>
				</div>
			</div>
		</div>
		<div class="card p-3 js-card">
			<div class="card-body">
				<div class="row font-weight-bold">
					<p>Aluguel</p>
					<p class="ml-auto"> R$ 2.000,00</p>
				</div>
				<div class="row text-muted">
					<p>Condomínio</p>
					<p class="ml-auto"> R$ 0,00</p>
				</div>                    
				<div class="row text-muted ">
					<p>Outras taxas</p>
					<p class="ml-auto"> R$ 0,00</p>
				</div>
				<div class="card-footer px-0">
					<p class="card-footer-price">Total: R$ 2.000,00</p>
					<div class="card-footer-info">
						<i class="far fa-lightbulb fa-2x text-warning"></i>
						<p class="cfi-text">Você não precisa de fiador, seguro fiança ou depósito caução!</p>
					</div>
					<button class="btn btn-primary w-100">Agendar Visita</button>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="house-perfil-mobile-footer">
	<p class="hpmf-text js-btn-footer">
		Ver valores
	</p>
</div>

@endsection

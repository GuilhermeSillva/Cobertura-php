@extends('layouts.app')
@section('class-body', 'pg-home')
@section('content')
<div class="container">
    <!-- Melhorar forma de exibir essas informações -->
    @if($search)
        <div class="row d-flex flex-column align-items-center mb-3">
            <h1 class="display-4">🔎 Encontrei esses {{ count($details)}} imóveis</h1>
        </div>
    @else
        <div class="row d-flex flex-column align-items-center mb-3">
            <h1 class="display-4">🎉 Opa! Encontramos alguns imóveis pra você</h1>
        </div>
    @endif
    @if(isset($details))
        @if(count($details) == 0)
            <div class="alert alert-danger" role="alert">
                🤔 Parece que não existe este imóvel que você está procurando... Veja outros imóveis que você pode gostar.
            </div>
        @else
            <section class="home-houses row">
                <!-- Start Imóvel -->
                @foreach($details as $realty)
                    <article class="col-md-4">
                        <div class="house">
                            <div class="house-thumb">
                                <img src="{{ asset("storage/realty/$realty->pk_realty/thumb.jpeg") }}" alt="Casa" class="house-thumb-img">
                                @if(!$realty->sale_value)
                                <p class="house-thumb-price">R$ {{ $realty->monthly_payment }} <span class="house-thumb-price-min">/mês</span></p>
                                @else
                                    <p class="house-thumb-price">R$ {{ $realty->sale_value }}</p>
                                @endif
                            </div>
                            <div class="house-header">
                                <h3 class="house-header-title">{{ $realty->title }}</h3>
                                <p class="house-header-location">{{ $realty->adress }}</p>
                            </div>
                            <div class="house-info">
                                <div class="house-info-item bedroom">{{ $realty->bedrooms }}</div>
                                <div class="house-info-item bathroom"><i class="fa fa-bath"></i>{{ $realty->suites }}</div>
                                <div class="house-info-item garage">{{ $realty->garage }}</div>
                                <div class="house-info-item ruler"><i class="fa fa-ruler-combined"></i>{{ $realty->house_metreage }}</div>
                            </div>
                        </div>
                    </article>
                @endforeach
                <!-- End Imóvel -->
            </section>
        @endif
    @endif
    {{ $details->appends(request()->query())->links() }}
</div>
@endsection

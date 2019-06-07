@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img style="width: 70px; height: auto;" src="https://i.imgur.com/Dq6wVvB.png"/>
        @endcomponent
    @endslot
{{-- Body --}}
<center>
<img style="width:300px; height:auto;" src="https://i.imgur.com/jpWQII9.png"/>
<h1>VAMOS COMEMORAR!</h1>
Primeiramente estamos muito feliz que você conseguiu um novo <strong>lar</strong> para viver! Parabéns, comemore muito! 🎉<br>
A proposta foi aceita pelo corretor <strong>João de Paulo Neto</strong>, precisamos apenas da sua assinatura em nosso contrato de alugel do imóvel.

@component('mail::button', ['url' => config('app.url')])
Assinar o contrato
@endcomponent

<strong>Ops!</strong> Para assinar seu contrato é necessário utilizar nosso aplicativo, infelizmente modo de assinatura não está disponível para computadores/notebook 😕

<br><br>
<h1>🏡 Relembrando a casa</h1>
@component('mail::panel')
<img style="height: auto; width: auto;" src="https://www.control4.com/files/large/d1c4382a043a2f0152963aa2e6d65f46.jpeg"/>
<h1>MANSÃO THUG STRONDA</h1>
<p><strong>Endereço:</strong> Rua Gisele Martins 777, São José dos Campos, São Paulo<br>
<strong>Valor do alugel:</strong> R$700,00<br>
<strong>Seguradora:</strong> Cobertura Seguros</p>
@endcomponent
</center>
{{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset
{{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}.
        @endcomponent
    @endslot
@endcomponent
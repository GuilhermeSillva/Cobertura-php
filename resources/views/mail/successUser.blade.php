@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img style="width: 70px; height: auto;" src="https://i.imgur.com/Dq6wVvB.png"/>
        @endcomponent
    @endslot
{{-- Body --}}
<center>
<img style="width:300px; height:auto;" src="https://i.imgur.com/psd4MgH.png"/>
<h1>FALTA POUCO!</h1>
Agora basta você confirmar seu email para pode começar a fazer acordos com a gente. Estou com uma puta preguiça pra escrever algo legal
Meu trabalho foi muito cansativo e estou com uma enorme preguiça em pensar algo maravilhoso, então imagine um texto colossal aqui viu

@component('mail::button', ['url' => config('app.url')])
Assinar o contrato
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
@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <img style="width: 70px; height: auto;" src="https://i.imgur.com/Dq6wVvB.png"/>
        @endcomponent
    @endslot
{{-- Body --}}
<center>
<img style="width:300px; height:auto;" src="https://i.imgur.com/6friNoc.png"/>
<h1>Calma, calma!</h1>
Você perdeu a senha, mas estou aqui para ajudar! Clique <a href="localhost:8000/password/reset/{{ $token }}">aqui</a> para
você configurar uma nova senha para sua conta, tente colocar uma senha que você lembre, mas que não seja fácil viu 😃
<br><br>
<h2>Não foi você?</h2>
Olha! tome cuidado, talvez alguém esteja tentando acessar sua conta de forma ilegal. Recomendamos que você altere sua senha para não ter problema ❤️️
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
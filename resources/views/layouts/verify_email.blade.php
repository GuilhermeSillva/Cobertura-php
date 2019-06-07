@if (session('resent'))
    <div class="alert alert-success text-center alert-dismissible fade show" role="alert">
        O email de confirmação foi reenviado para você.
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
<div class="alert alert-warning text-center alert-dismissible fade show" role="alert">
    {{ Auth::user()->name }}, parece que você ainda não validou seu email e por motivos de segurança precisamos dessa confirmação.
    <a href="{{ route('verification.resend') }}">Não recebeu o email de confirmação?</a>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
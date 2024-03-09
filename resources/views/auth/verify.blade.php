@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Falta pouco agora precisamos apenas que você verifique seu e-mail.</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            Reenviamos um email apara você com o link de verificação.
                        </div>
                    @endif

                    Antes de poder adessar a aplicação por vavor valide seu email atraves do link de verificação.
                    Caso não ente recebido o link pode cliar no link abaixo que iremos reenviar o email de verificação.,
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Receber e-mail de verificação</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

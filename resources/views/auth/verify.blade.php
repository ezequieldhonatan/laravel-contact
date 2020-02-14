@extends('auth.layouts.master')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-sm-8 col-xs-8 col-lg-8 col-md-8">

            <div class="card">

                <div class="card-header">
                    Verificação obrigatória    
                </div>

                <div class="card-body">

                    @if ( session('resent') )

                        <div class="alert alert-success" role="alert">
                            Um novo link de verificação foi enviado para o seu endereço de e-mail.
                        </div>
                        
                    @endif

                    Antes de prosseguir, você deve verificar à sua conta!
                    Se você ainda não recebeu o email, basta

                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">

                        @csrf

                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">
                            Solicitar novamente
                        </button>.

                    </form> <!-- form -->

                </div> <!-- card-body -->

            </div> <!-- card -->

        </div> <!-- col-sm-8 col-xs-8 col-lg-8 col-md-8 -->

    </div> <!-- row justify-content-center -->

</div> <!-- container -->

@endsection

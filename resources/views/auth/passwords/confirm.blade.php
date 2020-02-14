@extends('auth.layouts.master')

@section('content')

<div class="container">

    <div class="row">

        <div class="justify-content-center">

            <div class="col-sm-8 col-xs-8 col-lg-8 col-md-8">

                <div class="card">

                    <div class="card-header">
                        Confirmar senha
                    </div>

                    <div class="card-body">
                        
                        Por favor, confirme à sua senha antes de continuar.

                        <form method="POST" action="{{ route('password.confirm') }}">

                            @csrf

                            <div class="form-group row">

                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    Senha
                                </label>

                                <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        
                                    @enderror

                                </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->

                            </div> <!-- form-group row -->

                            <div class="form-group row mb-0">

                                <div class="col-sm-8 col-xs-8 col-lg-8 col-md-8 offset-md-4">
                                    
                                    <button type="submit" class="btn btn-outline-primary">
                                        Confirmar senha
                                    </button>

                                    @if ( Route::has('password.request') )

                                        <a class="btn btn-outline-link" href="{{ route('password.request') }}">
                                            Esqueceu sua senha?
                                        </a>

                                    @endif

                                </div> <!-- col-sm-8 col-xs-8 col-lg-8 col-md-8 offset-md-4 -->

                            </div> <!-- form-group row mb-0" -->

                        </form> <!-- form -->

                    </div> <!-- card-body -->

                </div> <!-- card -->

            </div> <!-- col-sm-8 col-xs-8 col-lg-8 col-md-8 -->

        </div> <!-- row -->

    </div> <!-- justify-content-center -->

</div> <!-- container -->

@endsection

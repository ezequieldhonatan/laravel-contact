@extends('auth.layouts.master')

@section('content')

<div class="container">

    <div class="row">

        <div class="justify-content-center">

            <div class="col-sm-8 col-xs-8 col-lg-8 col-md-8">

                <div class="card">

                    <div class="card-header">
                        Cadastre-se
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('register') }}">

                            @csrf

                            <div class="form-group row">

                                <label for="name" class="col-md-4 col-form-label text-md-right">
                                    Nome
                                </label>

                                <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">

                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        
                                    @enderror

                                </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->

                            </div> <!-- form-group row -->

                            <div class="form-group row">

                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    E-mail    
                                </label>

                                <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                    @enderror

                                </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->

                            </div> <!-- form-group row -->

                            <div class="form-group row">

                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    Senha    
                                </label>

                                <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                    @enderror

                                </div> <!-- col-sm-6 col-xs-6 col-lg-6 col-md-6 -->

                            </div> <!-- form-group row -->

                            <div class="form-group row">

                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">
                                    Confirmar senha
                                </label>

                                <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>

                            </div> <!-- form-group row -->

                            <div class="form-group row mb-0">

                                <div class="col-sm-6 col-xs-6 col-lg-6 col-md-6 offset-md-4">

                                    <button type="submit" class="btn btn-outline-primary">
                                        Cadastrar
                                    </button>

                                </div>

                            </div> <!-- form-group row mb-0 -->
                        
                        </form> <!-- form -->

                    </div> <!-- card-body -->

                </div> <!-- card -->

            </div> <!-- col-sm-8 col-xs-8 col-lg-8 col-md-8 -->

        </div> <!-- row -->

    </div> <!-- justify-content-center -->

</div> <!-- container -->

@endsection

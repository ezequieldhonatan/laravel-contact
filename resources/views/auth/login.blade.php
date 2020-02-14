@extends('auth.layouts.master')

@section('content')

<div class="container">

    <div class="row">

        <div class="justify-content-center">

            <div class="col-sm-8 col-xs-8 col-lg-8 col-md-8">

                <div class="card">

                    <div class="card-header">
                        Área restrita
                    </div>

                    <div class="card-body">

                        <form method="POST" action="{{ route('login') }}">

                            @csrf

                            <div class="form-group row">

                                <label for="email" class="col-md-4 col-form-label text-md-right">
                                    E-mail
                                </label>

                                <div class="col-md-6">

                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        
                                    @enderror

                                </div>

                            </div>

                            <div class="form-group row">

                                <label for="password" class="col-md-4 col-form-label text-md-right">
                                    Senha    
                                </label>

                                <div class="col-md-6">

                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')

                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>

                                    @enderror

                                </div>

                            </div>

                            <div class="form-group row">

                                <div class="col-md-6 offset-md-4">

                                    <div class="form-check">

                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            Lembrar-me
                                        </label>

                                    </div>

                                </div>

                            </div>

                            <div class="form-group row mb-0">

                                <div class="col-md-8 offset-md-4">

                                    <button type="submit" class="btn btn-outline-primary">
                                        Acessar
                                    </button>

                                    @if ( Route::has('password.request') )

                                        <a class="btn btn-outline-link" href="{{ route('password.request') }}">
                                            Esqueceu sua senha?
                                        </a>

                                    @endif
                                    
                                </div> <!-- col-md-8 offset-md-4 -->

                            </div> <!-- form-group row mb-0 -->

                        </form> <!-- form -->

                    </div> <!-- card-body -->

                </div> <!-- card -->

            </div> <!-- col-sm-8 col-xs-8 col-lg-8 col-md-8 -->

        </div> <!-- row -->

    </div> <!-- justify-content-center -->

</div> <!-- container -->

@endsection

@extends('api.v1.system.panel.layouts.master')

@section('content')

<div class="container">

    <div class="row justify-content-center">

        <div class="col-sm-12 col-xs-12 col-lg-12 col-md-12">

            <div class="card">

                <div class="card-header">
                    Dashboard
                </div>

                <div class="card-body">

                    @if ( session('status') )

                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        
                    @endif

                    Acesso concedido!

                </div> <!-- card-body -->

            </div> <!-- card -->

        </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

    </div> <!-- row justify-content-center -->

</div> <!-- container -->

@endsection

@extends('api.v1.system.panel.layouts.master')

@section('content')

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

                <br>

                <div class="text-center">

                    <h3>
                        <strong>
                            Projeto:
                        </strong>
                        Laravel Contact
                    </h3>

                    <h3>
                        <strong>
                            DevOps Engineer:
                        </strong>
                        Ezequiel Dhonatan
                    </h3>

                    <br>

                    <h3>

                        <a href="https://api.whatsapp.com/send?phone=5561998842688&text=Ol%C3%A1%20Ezequiel%3F?!" style="color: #25d366" target="_blank">
                            <i class="fab fa-whatsapp"></i>
                        </a>

                        <a href="https://www.linkedin.com/in/ezequieldhonatan/" style="color: #0e76a8" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>

                        <a href="https://www.facebook.com/profile.php?id=100028793476524" style="color: #3b5998" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>

                        <a href="https://github.com/ezequieldhonatan/laravel-contact" style="color: #171515" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>

                    </h3>   

                </div> <!-- text-center -->

                <br>

            </div> <!-- card-body -->

        </div> <!-- card -->

    </div> <!-- col-sm-12 col-xs-12 col-lg-12 col-md-12 -->

</div> <!-- row justify-content-center -->

@endsection

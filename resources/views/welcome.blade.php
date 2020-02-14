<!--

    Author: Ezequiel Dhonatan
    Criado: 14/02/2020
    Project: Laravel Contact
    WhatsApp: https://api.whatsapp.com/send?phone=5561998842688&text=Ol%C3%A1%20Ezequiel%3F?! (61) 9 9884-2688
    LinkedIn: https://www.linkedin.com/in/ezequieldhonatan/ (Ezequiel Dhonatan)
    Facebook: https://www.facebook.com/profile.php?id=100028793476524 (Ezequiel Dhonatan)
    Github: https://github.com/ezequieldhonatan/laravel-contact (Ezequiel Dhonatan)
    
================================================== -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Laravel Contact - Sistema de gestão de contato">
        <meta name="keywords" content="Laravel, Gestão, Contato">
        <meta name="author" content="Ezequiel Dhonatan">

        <!-- CSRF Token
        ================================================== -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- FONTS
        ================================================== -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
        
        <!-- STYLES
        ================================================== -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>

    <body>

        <div id="app">

            <div class="flex-center position-ref full-height">

                @if ( Route::has('login') )

                    <div class="top-right links">

                        @auth

                            <a href="{{ url('/home') }}">Home</a>

                        @else

                            <a href="{{ route('login') }}">Área do cliente</a>


                            @if ( Route::has('register') )

                                <a href="{{ route('register') }}">Cadastre-se</a>

                            @endif

                        @endauth

                    </div> <!-- top-right links -->

                @endif

                <div class="content">

                    <div class="title m-b-md">
                        
                        <h4>Laravel Contato</h4>

                    </div>


                    <div class="links">

                        <a href="https://api.whatsapp.com/send?phone=5561998842688&text=Ol%C3%A1%20Ezequiel%3F?!" target="_blank">
                            WhatsApp
                        </a>

                        <a href="https://www.linkedin.com/in/ezequieldhonatan/" target="_blank">
                            LinkedIn
                        </a>
                        
                        <a href="https://www.facebook.com/profile.php?id=100028793476524" target="_blank">
                            Facebook
                        </a>

                        <a href="https://github.com/ezequieldhonatan/laravel-contact" target="_blank">
                            GitHub
                        </a>

                    </div> <!-- links -->

                </div> <!-- content -->

            </div> <!-- flex-center position-ref full-height -->

        </div> <!-- #app -->

    </body>

</html>

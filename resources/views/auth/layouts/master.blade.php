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

    <title>Painel - Laravel Contato</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Ezequiel Dhonatan">

    <!-- CSRF Token
    ================================================== -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- FONTS
    ================================================== -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito">
    
    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">

</head>

<body>

    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container">
                
                <a class="navbar-brand" href="{{ url('/') }}">
                    Painel
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    
                    <ul class="navbar-nav ml-auto">
                        
                        @guest

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    Área do cliente
                                </a>
                            </li>

                            @if ( Route::has('register') )

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">
                                        Cadastre-se
                                    </a>
                                </li>

                            @endif

                        @else

                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                    <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sair
                                    </a>

                                    <form id="logout-form" style="display: none;" method="POST" action="{{ route('logout') }}">
                                        @csrf
                                    </form>

                                </div> <!-- dropdown-menu dropdown-menu-right -->

                            </li> <!-- nav-item dropdown -->

                        @endguest

                    </ul> <!-- navbar-nav ml-auto -->

                </div> <!-- collapse navbar-collapse -->

            </div> <!-- container -->

        </nav> <!-- navbar navbar-expand-md navbar-light bg-white shadow-sm -->

        <main class="py-4">

            @yield('content')

        </main> <!-- py-4 -->

    </div> <!-- #app -->

    <!-- JS
    ================================================== -->
    <script src="{{ mix('assets/js/app.js') }}"></script>

</body>

</html>

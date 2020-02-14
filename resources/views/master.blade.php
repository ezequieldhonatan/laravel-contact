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
        <meta name="description" content="Laravel Contact - Sistema de gestão de contato">
        <meta name="keywords" content="Laravel, Gestão, Contato">
        <meta name="author" content="Ezequiel Dhonatan">

        <!-- CSRF Token
        ================================================== -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <!-- FONTS
        ================================================== -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">

        <!-- CSS
        ================================================== -->
        <link rel="stylesheet" href="{{ mix('assets/css/app.css') }}">

    </head>

    <body>

        <div id="app">

            <preloader-component></preloader-component>

            <router-view></router-view>

        </div> <!-- #app -->

        <!-- JS
        ================================================== -->
        <script src="{{ mix('assets/js/app.js') }}"></script>

    </body>

</html>

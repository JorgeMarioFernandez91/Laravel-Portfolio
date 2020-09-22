<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- brings in bootstrap and other necessary resources -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/customCSS.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}"></script>
        
        
    </head>
    <body >

        <div id="app" >
            @yield('welcome')
            @yield('lacamila')
            @yield('clickerstartupgame')
            @yield('portfolio')
            @yield('thesis')
            @yield('about')
            @yield('resume')
            @yield('contact')
        </div>

        <script src="{{ asset('js/app.js') }}" defer></script>
    </body>
</html>
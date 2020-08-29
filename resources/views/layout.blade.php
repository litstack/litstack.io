<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Litstack</title>

        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <x-styles/>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
    </head>
    <body>
        <div id="app">
            @include('partials.navigation')

            <main>
                @yield('content')
            </main>
        </div>
        
        <x-scripts/>
    </body>
</html>

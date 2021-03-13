<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="app"> 
            <router-view></router-view>

            <div class="inline-flex">
                <div class="w-36 p-4 m-6 rounded border-blue-800 bg-black text-white align-middle text-center">
                    <p>Funky Bo Bo</p>
                </div>

                <div class="m-2 p-2 bg-red-600 text-white text-center rounded-3xl">
                    <p>Hot Dog Stand</p>
                </div>
            </div>
        </div>
        
        <script>window.laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

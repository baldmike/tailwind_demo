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

            <div class="p-6 max-w-sm mx-auto bg-white rounded-xl shadow-md flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <img class="h-12 w-12" src="/img/logo.svg" alt="ChitChat Logo">
                </div>
                <div>
                    <div class="text-xl font-medium text-black">ChitChat</div>
                    <p class="text-gray-500">You have a new message!</p>
                </div>
            </div>
        </div>
        
        <script>window.laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

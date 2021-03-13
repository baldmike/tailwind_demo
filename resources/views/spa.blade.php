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

            <div class="flex justify-around">
                <div class="w-80 m-10 p-10  bg-green-600 text-white text-center rounded-full">
                    <p>Funky BoBo</p>
                </div>

                <div class="w-80 m-10 p-10 bg-red-600 text-white text-center rounded-full">
                    <p>Dang Hots</p>
                </div>

                <div class="w-80 m-10 p-10 bg-yellow-300 text-white text-center rounded-full">
                    <p>Banana Stand</p>
                </div>
            </div>

            <div class="flex justify-around">
                <div class="w-80 m-10 p-10  bg-green-600 text-white text-center rounded-full">
                    <p>Funky BoBo</p>
                </div>

                <div class="w-80 m-10 p-10 bg-red-600 text-white text-center rounded-full">
                    <p>Dang Hots</p>
                </div>

                <div class="w-80 m-10 p-10 bg-yellow-300 text-white text-center rounded-full">
                    <p>Banana Stand</p>
                </div>
            </div>

            <div class="flex justify-around">
                <button class="w-80 m-10 p-10  bg-green-600 text-white text-center rounded-full hover:bg-gray-700">
                    <p>Funky BoBo</p>
                </button>

                <button class="w-80 m-10 p-10 bg-red-600 text-white text-center rounded-full hover:bg-yellow-200 hover:text-gray-900">
                    <p>Dang Hots</p>
                </button>

                <button class="w-80 m-10 p-10 bg-yellow-300 text-white text-center rounded-full hover:bg-blue-200 hover:text-gray-900">
                    <p>Banana Stand</p>
                </button>
            </div>

            <div class="flex justify-around">
                <button class="w-80 m-10 p-10  bg-green-600 text-white text-center rounded-full hover:bg-purple-700 outline-none">
                    <p>Funky BoBo</p>
                </button>

                <button class="w-80 m-10 p-10 bg-red-600 text-white text-center rounded-full hover:bg-yellow-700 outline-none">
                    <p>Dang Hots</p>
                </button>

                <button class="w-80 m-10 p-10 bg-yellow-300 text-white text-center rounded-full hover:bg-blue-700 focus:outline-none">
                    <p>Banana Stand</p>
                </button>
            </div>
        </div>
        
        <script>window.laravel = { csrfToken: '{{ csrf_token() }}' }</script>
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>

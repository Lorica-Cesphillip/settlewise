<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome - SettleWise</title>

        <link rel="stylesheet" href="./css/app.css">

        @vite('resources/css/app.css')
    </head>
    <body>

        <div class="bg-white text-black/50 dark:bg-black dark:text-white/50">
            <img src = "{{URL::asset('images/pga-logo.png')}}" alt = "PGA-Logo" id = "image" class = "w-[200px] h-[200px] ali">
            <div class = "bg-white justify-items-center">
                <div>
                    <p class = "text-center fs-1 fw-bold font-family-Inter m-0 px-3 py-2 h3">Welcome to the Albay Provincial Human Settlement Office</p>
                    <p class="text-center text-black text-5xl font-bold leading-[30px]">DOCUMENT MANAGEMENT SYSTEM</p>
                </div>
                @include('layouts.mission-vision')
                <div class="mt-6">
                    <button onclick="{{ route('login') }}" class = "text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        Let's Get Started
                    </button>
                </div>
            </div>
            <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                SettleWise Version alpha 1.0.0
            </footer>
        </div>
    </body>
</html>

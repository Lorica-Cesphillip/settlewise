<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'SettleWise') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="flex flex-col justify-center items-center bg-white">
            <div>
                <a href="/">
                    <x-pga-logo class="w-20 h-20 fill-current text-gray-500" />
                </a>
            </div>
            <div class="w-full text-center"><span style="text-black text-base font-normal leading-loose">Welcome to<br/></span><span style="text-black text-xl font-bold leading-10">SETTLEWISE: A DOCUMENT MANAGEMENT SYSTEM</span></div>
            <div class="w-full sm:max-w-md mt-6 px-3 bg-white overflow-hidden">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'APHSO-DMS') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased h-max w-max">
        <div class="relative min-h-screen bg-white ">
            @include('layouts.sidebar')

            <!-- Page Content -->
            <main class = "w-max h-max left-[369px] top-[53px] absolute">
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

<script>
    function appFooterComponent(){
        return{
            time: new Date(),
            init(){
                setInterval(() => {
                    this.time = new Date();
                }, 1000);
            },
            getTime(){
                return moment(this.time).formay('DD MMMM, YYYY HH:mm:ss')
            },
        }
    }
</script>

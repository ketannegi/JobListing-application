<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="../css/app.css" rel="stylesheet"/>

        <!-- Styles -->

    </head>
    <body class="bg_img  antialiased min-h-[100vh] ">
        <div class="sm:justify-center sm:items-center flex min-h-screen bg-dots-darker bg-center dark:bg-dots-lighter dark:bg-gray-600 selection:bg-red-500 selection:text-whiter">
            <div class="relative min-h-[100px]">

                    <div class="sm:fixed sm:top-0 sm:left-20 p-6 text-right z-10  ">
                          <a href="{{route('home')}}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                     </div>
                    <div class="sm:fixed sm:top-0 left-50%  p-6 text-right z-10  ">
                     <a href="{{route('addpost')}}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">JOB POST</a>
                    </div>

        @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10  ">
                    @auth
                        <a href="{{ route('dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">{{ Auth::user()->name}}</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-gray-400 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

<div>





@yield('content')

    </body>
</html>

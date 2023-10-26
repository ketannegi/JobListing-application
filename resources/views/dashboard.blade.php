<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')

    <title>Document</title>
</head>
<body>



<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{route('home')}}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>

                </div>
            </div>
        </div>

     <div class="max-w-7xl border my-6 flex justify-between bg-white sm:px-6 lg:px-8  mx-auto">
       <h1 class="font-extrabold  px-4 py-2">
        YOUR JOB POST
       </h1>
       <p class="px-4 py-2 font-bold text-gray-500">
       <a href="{{route('post')}}"> ADD NEW POST </a>
       </p>

     </div>




    </div>
</x-app-layout>

</body>
</html>

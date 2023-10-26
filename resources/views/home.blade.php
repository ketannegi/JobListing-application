<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/c8ff809d0c.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
@extends('welcome')
    @section('content')
<div class="min-h-[100vh] w-[100%]  my-[8%] py-[20px]  ">
<div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-[90%] m-auto   gap-10 ">



@foreach($tasks as $task)
    <div class="container grid  p-2  ">
       <div class=" grid grid-rows-4 bg-white py-4 px-3 min-h-[40vh] rounded-lg">

          <div class="grid grid-cols-4  row-span-1  px-4 ">
               <h3 class="font-semibold col-span-2 text-md capitalize text-gray-700 ">{{$task->profile}}</h3>
               <h3 class="font-bold col-span-2 justify-self-end text-md  capitalize text-gray-700 ">{{$task->company}}</h3>
          </div>
          <div class="px-4 row-span-2  mt-2">
            <h2  class="font-bold text-md text-gray-800   flex items-center gap-2  ">
            <svg width="15px" height="15px" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
  <path fill="var(--ci-primary-color, #000000)" d="M334.627,16H48V496H472V153.373ZM440,166.627V168H320V48h1.373ZM80,464V48H288V200H440V464Z" class="ci-primary"/>
  <rect width="224" height="32" x="136" y="296" fill="var(--ci-primary-color, #000000)" class="ci-primary"/>
  <rect width="224" height="32" x="136" y="376" fill="var(--ci-primary-color, #000000)" class="ci-primary"/>
</svg>Description:</h2>
            <p class="font-semibold text-md text-gray-500 text-sm  ">{{$task->description}}.</p>
          </div>
          <div class="flex  row-span-1  solid justify-between mt-2 px-4 ">
              <h3 class="font-bold text-sm self-end flex items-center gap-1 ">
                {{$task->min_salary}}-{{$task->max_salary}}
                                <svg width="20px" height="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M6 4H10.5M10.5 4C12.9853 4 15 6.01472 15 8.5C15 10.9853 12.9853 13 10.5 13H6L13 20M10.5 4H18M6 8.5H18" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
        </h3>
              <h3 class="font-bold text-md self-end flex items-center gap-1">
              <svg width="18px" height="18px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path opacity="0.15" fill-rule="evenodd" clip-rule="evenodd" d="M12 21C16.4183 19 20 15.4183 20 11C20 6.58172 16.4183 3 12 3C7.58172 3 4 6.58172 4 11C4 15.4183 7.58172 19 12 21ZM12 14C13.6569 14 15 12.6569 15 11C15 9.34315 13.6569 8 12 8C10.3431 8 9 9.34315 9 11C9 12.6569 10.3431 14 12 14Z" fill="#000000"/>
<path d="M12 14C13.6569 14 15 12.6569 15 11C15 9.34315 13.6569 8 12 8C10.3431 8 9 9.34315 9 11C9 12.6569 10.3431 14 12 14Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M12 21C16.4183 19 20 15.4183 20 11C20 6.58172 16.4183 3 12 3C7.58172 3 4 6.58172 4 11C4 15.4183 7.58172 19 12 21Z" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>{{$task->type}}</h3>
          </div>


       </div>
     <div class="flex   justify-evenly  items-center     ">
        <div class=" p-2 rounded-xl">
           <button type="button" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">
                <a class="text-sm font-bold" href="{{route('delete',$task->id)}}">
                  DELETE POST
                </a>
            </button>
        </div>
        <div class=" p-2  rounded-xl">
        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:h over:bg-green-700 dark:focus:ring-green-800">
                <a class="text-sm font-bold" href="{{route('update',$task->id)}}">
                    UPDATE POST
                </a>
            </button>
        </div>
     </div>

   </div>

   @endforeach
   </div>
</div>

    @endsection
    <script >
    </script>
</body>
</html>

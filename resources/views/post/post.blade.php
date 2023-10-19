<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobPost</title>
</head>
<body>
    @extends('welcome')
    @section('content')
<div class="min-h-[100vh] w-[100%] my-[10%]">
<div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 w-[90%] m-auto   gap-10 ">



@foreach($tasks as $task)
    <div class="grid  ">
       <div class=" grid bg-white py-4  px-3 min-h-[40vh] rounded-lg">

          <div class="flex  justify-between px-4">
               <h3 class="font-bold text-lg">{{$task->profile}}</h3>
               <h3 class="font-bold text-lg">{{$task->company}}</h3>
          </div>
          <div class="px-4  mt-2">
            <h2  class="font-bold text-lg">Description:</h2>
            <p class="font-semibold text-xlg">{{$task->description}}.</p>
          </div>
          <div class="flex solid justify-between mt-2 px-4">
              <h3 class="font-bold text-lg">{{$task->salary}}</h3>
              <h3 class="font-bold text-lg">{{$task->type}}</h3>
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
        <button type="button" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
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
</body>
</html>

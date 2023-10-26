<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit post</title>
</head>
<body>

    @extends('welcome')
    @section('content')
    <div  class="w-[800px] rounded-lg border border-2 m-auto flex justify-center ">
    <form class="grid grid-cols-4 grid-rows-repeat-3-200 gap-4 p-4 m-4 w-[100%] flex-col" action="{{route('change',['id' => $task->id])}}" method="get">
        @csrf
        @method('put')

<div  class=" col-span-2   ">
   <!-- <label for="profile" >Job Profile</label> -->
   <input class="w-[100%]  text-sm text-gray-600 rounded-2xl " id="profile" type="text" value="{{$task->profile}}" placeholder="profile" name="profile">
</div>

<div class=" col-span-2 row-span-2">
   <!-- <label for="description"5 >Job Description</label> -->
   <textarea class=" w-[100%] h-[100%] rounded-2xl placeholder:absolute resize-none text-sm text-gray-600  "   id=" Description" placeholder="description" name="description" type="text">{{$task->description}}</textarea>
</div>

<div class="col-span-1">
   <!-- <label for="company" >Job Company</label> -->
   <input class="w-[100%] rounded-2xl text-sm text-gray-600" id="company" name="company" value="{{$task->company}}" placeholder="company" type="text">
</div>

<div class="col-span-1">
   <!-- <label for="type" >Job type</label> -->
   <input class="w-[100%] rounded-2xl text-sm text-gray-600" id="type" value="{{$task->type}}" name="type" placeholder="type" type="text">

</div>

<div>
   <!-- <label for="salary" >Salary</label> -->
   <input class="w-[100%] rounded-2xl text-sm text-gray-600" id="min_salary" value="{{$task->min_salary}}" name="min_salary" placeholder="min-salary" type="number">
   </div>
<div>
   <!-- <label for="salary" >Salary</label> -->
   <input class="w-[100%] rounded-2xl text-sm text-gray-600" id="max_salary" value="{{$task->max_salary}}" name="max_salary" placeholder="max-salary" type="number">
   </div>
   <div class="col-start-3 col-span-2  w-[100%] bg-green-800 rounded-xl ">
      <button class=" p-2 w-[100%]" type="submit" >EDIT POST</button>
 </div>
    </form>
</div>

</div>



@endsection
</body>
</html>

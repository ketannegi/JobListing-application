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
    <div  class="w-[500px] flex justify-center  p-10  ">
    <form class="flex flex-col" action="{{route('change',['id' => $task->id])}}" method="post">
        @csrf
        @method('put')


<div class="flex items-center gap-4 mb-4">
   <label  class="w-[100px]" for="profile" >Job Profile</label>
   <textarea id="profile" type="text" name="profile" >{{$task->profile}}</textarea>
</div>

<div class="flex items-center gap-4 mb-4">
   <label class="w-[100px]" for="description" >Job Description</label>
   <textarea id="Description" name="description" type="text">{{$task->description}}</textarea>
</div>

<div class="flex items-center gap-4 mb-4">
   <label class="w-[100px]" for="company" >Job Company</label>
   <textarea id="company" name="company" type="text">{{$task->company}}</textarea>
</div>

<div class="flex items-center gap-4 mb-4">
   <label class="w-[100px]" for="type" >Job type</label>
   <textarea id="type" name="type" type="text">{{$task->type}}</textarea>

</div>

<div class="flex items-center gap-4 mb-4">
   <label class="w-[100px]" for="salary" >Salary</label>
   <input  id="salary" name="salary" type="number" value="{{$task->salary}}">
   </div>
   <div class="">
      <button class="border  block border-1 m-auto p-2 px-4 rounded-lg font-bold text-gray-700 bg-blue-400" type="submit"  >UPDATE POST</button>
 </div>
    </form>
</div>

</div>



@endsection
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>adding job post</title>
</head>
<body>

@extends('welcome')
@section('content')
<div  class="w-[500px]   border border-1">
    <form class="flex flex-col" action="{{route('stored')}}" method="post">
        @csrf
<div>
   <label for="profile" >Job Profile</label>
   <input id="profile" type="text" name="profile">
</div>

<div>
   <label for="description" >Job Description</label>
   <input id="Description" name="description" type="text">
</div>

<div>
   <label for="company" >Job Company</label>
   <input id="company" name="company" type="text">
</div>

<div>
   <label for="type" >Job type</label>
   <input id="type" name="type" type="text">

</div>

<div>
   <label for="salary" >Salary</label>
   <input id="salary" name="salary" type="number">
   </div>
   <div>
      <button type="submit" >ADD POST</button>
 </div>
    </form>
</div>

</div>
@endsection

</body>
</html>

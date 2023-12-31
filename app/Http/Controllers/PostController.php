<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\View\View;


class PostController extends Controller{

    public function show(){
        // $tasks = Post::all();

        return view('dashboard');
    }

  public function addPost(){

    $tasks=Post::all();
    return view('post.post', compact('tasks'));

  }
  public function home(){

    $tasks=Post::all();
    return view('home', compact('tasks'));

  }

//   ---------delete post controller-------

public function delete($task){


    $task = Post::find($task);
    $task->delete();
    return redirect()->route('addpost');




}

// -----------update post--------
  public function update($task){
    $task= Post::find($task);
    return view('post.edit', compact('task'));

  }


    // /----------create post---------
    public function index(Request $request) {

        $request->validate([
            'profile' => 'required',
            'description' => 'required',
            'company' => 'required',
            'type' => 'required',
            'min_salary' => 'required|integer',
            'max_salary' => 'required|integer',
        ]);



            $forms = new Post;

             $forms->profile = $request->profile;
             $forms->description = $request->description;
             $forms->company =$request->company;
             $forms->type= $request->type;
             $forms->min_salary =$request->min_salary;
             $forms->max_salary =$request->max_salary;
             $forms->save();
             $tasks = Post::all();
        return   redirect()->route('addpost',compact('tasks'));
    }



    // ---------change_post or update_post----
    public function change(Request $request ,$id){

        $request->validate([

            'profile'=> 'required',
            'description'=> 'required',
            'company'=> 'required',
            'type'=> 'required',
            'min_salary'=> 'required|integer',
            'max_salary'=> 'required|integer',
        ]);
        // $num =Post::find($id);

        $update =  Post::find($id);

        $update->profile = $request->profile;
        $update->description = $request->description;
        $update->company =$request->company;
        $update->type= $request->type;
        $update->min_salary =$request->min_salary;
        $update->max_salary =$request->max_salary;
        $update->save();
        return redirect()->route('addpost');

    }
}

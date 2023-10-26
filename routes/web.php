<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name('welcome');
// ------------
Route::get('/',[PostController::class,'home'])->name('home');

// --------protectd-----
Route::get('post',[PostController::class,'addPost'])->middleware('auth')->name('addpost');

Route::get('newpost',function(){
    return view('post.newpost');
})->name('post');

Route::get('/dashboard',[PostController::class,'show']
)->middleware(['auth', 'verified'])->name('dashboard');
// -------nd--------

Route::get('/manager-dashboard',function(){
    view('auth.manager-dashboard');
})->name('manager_login');

Route::get('post/{task}',[PostController::class,'delete'])->name('delete');

Route::get('edit/{task}',[PostController::class,'update'])->name('update');

Route::put('post/{id}',[PostController::class,'change'])->name('change');


Route::post('/dashboard',[PostController::class,'index'])->name('stored');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

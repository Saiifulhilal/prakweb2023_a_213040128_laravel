<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Category;
use App\Models\User;
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

Route::get('/', function () {
    return view('home', [
        "title" => "home"
    ]);
});

Route::get('/about', function () {
    return view('about',[
        "title" => "About",
        "name" => "Saiful Hilal",
        "email" => "shilal0403@gmail.com",
        "image" => "hilal.jpg"
    ]);
});

Route::get('/blog', [PostController::class, 'index']);

// Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function(){
    return view('categories',[
        'title'=> 'Post Categories',
        'categories' => Category::all()
    ]);
} );

Route::get('/categories/{category:slug}', function(Category $category) {
    return view('posts',[
        'title'=> "post By Author : $category->name",
        'posts' => $category->posts->load('category', 'author'),
    ]);
});

Route::get('/authors/{author:username}', function(user $author){
    return view('posts', [
        'title'=> "Posts By Author : $author->name",
        'posts' => $author->posts->load('category', 'author'),
    ]);

});
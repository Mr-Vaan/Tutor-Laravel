<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function index()
    {
        //
        return view('posts', [
            "title" => "Posts",
            "posts" => Post::all()
        ]);
    }

    // Menampilkan detail dari 1 postnya
    // Ubah Memakai Route Model Binding :
    // Route::get('/users/{user}', function (User $user) {
    // return $user->email; 
    // });
    public function show(Post $post)
    {
        //
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }


}
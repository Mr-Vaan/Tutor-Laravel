<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class PostController extends Controller
{
    //
    public function index()
    {
        $posts = Post::latest();

        // Pencarian atau Search Engine:
        if (request('search')) {
            $posts->where('title', 'like', '%' . request('search') . '%')->orWhere('body', 'like', '%' . request('search') . '%');
        }

        return view('posts', [
            "title" => "All Posts",
            "active" => 'posts',
            // "posts" => Post::all()
            "posts" => $posts->get()
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
            "active" => 'posts',
            "post" => $post
        ]);
    }


}
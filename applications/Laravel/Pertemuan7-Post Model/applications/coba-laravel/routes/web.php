<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Mengambil dari views
// Menggunakan Closure

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Muhammad Ivan Chriana",
        "email" => "ivandhebel@cic.ac.id",
        "image" => "1.jpg"
    ]);
});

// Menggunakan Controller

Route::get('/posts', [PostController::class, 'index']);
// Akan menampilkan banyak post menggunakan view('post.index');
// Blade Templating Engine
// Halaman Single Post
Route::get('/posts/{post:slug}', [PostController::class, 'show']);
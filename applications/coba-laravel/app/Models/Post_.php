<?php 

namespace App\Models;  

class Post {
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Muhammad Ivan Chriana",
            "body" => "Welcome, My name is Muhammad Ivan Chriana, i content Creator of this blog. This is my first blog, i hope you like it. Thank you for reading. And i have Youtube channel, you can subscribe my channel. Thank you. Youtube Channel : Van C"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Pak Shandika Galih",
            "body" => "Welcome, My name is Pak Shandika Galih, i content Creator of this blog. This is my first blog, i hope you like it. Thank you for reading. And i have Youtube channel, you can subscribe my channel. Youtube Channel : Web Programming UNPAS."
        ]
    ];

    public static function all() 
    {
        // colections adalah pembungkus untuk sebuah Array, yang akan membuat array menjadi lebih sakti
        return collect(self::$blog_posts);
    }   


    public static function find($slug)
    {
        // self:: -> khusus untuk property static.
        // static:: -> khusus untuk method static.
        // collect(self::$blog_posts) -> mengambil data dari blog_posts.
        // ->where('slug', $slug) -> mencari slug yang sama dengan slug yang dikirimkan.
        // ->first() -> mengambil data pertama.
        // return -> mengembalikan data yang dicari.
        // return collect(self::$blog_posts)->where('slug', $slug)->first();
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}












?>
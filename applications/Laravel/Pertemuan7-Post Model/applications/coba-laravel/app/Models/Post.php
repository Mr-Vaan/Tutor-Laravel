<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //  Dalam Kernel
    // Contoh Penggunaan Mass Assignment :
    // Post::find(3)->update(['title'=>'Judul Ke Tiga Berubah']) ->ini akan berubah karena kita perbolehkan disini ['title', 'excerpt', 'body']; . dan yang gaboleh hanya idnya aja ['id']; 
    //  Post::where('title', 'Judul Ke Tiga')->update(['excerpt'=> 'excerpt post 3 berubah'])
    
    // Luar Kernel
    // $fillable -> ininya yang boleh diisi ['title', 'excerpt', 'body']; sisanya gaboleh.
    // $guarded -> ininya yang gaboleh  ['id']; tapi sisanya boleh.


    // protected $fillable = ['title', 'excerpt', 'body'];
    protected $guarded = ['id']; 
}
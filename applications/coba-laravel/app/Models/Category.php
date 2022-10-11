<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // Artinya yang dilarang hanya idnya saja
    protected $guarded = ['id'];

    public function posts()
    {
        // Di dalam posts karena postsnya ada banyak data, jadi memakai hasMany.
        // Relasinya harus benar. (hasMany)
        // hasMany -> 1 category bisa dimiliki oleh banyak post.
        return $this->hasMany(Post::class);
    }
}
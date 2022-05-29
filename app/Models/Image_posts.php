<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'idPosts',
        'image',
        'create_at',
        'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'contents',
        'idPosts',
        'idUser',
        'created_at',
        'updated_at'
    ];
}

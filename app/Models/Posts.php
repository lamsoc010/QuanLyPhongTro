<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'content',
        'status',
        'views',
        'image',
        'idCategory',
        'idUser',
        'created_at',
        'updated_at',

    ];
}

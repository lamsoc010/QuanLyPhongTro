<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply_comment_post extends Model
{
    use HasFactory;
    protected $fillable = [
        'contents',
        'idCommentPosts',
        'idUser',
        'created_at',
        'updated_at'
    ];
}

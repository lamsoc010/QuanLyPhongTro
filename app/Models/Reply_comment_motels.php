<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply_comment_motels extends Model
{
    use HasFactory;
    protected $fillable = [
        'contents',
        'idCommentMotels',
        'idUser',
        'created_at',
        'updated_at'
    ];
}

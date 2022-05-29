<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_motels extends Model
{
    use HasFactory;
    protected $fillable = [
        'contents',
        'idMotels',
        'idUser',
        'created_at',
        'updated_at'
    ];
}

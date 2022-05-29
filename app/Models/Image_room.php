<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_room extends Model
{
    use HasFactory;
    protected $fillable = [
        'idRoom',
        'image',
        'create_at',
        'updated_at',
    ];
}

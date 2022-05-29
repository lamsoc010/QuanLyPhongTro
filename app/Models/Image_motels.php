<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image_motels extends Model
{
    use HasFactory;
    protected $fillable = [
        'idMotels',
        'image',
        'create_at',
        'updated_at',
    ];
}

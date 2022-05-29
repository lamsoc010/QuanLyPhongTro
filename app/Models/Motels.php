<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motels extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'area',
        'min_price',
        'max_price',
        'room_quantity',
        'view',
        'descreption',
        'status',
        'person',
        'idUser',
        'created_at',
        'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'email',
        'password',
        'address',
        'post',
        'building_name',
        'tel',
        'created_at',
        'updated_at',
    ];
}

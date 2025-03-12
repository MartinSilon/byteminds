<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employers';

    protected $fillable = [
        'name',
        'position',
        'description',
        'email',
        'phonenumber',
        'photo_path',
    ];
}

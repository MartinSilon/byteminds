<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;

    protected $table = 'text';

    protected $fillable = [
        'text1',
        'text1_rows',
        'text2',
        'text2_rows',
        'text2_active',
        'text3',
        'text3_rows',
        'text3_active',
    ];

    protected $casts = [
        'text2_active' => 'boolean',
        'text3_active' => 'boolean',
    ];
}

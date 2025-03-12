<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Photo extends Model
{
    use HasFactory;

    protected $table = 'photo';

    protected $fillable = [
        'photo_path',
        'description',
        'description_active',
        'link',
        'link_active',
        'size',
    ];

    protected $casts = [
        'description_active' => 'boolean',
        'link_active' => 'boolean',
    ];

    function getPath() {
        return Storage::url( $this->photo_path);
    }
    function getAlt() {
        return $this->description;
    }
    function getLink() {
        return $this->photo_link;
    }

    function getSize() {
        return $this->size;
    }
}

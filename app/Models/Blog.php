<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog';

    protected $fillable = [
        'title',
        'slug',
        'text1',
        'text2',
        'text3',
        'miniature_path',
        'header_path',
        'path1',
        'path1_description',
        'path2',
        'path2_description',
    ];

    /**
     * Získa URL miniatúry.
     */
    public function getMiniature(): string
    {
        return Storage::url($this->miniature_path);
    }

    /**
     * Získa URL hlavičkového obrázka.
     */
    public function getHeaderPath(): string
    {
        return Storage::url( $this->header_path);
    }

    /**
     * Získa URL prvej fotografie v článku.
     */
    public function getPath1(): string
    {
        return $this->path1 ? Storage::url($this->path1) : asset('images/default-image.jpg');
    }

    /**
     * Získa URL druhej fotografie v článku.
     */
    public function getPath2(): string
    {
        return $this->path2 ? Storage::url($this->path2) : asset('images/default-image.jpg');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }
}

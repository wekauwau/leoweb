<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'post_type_id',
        'image_id',
        'title',
        'content',
    ];

    public function image(): BelongsTo
    {
        return $this->belongsTo(Image::class);
    }
}

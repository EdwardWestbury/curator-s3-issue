<?php

namespace App\Models;

use Awcodes\Curator\Models\Media;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Blog extends Model
{
    use HasFactory;

    public function productPictures(): BelongsToMany
    {
        return $this
            ->belongsToMany(Media::class, 'blog_media', 'blog_id', 'media_id')
            ->withPivot('order')
            ->orderBy('order');
    }
}

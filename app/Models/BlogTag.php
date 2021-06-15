<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\Pivot;

class BlogTag extends Pivot
{
    protected $fillable = [
        'slug',
    ];

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'blog_tag');
    }
}

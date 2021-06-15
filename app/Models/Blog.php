<?php

namespace App\Models;

use App\Contracts\Likeable;
use App\Models\Concerns\Likes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model implements Likeable
{
    use HasFactory;
    use Likes;
    protected $fillable = ['created_by', 'title', 'slug', 'descriptions', 'contents', 'img_path', 'is_featured', 'is_published', 'views'];

    public function user(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable')->whereNull('parent_id');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'blog_tag');
    }

}
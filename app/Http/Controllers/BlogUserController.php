<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;
use Illuminate\Http\Request;

class BlogUserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //get the requested blogs, if it is published
        $blogs = Blog::query()->withCount('comments')
            ->where('is_published', true)
            ->where('slug', $slug)
            ->firstOrFail();

        //get all the tags
        $tags = Tag::all();

        //get all the categories
        $categories = Category::query()->withCount('blogs')->get();

        //get the recent 5 blogs
        $recent_blogs = Blog::query()->withCount('comments')
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(4)
            ->get();
        //related blogs
        $related_blogs = Blog::query()->where('is_published',true)->whereHas('tags', function ($q) use ($blogs) {
            return $q->whereIn('name', $blogs->tags->pluck('name'));
        })
            ->where('id', '!=', $blogs->id)->take(3)->get();

        //return the data to the corresponding view
        return view('web.blog-single', [
            'blogs' => $blogs,
            'tags' => $tags,
            'categories' => $categories,
            'recent_blogs' => $recent_blogs,            
            'related_blogs' => $related_blogs,
        ]);
    }

    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $blogs = Blog::query()
            ->where('title', 'like', "%{$key}%")
            ->orWhere('contents', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        //get all the tags
        $tags = Tag::all();
        //get all the categories
        $categories = Category::all();

        //get the recent 5 blogs
        $recent_blogs = Blog::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('web.search', [
            'key' => $key,
            'blogs' => $blogs,
            'tags' => $tags,
            'categories' => $categories,
            'recent_blogs' => $recent_blogs
        ]);
    }
}

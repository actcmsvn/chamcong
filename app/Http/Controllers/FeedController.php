<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function __invoke()
    {
        $blogs = Blog::all();

        $content = view('web.feed', compact('blogs'));

        return response($content, 200)
            ->header('Content-Type', 'text/xml');
    }
}
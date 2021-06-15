<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Program;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->paginate(6);
        //get all the tags
        $tags = Tag::all();
        return view('web.home', [
            'blogs' => $blogs,
            'tags' => $tags,
        ]);       
    }    
}
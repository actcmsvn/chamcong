<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $posts = Post::latest()->paginate(9);
        return view('admin.posts.index', compact('posts'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title'=> 'required',
            'category_id'=> 'required',
            'user_id'=> 'required',
            'slug'=> 'required',
            'description'=>'required',
            'contents'=>'required',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'is_featured'=>'required',
            'is_published'=>'required',
            'views'=>'required',
        ]);
        $path = $request->file('img_path')->store('public/post-photos');
        $posts = new Post;
        $posts->title = $request->title;
        $posts->category_id = $request->category_id;
        $posts->user_id = $request->user_id;
        $posts->description = $request->description;
        $posts->contents = $request->contents;
        $posts->img_path = $path;
        $posts->category_id = $request->category_id;
        $posts->user_id = $request->user_id;
        $posts->views = $request->views;
        $posts->slug = \Str::slug($request->title);
        $posts->save();
     
        return redirect()->route('posts.index')->with('success', 'Post created succesfully!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.posts.show', [
            'posts' => Post::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.posts.edit', [
            'posts' => Post::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title'=> 'required',
            'slug'=> 'required',
            'descriptions'=>'required',
            'contents'=>'required',
        ]);
        
        $posts = Post::find($id);
        if($request->hasFile('img_path')){
            $request->validate([
              'img_path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048',
            ]);
            $path = $request->file('img_path')->store('public/post-photos');
            $posts->img_path = $path;
        }
        $posts->title = $request->title;
        $posts->slug = \Str::slug($request->title);
        $posts->descriptions = $request->descriptions;
        $posts->contents = $request->contents;
        $posts->author = $request->author;
        $posts->save();
    
        return redirect()->route('admin.adminPost.index')->with('success', 'Post Update succesfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Post::destroy($id);
        return redirect()->route('admin.posts.index')->with('success', 'Post Deleted succesfully!!');
    }
    // search for post
    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $posts = Post::query()
            ->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('created_at', 'desc')
            ->paginate(env('PAGE_NUMBER'));

        //get all the categories
        $categories = Category::all();

        //get all the tags
        $tags = Tag::all();

        //get the recent 5 posts
        $recent_posts = Post::query()
            ->where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();

        return view('search', [
            'key' => $key,
            'posts' => $posts,
            'categories' => $categories,
            'tags' => $tags,
            'recent_posts' => $recent_posts
        ]);
    }
}

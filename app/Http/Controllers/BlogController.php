<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\BlogTag;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    public function __construct(Blog $model)
    {
        $this->category = new Category;
        $this->blog_tag = new BlogTag;
        $this->tag = new Tag;
    }

    public function index()
    {
        abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blogs = Blog::all();
        return view('admin.blogs.index', compact('blogs'));
    }

    public function create()
    {
        abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.blogs.create',
        [
            'tags' => Tag::all(),
            'categories'    => $this->category->get(),
        ]);
    }
    public function store(StoreBlogRequest $request)
    {
        abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'created_by'=> 'required',
            'category_id'=> 'required',
            'title'=> 'required',            
            'slug'=> 'required',
            'description'=>'required',
            'contents'=>'required',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'is_featured'=>'required',
            'is_published'=>'required',
            'views'=>'required',
        ]);
        $blogs = new Blog;
        $blogs->tags()->sync((array)$request->input('blog_tag_ids'));
        $path = $request->file('img_path')->store('public/blog-photos');
        $blogs->created_by = $request->created_by;
        $blogs->category_id = $request->category_id;
        $blogs->title = $request->title;
        $blogs->slug = $request->slug;
        $blogs->description = $request->description;
        $blogs->contents = $request->contents;
        $blogs->img_path = $path;
        $blogs->is_featured = $request->is_featured;
        $blogs->is_published = $request->is_published;
        $blogs->views = $request->views;
        $blogs->save();
     
        return redirect()->route('blogs.index')->with('success', 'Blog created succesfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.blogs.show', [
            'blogs' => Blog::findOrFail($id)
        ]);
    }

    public function edit($id)
    {
        abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.blogs.edit', [
            'blogs' => Blog::findOrFail($id),
            'tags' => Tag::all(),
            'selectedTags' => Blog::findOrFail($id)->tags,
            'categories' => $this->category->get(),
        ]);
    }

    public function update(UpdateBlogRequest $request, $id)
    {
        abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $request->validate([
            'created_by'=> 'required',
            'category_id'=> 'required',
            'title'=> 'required',            
            'slug'=> 'required',
            'description'=>'required',
            'contents'=>'required',
            'is_featured'=>'required',
            'is_published'=>'required',
            'views'=>'required',
        ]);
        
        $blogs = Blog::find($id);
        if($request->hasFile('img_path')){
            $request->validate([
              'img_path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048',
            ]);
            $path = $request->file('img_path')->store('public/blog-photos');
            $blogs->img_path = $path;
        }

        $blogs->tags()->sync((array)$request->input('tags'));
        $blogs->created_by = $request->created_by;
        $blogs->category_id = $request->category_id;
        $blogs->title = $request->title;
        $blogs->slug = $request->slug;
        $blogs->description = $request->description;
        $blogs->contents = $request->contents;
        $blogs->is_featured = $request->has('is_featured');
        $blogs->is_published = $request->has('is_published');
        $blogs->views = $request->views;
        $blogs->save();
    
        return redirect()->route('blogs.index')->with('success', 'Blog Update succesfully!!');
    }

    public function destroy($id)
    {
        abort_if(Gate::denies('blog_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $blogs = Blog::findOrFail($id);
        $blogs->delete();
        return redirect()->route('admin.blogs.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProgramRequest;
use App\Http\Requests\UpdateProgramRequest;



class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Program $model)
    {
        $this->category = new Category;
    }

    public function index()
    {
        $programs = Program::latest()->paginate(9);
        return view('admin.programs.index', compact('programs'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.programs.create',
        [
            'categories'    => $this->category->get(),
        ]);
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
            'created_by'=> 'required',
            'updated_by'=> 'required',
            'category_id'=> 'required',            
            'slug'=> 'required',
            'description'=>'required',
            'contents'=>'required',
            'img_path' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
            'is_featured'=>'required',
            'is_published'=>'required',
            'views'=>'required',
        ]);
        $path = $request->file('img_path')->store('public/program-photos');
        $programs = new Program;
        $programs->title = $request->title;        
        $programs->slug = $request->slug;
        $programs->created_by = $request->created_by;
        $programs->updated_by = $request->updated_by;
        $programs->category_id = $request->category_id;        
        $programs->description = $request->description;
        $programs->contents = $request->contents;
        $programs->img_path = $path;
        $programs->views = $request->views;
        $programs->save();
     
        return redirect()->route('program.index')->with('success', 'Program created succesfully!!');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.programs.show', [
            'programs' => Program::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.programs.edit', [
            'programs' => Program::findOrFail($id),
            'categories' => $this->category->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProgramRequest $request, $id)
    {
        $request->validate([
            'title'=> 'required',
            'updated_by'=> 'required',
            'category_id'=> 'required',            
            'slug'=> 'required',
            'description'=>'required',
            'contents'=>'required',
            'is_featured'=>'required',
            'is_published'=>'required',
            'views'=>'required',
        ]);
        
        $programs = Program::find($id);
        if($request->hasFile('img_path')){
            $request->validate([
              'img_path' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048',
            ]);
            $path = $request->file('img_path')->store('public/program-photos');
            $programs->img_path = $path;
        }
        $programs->title = $request->title;        
        $programs->slug = $request->slug;
        $programs->updated_by = $request->updated_by;
        $programs->category_id = $request->category_id;        
        $programs->description = $request->description;
        $programs->contents = $request->contents;
        $programs->img_path = $path;
        $programs->views = $request->views;
        $programs->save();
    
        return redirect()->route('program.index')->with('success', 'Program Update succesfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        Program::destroy($id);
        return redirect()->route('admin.program.index')->with('success', 'Post Deleted succesfully!!');
    }

}

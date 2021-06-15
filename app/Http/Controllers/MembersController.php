<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;


class MembersController extends Controller
{
    public function index(){
        $members = Member::latest()->paginate(9);
        return view('admin.members.index', compact('members'));
    }
    public function create(){
        return view('admin.members.create');
    }

    public function store(Request $request){
        $request->validate([
            'emp_username'=> 'required',
            'emp_firstname'=>'required',
            'eemp_emailmail'=>'required',
            'emp_gender'=>'required',
        ]);
        Member::create($request->all());

        return redirect()->route('members.index')->with('success', 'Profile created succesfully!!');
    }

    public function show(Member $member){
        return view('admin.members.show', compact('member'));
    }



    public function edit(Member $member){
        return view('admin.members.edit', compact('member'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'user_name'=> 'required',
            'first_name'=>'required',
            'email'=>'required',
        ]);
        $members = $request -> all();
        Member::find($id) -> update($members);

        return redirect()->route('members.index')->with('success', 'profile Updated succesfully!!');


    }
    public function destroy($members){
        Member::destroy($members);
        return redirect()->route('members.index')->with('success', 'profile Deleted succesfully!!');
    }
}

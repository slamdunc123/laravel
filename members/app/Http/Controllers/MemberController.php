<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Members;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Members::all()->toArray();
        return view('members.index', compact('members'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member = $this->validate(request(), [
            'fName' => 'required',
            'lName' => 'required',
            'age' => 'required|numeric',
            'email' => 'required'
        ]);

        Members::create($member);

        return back() -> with('success', 'Member has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $member = Members::find($id);
        return view('members.edit',compact('member','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $member = Members::find($id);
        $this->validate(request(), [
          'fName' => 'required',
          'lName' => 'required',
          'age' => 'required|numeric',
          'email' => 'required'
        ]);
        $member->fname = $request->get('fName');
        $member->lname = $request->get('lName');
        $member->age = $request->get('age');
        $member->email = $request->get('email');
        $member->save();
        return redirect('members')->with('success','Member has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $member = Members::find($id);
        $member->delete();
        return redirect('members')->with('success','Member has been deleted');    
    }
}

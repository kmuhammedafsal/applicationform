<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\coursemodel;
use App\Models\applicationmodel;
class coursecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses=coursemodel::all();
        return view('courses',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('courses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $getcoursename=request('coursename');
     
     
        $course=new coursemodel();
       
        $course->coursename=$getcoursename;
       
        $course->save();
        return redirect('/courses');
    }
    public function deleteview($id)
    {
        $courses=coursemodel::find($id);
        return view('coursedelete',compact('courses'));


    }
    public function destroy($id)
    {
        $course=coursemodel::find($id);

        $course->delete();

        return redirect('/courses');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
}

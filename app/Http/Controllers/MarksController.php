<?php

namespace App\Http\Controllers;

use App\Models\Marks;
use Illuminate\Http\Request;

class MarksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.marksrecord');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $marks = new Marks();
        $marks->indexnumber= $request->input('indexnumber');
        $marks->marks = $request->input('mean');
        $marks->save();
        return redirect()->back()->with('success', 'marks recorded successfully')->with('error','Error occurred');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Marks  $marks
     * @return \Illuminate\Http\Response
     */
    public function show(Marks $marks)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Marks  $marks
     * @return \Illuminate\Http\Response
     */
    public function edit(Marks $marks)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Marks  $marks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Marks $marks)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Marks  $marks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Marks $marks)
    {
        //
    }
}

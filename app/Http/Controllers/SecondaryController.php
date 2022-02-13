<?php

namespace App\Http\Controllers;

use App\Models\Secondary;
use Illuminate\Http\Request;

class SecondaryController extends Controller
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
        return view('admin.createhighschool');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $secondary = new Secondary();
        $secondary->secondary_code = $request->input('schoolcode');
        $secondary->secondary_name = $request->input('name');
        $secondary->level = $request->input('level');
        $secondary->county = $request->input('county');
        $secondary->subcounty = $request->input('subcounty');
        $secondary->type = $request->input('type');
        $secondary->capacity = $request->input('capacity');
        $secondary->min_marks = $request->input('mean');
        $secondary->Box = $request->input('box');
        $secondary->email = $request->input('email');
        $secondary->save();
        return redirect()->back()->with('success', 'school created successfully')->with('error', 'error occurred');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Secondary  $secondary
     * @return \Illuminate\Http\Response
     */
    public function show(Secondary $secondary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Secondary  $secondary
     * @return \Illuminate\Http\Response
     */
    public function edit(Secondary $secondary)
    {
        return view('admin.updatehighschool');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Secondary  $secondary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secondary $secondary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Secondary  $secondary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secondary $secondary)
    {
       return view('admin.removehighschool');
    }
}

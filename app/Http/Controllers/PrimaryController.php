<?php

namespace App\Http\Controllers;

use App\Models\Primary;
use Illuminate\Http\Request;

class PrimaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.createprimary');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $primary = new Primary();
        $primary->primary_code = $request->input('schoolcode');
        $primary->primary_name = $request->input('name');
        $primary->county = $request->input('county');
        $primary->subcounty = $request->input('subcounty');
        $primary->type = $request->input('type');
        $primary->capacity = $request->input('capacity');
        $primary->Box = $request->input('box');
        $primary->email = $request->input('email');
        $primary->save();
        return redirect()->back()->with('success','school created successfully')->with('error','error occurred');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Primary  $primary
     * @return \Illuminate\Http\Response
     */
    public function show(Primary $primary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Primary  $primary
     * @return \Illuminate\Http\Response
     */
    public function edit(Primary $primary)
    {
       return view('admin.updateprimary');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Primary  $primary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Primary $primary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Primary  $primary
     * @return \Illuminate\Http\Response
     */
    public function destroy(Primary $primary)
    {
        return view('admin.removeprimary');
    }
}

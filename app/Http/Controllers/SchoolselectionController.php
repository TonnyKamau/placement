<?php

namespace App\Http\Controllers;

use App\Models\Schoolselection;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class SchoolselectionController extends Controller
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
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $selection = new Schoolselection();
        $users = User::find(Auth::id());
        $selection->indexStaffNo = $users->indexStaffNo;
        $selection->national1 = $request->input('national1');
        $selection->national2 = $request->input('national2');
        $selection->national3 = $request->input('national3');
        $selection->national4 = $request->input('national4');
        $selection->exCounty1 = $request->input('exCounty1');
        $selection->exCounty2 = $request->input('exCounty2');
        $selection->county1 = $request->input('county1');
        $selection->county2 = $request->input('county2');
        $selection->district1 = $request->input('district1');
        $selection->district2 = $request->input('district2');
        $selection->save();
        return redirect()->back()->with('success', 'Selection made Succeffuly!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schoolselection  $schoolselection
     * @return \Illuminate\Http\Response
     */
    public function show(Schoolselection $schoolselection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schoolselection  $schoolselection
     * @return \Illuminate\Http\Response
     */
    public function edit(Schoolselection $schoolselection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schoolselection  $schoolselection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schoolselection $schoolselection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schoolselection  $schoolselection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schoolselection $schoolselection)
    {
        //
    }
}

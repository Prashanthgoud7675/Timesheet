<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use Illuminate\Http\Request;

class TimesheetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sample');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sample');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([

            'first' => 'required',
            'last' => 'required',
           'father' => 'required',
           'dob' => 'required',
           'gender' => 'required',
           'aadhar' => 'required',
           'pan' => 'required',
           'flatno' => 'required',
           'locality' => 'required',
           'city' => 'required',
           'state' => 'required',
           'pincode' => 'required',
           'building' => 'required',
           'area' => 'required',
           'currentcity' => 'required',
           'currentstate' => 'required',
           'currentpincode' => 'required',
           'mobile' => 'required',
           'alternate' => 'required',
           'email' => 'required',
           
            
        ]);

        $employee = Timesheet::create($validatedData);

        return redirect('/demo')->with('success', 'data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function show(Timesheet $timesheet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function edit(Timesheet $timesheet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Timesheet $timesheet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Timesheet  $timesheet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timesheet $timesheet)
    {
        //
    }
}

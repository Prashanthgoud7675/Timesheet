<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Models\WeekData;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $data = DB::table('timesheets')->where('empid', $user->empid)->get();
        return view('attendances.index', compact('user', 'data'));

        /*

        $data = WeekData::all();
        return view('attendances.index', compact('data') );
        */
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
        $Regular = $request->Regular;
        $Overtime = $request->Overtime;
        $Sick = $request->Sick;
        $Vacation = $request->Vacation;
        $Holiday = $request->Holiday;
        $Unpaid = $request->Unpaid;
        $other = $request->other;
        $Total = $request->Total;
        $Date = $request->Date;

        for ($i=0; $i < count($Regular); $i++){
            $datasave = [
                'Regular'  => $Regular[$i],
                'Overtime'  => $Overtime[$i],
                'Sick'  => $Sick[$i],
                'Vacation'  => $Vacation[$i],
                'Holiday'  => $Holiday[$i],
                'Unpaid'  => $Unpaid[$i],
                'other'  => $other[$i],
                'Total'  => $Total[$i],
                'Date'  => $Date[$i],
            ];
            DB::table('timesheets')->insert($datasave);
        }

      

        return redirect('/attendances');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        return view('attendances.edit', compact('attendance'));
    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attendance $attendance)
    {
        $request->validate([

             
            'Date' => 'required',
            'Regular' => 'required',
            'Overtime' => 'required',
            'Sick' => 'required',
            'Vacation' => 'required',
            'Holiday' => 'required',
            'Unpaid' => 'required',
            'other' => 'required',
            'Total' => 'required',
            
        ]);

        $attendance->update($request->all());

        return redirect('attendances');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        $attendance->delete();

        return redirect()->route('attendances.index');
    }

   
}

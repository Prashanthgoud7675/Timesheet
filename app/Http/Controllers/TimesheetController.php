<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
class TimesheetController extends Controller
{
    public function index()
    {
        return view('sample');
    }

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
}
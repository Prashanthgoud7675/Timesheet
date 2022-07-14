<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use App\Models\WeekData;
use Illuminate\Http\Request;
use DB;

class WeekDataController extends Controller
{
   

    public function search(Request $request){

        

        $fromDate = $request->fromDate;
        $toDate = $request->toDate;

        $data = DB::table('timesheets')->select()
        ->where('Date', '>=', $fromDate)
        ->where('Date', '<=', $toDate)
        ->get();

        return view('attendances.index', compact('data'));

    }

   
}

<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class ProdController extends Controller
{
    public function index(){
        $user = Auth::user();
        $data = DB::table('timesheets')->where('empid', $user->empid)->get();
        return view('hello', compact('user', 'data'));
    }
   
    public function search(Request $request){

        

        $fromDate = $request->fromDate;
        $toDate = $request->toDate;

   
       // $timesheets = Timesheet::all();
       $user = Auth::user();
       $data =  DB::table('timesheets')->where('empid', $user->empid)->select()
       ->where('Date', '>=', $fromDate)
       ->where('Date', '<=', $toDate)
       ->get();

        return view('hello', compact( 'data', 'user'));

    }

}

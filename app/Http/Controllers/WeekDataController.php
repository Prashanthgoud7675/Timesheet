<?php

namespace App\Http\Controllers;

use App\Models\Timesheet;
use App\Models\WeekData;
use Illuminate\Http\Request;

class WeekDataController extends Controller
{
    public function index(){
        $data = WeekData::paginate(7);

        return view('timesheet', compact('data'));
    }
}

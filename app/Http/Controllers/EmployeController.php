<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeController extends Controller
{
    public function index(Request $request)
    {

        $data = Employee::where([
            ['First_Name' , '!=' , Null],
            ['Last_Name' , '!=' , Null],
            [function ($query) use ($request){
                if(($term = $request->term)){
                    $query->orWhere('First_Name',  'LIKE' , '%' . $term . '%')->get();
                    $query->orWhere('Last_Name',  'LIKE' , '%' . $term . '%')->get();
      
                }
            }]
        ])
      
               ->orderBy("id")
               ->paginate(100);
      
      
               
      
      
             
               return view('employee', ['data' => $data])
                     ->with('i', (request()->input('page', 1 ) - 1) * 5);

    }
}

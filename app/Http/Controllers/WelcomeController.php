<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Input;
use App\Models\Welcome;

class WelcomeController extends Controller
{
    public function index(Request $request)
    {
     
        
    $data = Welcome::where([
        ['Client_ID' , '!=' , Null],
        ['Company_Name' , '!=' , Null],
        [function ($query) use ($request){
            if(($term = $request->term)){
                $query->orWhere('Client_ID',  'LIKE' , '%' . $term . '%')->get();
                $query->orWhere('Company_Name',  'LIKE' , '%' . $term . '%')->get();

            }
        }]
    ])

           ->orderBy("id" , "desc")
           ->paginate(10);


           


         
           return view('welcome', ['data' => $data])
                 ->with('i', (request()->input('page', 1 ) - 1) * 5);


                
}

}

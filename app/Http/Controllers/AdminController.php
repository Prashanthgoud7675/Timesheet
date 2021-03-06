<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Companies;

class AdminController extends Controller
{

    function index(Request $request)
    {


     $data = Companies::where([
        
        ['Company_Name' , '!=' , Null],
        [function ($query) use ($request){
            if(($term = $request->term)){
          
                $query->orWhere('Company_Name',  'LIKE' , '%' . $term . '%')->get();
  
            }
        }]
    ])
  
           ->orderBy("id")
           ->paginate(100);
  
  
           
  
  
         
           return view('admin.index', ['data' => $data])
                 ->with('i', (request()->input('page', 1 ) - 1) * 5);
    }

 
    }


   


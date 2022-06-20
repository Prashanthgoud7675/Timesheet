<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\support\Facades\Input;
use App\Models\Welcome;

class AdminController extends Controller
{

    function index(Request $request)
    {
      
     if(request()->ajax())
     {
      if(!empty($request->filter_country))
      {
       $data = DB::table('companies')
        
         ->where('Company_Name', $request->filter_country)
         
         ->get();
      }
      else
      {
       $data = DB::table('companies')

         ->get();
      }
      return datatables()->of($data)->make(true);
     }

     $company_name = DB::table('companies')
     ->select('Company_Name')
     ->groupBy('Company_Name')
     ->orderBy('Company_Name', 'ASC')
     ->get();
  
     return view('admin.index', compact('company_name'));


     $data = DB::table('companies')->where([
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
  
  
           
  
  
         
           return view('admin.index', ['data' => $data])
                 ->with('i', (request()->input('page', 1 ) - 1) * 5);
    }
   
}

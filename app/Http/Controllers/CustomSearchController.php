<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Customer;

class CustomSearchController extends Controller
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
  
     return view('customsearch', compact('company_name'));


     $data = Search::where([
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


         


       
         return view('display', ['data' => $data])
               ->with('i', (request()->input('page', 1 ) - 1) * 5);

    }
}

?>
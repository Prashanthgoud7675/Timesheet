<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Product;
use App\Models\Category;
use App\Models\Companies;

class CompanyEmployesController extends Controller
{
   

    public function filterProduct(Request $request)
    {
        $query = Employee::query();
        $categories = Companies::all();
        if($request->ajax()){
            if(empty($request->category)){
                $products = $query->get();

            }
            else{
                $products = $query->where(['company_id'=>$request->category])->get();

            }
            return response()->json(['products'=>$products]);
        }
        $products = $query->get();

        return view('filter',compact('categories','products'));

    }

    }


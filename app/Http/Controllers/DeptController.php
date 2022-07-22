<?php

namespace App\Http\Controllers;

use App\Models\Dept;
use Illuminate\Http\Request;
use App\Helpers\Helper;
use Validator;

class DeptController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Dept::all();

       
        
        return view('depts.create' , ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Dept $dept)
    {
        $request->validate([

            
            'Company_Code' => 'required',
           
            'Company_Name' => 'required',
            'Company_Address' => 'required',
            'Next_Check_Date' => 'required',
            'Status' => 'required',
        ]);

        $Company_Code = $request->Company_Code;
        $Company_Name = $request->Company_Name;
        $Company_Address = $request->Company_Address;
        $Next_Check_Date = $request->Next_Check_Date;
        $Status = $request->Status;
        
        
        $Company_Id = Helper::IDGenerator(new Dept, 'Company_Id', 5, 'XSS'); /** Generate id */
        $q = new Dept;
        $q->Company_Id = $Company_Id;
        $q->Company_Code = $Company_Code; 
        $q->Company_Name = $Company_Name;
        $q->Company_Address = $Company_Address;
        $q->Next_Check_Date = $Next_Check_Date;
        $q->Status = $Status;
        $q->save();


        return redirect('admin')
        ->withSuccessMessage('company added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function show(Dept $dept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function edit(Dept $dept)
    {
        return view('depts.edit', compact('dept'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dept $dept)
    {
        $request->validate([

             
            'Company_Code' => 'required',
            
            'Company_Name' => 'required',
            'Company_Address' => 'required',
            'Next_Check_Date' => 'required',
            'Status' => 'required',
            
        ]);

        $dept->update($request->all());

        return redirect('admin')
        ->withSuccessMessage('Department edited Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dept  $dept
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dept $dept)
    {
        $dept->delete();

        return redirect()->route('depts.index')
        ->withSuccessMessage('Department deleted Successfully');
    }
}
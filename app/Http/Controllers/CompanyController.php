<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\Helper;
use Validator;
use App\Models\Company;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $value = Company::all();

        return view('companies.create',compact('value'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('companies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = $request->validate([

            
            'Client_ID' => 'required',
            'Branch_Code' => 'required',
            'Company_Name' => 'required',
            'Company_Address' => 'required',
            'Next_Check_Date' => 'required',
            'Status' => 'required',
            
        ]);

        $companies = Company::create($validatedData);

        return redirect('/admin')->with('success', 'data added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $companies)
    {
        $request->validate([

            
            'Client_ID' => 'required',
            'Branch_Code' => 'required',
            'Company_Name' => 'required',
            'Company_Address' => 'required',
            'Next_Check_Date' => 'required',
            'Status' => 'required',
        ]);

        $companies->create($request->all());

        return redirect()->route('welcome')
        ->withSuccessMessage('Company Info added Successfully');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
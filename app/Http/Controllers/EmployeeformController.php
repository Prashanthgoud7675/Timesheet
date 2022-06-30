<?php

namespace App\Http\Controllers;

use App\Models\Employeeform;
use App\Models\Bankform;
use App\Models\Employementform;
use App\Models\Payrollform;
use App\Models\Taxform;
use Illuminate\Http\Request;

class EmployeeformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Employeeform::all();

        $value = Bankform::all();

        $form = Employementform::all();

        $salary = Payrollform::all();

        $deduction = Taxform::all();

        return view('form.index',compact('data', 'value', 'form', 'salary', 'deduction'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form.create');
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

            'first' => 'required',
            'last' => 'required',
           'father' => 'required',
           'dob' => 'required',
           'gender' => 'required',
           'aadhar' => 'required',
           'pan' => 'required',
           'flatno' => 'required',
           'locality' => 'required',
           'city' => 'required',
           'state' => 'required',
           'pincode' => 'required',
           'building' => 'required',
           'area' => 'required',
           'currentcity' => 'required',
           'currentstate' => 'required',
           'currentpincode' => 'required',
           'mobile' => 'required',
           'alternate' => 'required',
           'email' => 'required',
           
            
        ]);

        $employee = Employeeform::create($validatedData);


        $enterData = $request->validate([

            'accountholdername' => 'required',
           'accountnumber' => 'required',
           'ifsccode' => 'required',
           'bankname' => 'required',
           'branchname' => 'required',
           'companyaccountholdername' => 'required',
           'companyaccountnumber' => 'required',
           'companyifsccode' => 'required',
           'companybankname' => 'required',
           'companybranchname' => 'required',
        ]);
        
        $bank = Bankform::create($enterData);


        $demoData = $request->validate([

            
            'workmobilenumber' => 'required',
            'workemail' => 'required',
            'hireddate' => 'required',
            'employeeid' => 'required',
            'designation' => 'required',
            'department' => 'required',
            
            
        ]);

        $employement = Employementform::create($demoData);

        $salaryData = $request->validate([

            'ctc' => 'required',
            'uan' => 'required',
            'basicsalary' => 'required',
            'hra' => 'required',
            'conveyance' => 'required',
            'medicalallowance' => 'required',
            'specialallowance' => 'required',
            'professionaltax' => 'required',
            'tds' => 'required',
            'tdsonbonus' => 'required',
            'foodvouchers' => 'required',
            'epf' => 'required',
            'loandeductions' => 'required',
            'otherdeductions' => 'required',
            'esi' => 'required',
            'grosspay' => 'required',
            'netpay' => 'required',
            

        ]);

        $payroll = Payrollform::create($salaryData);


        $deductionData = $request->validate([

            'pension' => 'required',
            'newpension' => 'required',
            'nsc' => 'required',
            'ppf' => 'required',
            'infrastructurebond' => 'required',
            'childreneducation' => 'required',
            'houseloan' => 'required',
            'others' => 'required',
            'insurancepremium' => 'required',
            'epfvoluntarypf' => 'required',
            'medicalinsuranceself' => 'required',
            'medicalinsuranceparents' => 'required',
            'medicalfordisable' => 'required',
            'medicalexpenditure' => 'required',

        ]);

        $tax = Taxform::create($deductionData);

        

        return redirect('/employee')->with('success', 'data added successfully');
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
    public function update(Request $request, $id,Employeeform $employee,Bankform $bank,Employementform $employement,Payrollform $payroll,Taxform $tax )
    {

        
        $request->validate([

            'first' => 'required',
            'last' => 'required',
           'father' => 'required',
           'dob' => 'required',
           'gender' => 'required',
           'aadhar' => 'required',
           'pan' => 'required',
           'flatno' => 'required',
           'locality' => 'required',
           'city' => 'required',
           'state' => 'required',
           'pincode' => 'required',
           'building' => 'required',
           'area' => 'required',
           'currentcity' => 'required',
           'currentstate' => 'required',
           'currentpincode' => 'required',
           'mobile' => 'required',
           'alternate' => 'required',
           'email' => 'required',
           
            
        ]);

        $employee->update($request->all());


        $request->validate([

            'accountholdername' => 'required',
           'accountnumber' => 'required',
           'ifsccode' => 'required',
           'bankname' => 'required',
           'branchname' => 'required',
           'companyaccountholdername' => 'required',
           'companyaccountnumber' => 'required',
           'companyifsccode' => 'required',
           'companybankname' => 'required',
           'companybranchname' => 'required',
        ]);
        
        $bank->update($request->all());


        $request->validate([

            
            'workmobilenumber' => 'required',
            'workemail' => 'required',
            'hireddate' => 'required',
            'employeeid' => 'required',
            'designation' => 'required',
            'department' => 'required',
            
            
        ]);

        $employement->update($request->all());

        $request->validate([

            'ctc' => 'required',
            'uan' => 'required',
            'basicsalary' => 'required',
            'hra' => 'required',
            'conveyance' => 'required',
            'medicalallowance' => 'required',
            'specialallowance' => 'required',
            'professionaltax' => 'required',
            'tds' => 'required',
            'tdsonbonus' => 'required',
            'foodvouchers' => 'required',
            'epf' => 'required',
            'loandeductions' => 'required',
            'otherdeductions' => 'required',
            'esi' => 'required',
            'grosspay' => 'required',
            'netpay' => 'required',
            

        ]);

        $payroll->update($request->all());


        $request->validate([

            'pension' => 'required',
            'newpension' => 'required',
            'nsc' => 'required',
            'ppf' => 'required',
            'infrastructurebond' => 'required',
            'childreneducation' => 'required',
            'houseloan' => 'required',
            'others' => 'required',
            'insurancepremium' => 'required',
            'epfvoluntarypf' => 'required',
            'medicalinsuranceself' => 'required',
            'medicalinsuranceparents' => 'required',
            'medicalfordisable' => 'required',
            'medicalexpenditure' => 'required',

        ]);

        $tax->update($request->all());
        

        return redirect()->route('form.index')
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

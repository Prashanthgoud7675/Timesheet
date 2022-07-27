<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;





class RegisterController extends Controller
{
    public function index()
    {
       

       
         return view('auth.register');
    }

    public function store(Request $request)
    {


        $this->validate($request, [

            'name' => 'required|max:150',
            'Companyname' => 'required|max:150',
            'empid' => 'required|max:50',
            'email' => 'required|email|max:150',
            'password' => 'required|confirmed'
        ]);

        $name = $request->name;
   
        $Companyname = $request->Companyname;
        $empid = $request->empid;
        $email = $request->email;
        $password  = Hash::make($request->password);
       

        
        
        $user_Id = Helper::IDGenerator(new User, 'user_Id', 5, 'USER'); /** Generate id */
        $q = new User;
        $q->user_Id = $user_Id;
        $q->name = $name;
        $q->Companyname = $Companyname;
        $q->empid = $empid;
        $q->email = $email;
        $q->password = $password;
   
        $q->save();

       

            auth()->attempt($request->only('email','password'));



        return redirect()->route('login')->withSuccessMessage('Registration Successfull');


    }
}
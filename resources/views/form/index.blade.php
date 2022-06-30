<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Montserrat:wght@500&family=Quintessential&family=Ubuntu+Mono&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Attune Global</title>


</head>

<body style="background-color: whitesmoke;font-family: 'Montserrat', sans-serif;">

    <section style="background-color:#002F6C;">

        <div class="container">



            <h1 style="font-size: 20px; color:white; font-weight:600"> <i class="fa fa-close"
                    style="font-size: 20px; color:white; margin-right:2%; margin-left:-9%"></i> Employee Setup</h1>



        </div>

    </section>

    <br>
    <br>


    <section>
           
        <div>
    
    
           

            <br>
            <br>

            @if ($message = Session::get('success_message'))
                <div style="width: 700px; margin-left:350px ">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-10">

                <p style="font-size: 19px; font-weight:600"> Personal Info </p>

                    <br>
                    <br>

            <div class="table-responsive" >

                <table class="table table-bordered">
                    <tr style="background-color: black;color:white;font-size:17px">
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Fathers Name</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Aadhar Num</th>
                        <th>PAN Num</th>
                        <th>Flat_No</th>
                        <th>Locality</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Pincode</th>
                        <th>Building_Name</th>
                        <th>Area</th>
                        <th>Current_City</th>
                        <th>Current_State</th>
                        <th>Current_Pincode</th>
                        <th>Mobile</th>
                        <th>Alternate_num</th>
                        <th>Email</th>
                        <th width="250px">Action</th>
                    </tr>
                    @foreach ($data as $i)
                        <tr>

                            <td>{{ $i->id }}</td>
                            <td>{{ $i->first }}</td>
                            <td>{{ $i->last }}</td>
                            <td>{{ $i->father }}</td>
                            <td>{{ $i->dob }}</td>
                            <td>{{ $i->gender }}</td>
                            <td>{{ $i->aadhar }}</td>
                            <td>{{ $i->pan }}</td>
                            <td>{{ $i->flatno }}</td>
                            <td>{{ $i->locality }}</td>
                            <td>{{ $i->city }}</td>
                            <td>{{ $i->state}}</td>
                            <td>{{ $i->pincode }}</td>
                            <td>{{ $i->building }}</td>
                            <td>{{ $i->area }}</td>
                            <td>{{ $i->currentcity }}</td>
                            <td>{{ $i->currentstate }}</td>
                            <td>{{ $i->currentpincode }}</td>
                            <td>{{ $i->mobile }}</td>
                            <td>{{ $i->alternate }}</td>
                            <td>{{ $i->email }}</td>
                           
                            <td>
                                <form action="" method="POST">





                                    <a class="btn btn-primary"
                                        href="">Edit</a>




                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger active">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
                </div>
            </div>

            <br>
            <br>

            <div class="row justify-content-center">
                <div class="col-md-10">

                    <p style="font-size: 19px; font-weight:600"> Bank Info </p>

                    <br>
                    <br>

                

            <div class="table-responsive" >

                <table class="table table-bordered">
                    <tr style="background-color: black;color:white;font-size:17px">
                        <th>id</th>
                        <th>A/C HolderName</th>
                        <th>A/C Number</th>
                        <th>IFSC Code</th>
                        <th>Bank Name</th>
                        <th>Branch Name</th>
                        <th>Company A/C HolderName</th>
                        <th>Company A/C Number</th>
                        <th>IFSC</th>
                        <th>Bank Name</th>
                        <th>Branch Name</th>

                        <th width="250px">Action</th>
                    </tr>
                    @foreach ($value as $i)
                        <tr>

                            <td>{{ $i->id }}</td>
                            <td>{{ $i->accountholdername }}</td>
                            <td>{{ $i->accountnumber }}</td>
                            <td>{{ $i->ifsccode }}</td>
                            <td>{{ $i->bankname }}</td>
                            <td>{{ $i->branchname }}</td>
                            <td>{{ $i->companyaccountholdername }}</td>
                            <td>{{ $i->companyaccountnumber }}</td>
                            <td>{{ $i->companyifsccode }}</td>
                            <td>{{ $i->companybankname }}</td>
                            <td>{{ $i->companybranchname }}</td>

                           
                            <td>
                                <form action="" method="POST">





                                    <a class="btn btn-primary"
                                        href="">Edit</a>




                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger active">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
                </div>
            </div>

            <br>
            <br>

            <div class="row justify-content-center">
                <div class="col-md-10">

                    <p style="font-size: 19px; font-weight:600"> Employement Info </p>

                    <br>
                    <br>

                

            <div class="table-responsive" >

                <table class="table table-bordered">
                    <tr style="background-color: black;color:white;font-size:17px">
                        <th>id</th>
                        <th>Work Mobile Num</th>
                        <th>Work Email</th>
                        <th>Hired Date</th>
                        <th>Employe_ID</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th width="250px">Action</th>
                    </tr>
                    @foreach ($form as $i)
                        <tr>

                            <td>{{ $i->id }}</td>
                            <td>{{ $i->workmobilenumber }}</td>
                            <td>{{ $i->workemail }}</td>
                            <td>{{ $i->hireddate }}</td>
                            <td>{{ $i->employeeid }}</td>
                            <td>{{ $i->designation }}</td>
                            <td>{{ $i->department }}</td>


                           
                            <td>
                                <form action="" method="POST">





                                    <a class="btn btn-primary"
                                        href="">Edit</a>




                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger active">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>

            </div>
                </div>
            </div>

            <br>
            <br>
            

            <div class="row justify-content-center">
                <div class="col-md-10">

                    <p style="font-size: 19px; font-weight:600"> Payroll Info </p>

                    <br>
                    <br>

                

            <div class="table-responsive" >


                <table class="table table-bordered">
                    <tr style="background-color: black;color:white;font-size:17px">
                        <th>id</th>
                        <th>CTC</th>
                        <th>UAN</th>
                        <th>Basic Salary</th>
                        <th>HRA</th>
                        <th>Conveyance</th>
                        <th>Medical Allowance</th>
                        <th>Special Allowance</th>
                        <th>Professional Tax</th>
                        <th>TDS</th>
                        <th>TDS on Bonus</th>
                        <th>Food Vouchers</th>
                        <th>EPF</th>
                        <th>Loan Deductions</th>
                        <th>Other Deductions</th>
                        <th>ESI</th>
                        <th>Gross Pay</th>
                        <th>Net Pay</th>
                        
                        <th width="250px">Action</th>
                    </tr>
                    @foreach ($salary as $i)
                        <tr>

                            <td>{{ $i->id }}</td>
                            <td>{{ $i->ctc }}</td>
                            <td>{{ $i->uan }}</td>
                            <td>{{ $i->basicsalary }}</td>
                            <td>{{ $i->hra }}</td>
                            <td>{{ $i->conveyance }}</td>
                            <td>{{ $i->medicalallowance }}</td>
                            <td>{{ $i->specialallowance }}</td>
                            <td>{{ $i->professionaltax }}</td>
                            <td>{{ $i->tds }}</td>
                            <td>{{ $i->tdsonbonus }}</td>
                            <td>{{ $i->foodvouchers }}</td>
                            <td>{{ $i->epf}}</td>
                            <td>{{ $i->loandeductions }}</td>
                            <td>{{ $i->otherdeductions }}</td>
                            <td>{{ $i->esi }}</td>
                            <td>{{ $i->grosspay }}</td>
                            <td>{{ $i->netpay }}</td>
                           
                           
                            <td>
                                <form action="" method="POST">





                                    <a class="btn btn-primary"
                                        href="">Edit</a>




                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger active">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
                </div>
            </div>

            <br><br><br>

            <div class="row justify-content-center">
                <div class="col-md-10">

                    <p style="font-size: 19px; font-weight:600"> Tax Info </p>

                    <br>
                    <br>

                

            <div class="table-responsive" >

                <table class="table table-bordered">
                    <tr style="background-color: black;color:white;font-size:17px">
                        <th>id</th>
                        <th>Pension Scheme of Insurance</th>
                        <th>New Pension Scheme-NPS</th>
                        <th>Nsc</th>
                        <th>PPF</th>
                        <th>Infra Structure Bond</th>
                        <th>Children Education</th>
                        <th>Housing Loan Repayment</th>
                        <th> Insurance Premium</th>
                        <th>Others(MF,ULIP)</th>
                        <th>EPF & Voluntary PF</th>
                        <th>Medical Insurance Premium-Self</th>
                        <th>Medical Insurance Premium-Parents</th>
                        <th>Medical for disable dependents</th>
                        <th>Medical expenditure for specific diseases</th>
                       
                        
                        
                        <th width="250px">Action</th>
                    </tr>
                    @foreach ($deduction as $i)
                        <tr>

                            <td>{{ $i->id }}</td>
                            <td>{{ $i->pension }}</td>
                            <td>{{ $i->newpension }}</td>
                            <td>{{ $i->nsc }}</td>
                            <td>{{ $i->ppf }}</td>
                            <td>{{ $i->infrastructurebond }}</td>
                            <td>{{ $i->childreneducation }}</td>
                            <td>{{ $i->houseloan }}</td>
                            <td>{{ $i->insurancepremium }}</td>
                            <td>{{ $i->others }}</td>
                            <td>{{ $i->epfvoluntarypf }}</td>
                            <td>{{ $i->medicalinsuranceself }}</td>
                            <td>{{ $i->medicalinsuranceparents}}</td>
                            <td>{{ $i->medicalfordisable }}</td>
                            <td>{{ $i->medicalexpenditure }}</td>
                            
                           
                           
                            <td>
                                <form action="" method="POST">





                                    <a class="btn btn-primary"
                                        href="">Edit</a>




                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger active">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>



            </div>
                </div>
            </div>
        </div>
    </section>



   

</body>

</html>


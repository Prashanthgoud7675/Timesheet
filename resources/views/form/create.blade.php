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

    <style>
        label {
            display: block;
            margin-bottom: 0.5rem;
        }

        input {
            
            
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
        }

        

        .ml-auto {
            margin-left: auto;
        }

        .text-center {
            text-align: center;
        }

        /* Progressbar */
        .progressbar {
            position: relative;
            display: flex;
            justify-content: space-between;
            counter-reset: step;
            margin: 2rem 5rem 4rem;
        }

        .progressbar::before,
        .progress {
            content: "";
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            height: 4px;
            width: 100%;
            background-color: rgb(43, 31, 31);
            z-index: -1;
        }

        .progress {
            background-color: bisque;
            width: 0%;
            transition: 0.3s;
        }

        .progress-step {
            width: 2.1875rem;
            height: 2.1875rem;
            background-color: rgb(169, 169, 251);
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;

        }

        .progress-step::before {
            counter-increment: step;
            content: counter(step);
        }

        .progress-step::after {
            content: attr(data-title);
            position: absolute;
            top: calc(100% + 0.5rem);
            font-size: 0.85rem;
            color: #666;
        }

        .progress-step-active {
            background-color: rgb(101, 75, 75);
            color: white;
        }



        .form-step {
            display: none;
            transform-origin: top;
            animation: animate 0.5s;
        }

        .form-step-active {
            display: block;
        }

        .input-group {
            margin: 2rem 0;
        }

        @keyframes animate {
            from {
                transform: scale(1, 0);
                opacity: 0;
            }

            to {
                transform: scale(1, 1);
                opacity: 1;
            }
        }

        /* Button */
        .btns-group {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .btn {
            padding: 0.75rem;
            display: block;
            text-decoration: none;
            background-color: var(--primary-color);
            color: #f3f3f3;
            text-align: center;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover {
            box-shadow: 0 0 0 2px #fff, 0 0 0 3px var(--primary-color);
        }
    </style>
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

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="progressbar" style="font-size:15px">
                    <div class="progress" id="progress"></div>


                    <div class="progress-step  progress-step-active" data-title="Personal info"></div>
                    <div class="progress-step" data-title="Direct deposit"></div>
                    <div class="progress-step" data-title="Employement Info"></div>
                    <div class="progress-step" data-title="Patroll Info"></div>
                    <div class="progress-step" data-title="Tax Info"></div>


                </div>
            </div>
        </div>

        <br>
        <br>

       
        <div class="row justify-content-center">
            <div class="col-md-4"
                style="background-color: white; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); border-radius:10px">

                <form action="{{ route('form.store') }}" method="POST"
                    style="margin-top: 7%; margin-bottom:7%;margin-left:3%">

                    @csrf


                    <div class="form-step form-step-active">


                        <h1 style="font-size:20px;font-weight:700">Personal Info</h1>
                        <br>

                    
                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">

                                        <input type="name" class="form-control" id="FirstName" placeholder="first"
                                            name="first" style="padding-top:30px; font-size:15px;width: 165px">
                                        <label for="first">First Name</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="name" class="form-control" id="last" placeholder="last"
                                            name="last" style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                        <label for="last">Last Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="name" class="form-control" id="father" placeholder="name" name="father"
                                style=" padding-top:30px; font-size:15px; width: 360px">
                            <label for="father">Father's Name</label>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="date" class="form-control" id="Date of birth"
                                            placeholder="date of birth" name="dob"
                                            style=" width: 165px; padding-top:30px; font-size:15px">
                                        <label for="Date of birth">Date of birth</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <select class="form-select" id="Gender"
                                            aria-label="Floating label select example" name="gender"
                                            style=" width: 165px;  padding-top:10%; font-size:13px;margin-left:0%">

                                            <option value="Male" style="font-size: 15px">Male</option>
                                            <option value="Female" style="font-size: 15px">Female</option>

                                        </select>
                                        <label for="Gender">Gender</label>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="name" class="form-control" id="aadhar"
                                            placeholder="Aadhar no" name="aadhar"
                                            style="width: 165px; padding-top:30px; font-size:15px">
                                        <label for="AadhaarNumber">Aadhar Number</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="PAN Number" class="form-control" id="pan"
                                            placeholder="PAN Number" name="pan"
                                            style="width: 165px; padding-top:30px; font-size:15px;margin-left:0%">
                                        <label for="PAN number">PAN Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <h1 style="font-size:20px;font-weight:700"> Home Address</h1>
                        <br>
                        <p>Make sure the address is correct, in case you need to mail one of these documents to the
                            employee
                            or contractor.</p><br>

                        <h6 style="font-size:15px;font-weight:700"> Present Address</h6>
                        <br>

                        <div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="flatno"
                                    placeholder="Flat no/Bulding Name" name="flatno"
                                    style="width: 360px; padding-top:30px; font-size:15px">
                                <label for="Flatno">Flat no/Bulding Name</label>
                            </div>
                        </div>


                        <div class="form-floating mb-4">
                            <input type="pincode" class="form-control" id="locality"
                                placeholder="Locality/Area/Street" name="locality"
                                style="width: 360px; padding-top:30px; font-size:15px">
                            <label for="Locality">Locality/Area/Street</label>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="city" placeholder="City"
                                            name="city" style="padding-top:30px; font-size:15px; width: 165px">
                                        <label for="City">City</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="text" class="form-control" id="state"
                                            placeholder="state" name="state"
                                            style="width: 165px; padding-top:30px; font-size:15px;margin-left:0%">
                                        <label for="State">State</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="form-floating  mb-4">
                                <input type="text" class="form-control" id="pincode" placeholder="Pincode"
                                    name="pincode" style="padding-top:30px; font-size:15px;width:165px">
                                <label for="Pincode">Pincode</label>
                            </div>
                        </div>
                        </br>
                        <h6 style="font-size:15px;font-weight:700"> Permanent Address</h6>
                        </br>


                        <div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="building"
                                    placeholder="Flat no/Bulding Name" name="building"
                                    style="width: 360px;padding-top:30px; font-size:15px">
                                <label for="building">Flat no/Bulding Name</label>
                            </div>
                        </div>





                        <div class="form-floating mb-4">
                            <input type="pincode" class="form-control" id="area"
                                placeholder="Locality/Area/Street" name="area"
                                style="width: 360px;padding-top:30px; font-size:15px">
                            <label for="area">Locality/Area/Street</label>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="currentcity"
                                            placeholder="City" name="currentcity"
                                            style="padding-top:30px; font-size:15px;width: 165px">
                                        <label for="CurrentCity">City</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="text" class="form-control" id="currentstate"
                                            placeholder="state" name="currentstate"
                                            style="padding-top:30px; font-size:15px;margin-left:0%;width: 165px">
                                        <label for="CurrentState">State</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="form-floating  mb-4">
                                <input type="text" class="form-control" id="currentpincode" placeholder="Pincode"
                                    name="currentpincode" style="width: 165px;padding-top:30px; font-size:15px">
                                <label for="Current Pincode">Pincode</label>
                            </div>
                        </div>

                        <br>
                        <h1 style="font-size:20px;font-weight:700">Contact Info</h1>
                        <br>
                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="Mobile number" class="form-control" id="mobile"
                                            placeholder="Mobile no" name="mobile"
                                            style="width: 165px; padding-top:30px; font-size:15px">
                                        <label for="Mobile Number">Mobile Number</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="Alternate Number" class="form-control" id="alternate"
                                            placeholder="Alternate Number" name="alternate"
                                            style="padding-top:30px; font-size:15px;margin-left:0%;width: 165px">
                                        <label for="Alternate Number">Alternate Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-4">
                            <input type="Email" class="form-control" id="email" placeholder="Email"
                                name="email" style="width: 360px;padding-top:30px; font-size:15px">
                            <label for="Email">Email</label>
                        </div>





                        <br><br>

                        <div class="">

                            <a href="#" class="btn btn-next"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:100px;margin-left:55%">Next</a>

                        </div>

                    </div>



                    <div class="form-step">

                        <h1 style="font-size:20px;font-weight:700">Bank info</h1>

                        <br>
                        <h6 style="font-size:15px;font-weight:700">Bank Details 1</h6>
                        <br>

                        <div class="form-floating mb-4">
                            <input type="name" class="form-control" id="Account Holder Name" placeholder="name"
                                name="accountholdername" style="width:360px;padding-top:30px; font-size:15px">
                            <label for="Account Holder Name">Account Holder Name</label>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="Account Number" class="form-control" id="accountnumber"
                                            placeholder="Account Number" name="accountnumber"
                                            style="padding-top:30px; font-size:15px;width: 165px">
                                        <label for="Account Number">Account Number</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="IFSC Code" class="form-control" id="ifsccode" name="ifsccode"
                                            placeholder="IFSC Code"
                                            style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                        <label for="ifsccode">IFSC Code</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="bankname"
                                            placeholder="Bank Name" name="bankname"
                                            style="padding-top:30px; font-size:15px; width: 165px">
                                        <label for="Bank Name">Bank Name</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="Branch Name" class="form-control" id="branchname"
                                            placeholder="Branch Name" name="branchname"
                                            style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                        <label for="branchname">Branch Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <h6 style="font-size:15px;font-weight:700">Bank Details 2</h6>
                        <br>

                        <div class="form-floating mb-4">
                            <input type="name" class="form-control" id="Company Account Holder Name"
                                placeholder="name" name="companyaccountholdername"
                                style="width:360px;padding-top:30px; font-size:15px">
                            <label for="Company Account Holder Name">Account Holder Name</label>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="Account Number" class="form-control" id="companyaccountnumber"
                                            placeholder="Account Number" name="companyaccountnumber"
                                            style="padding-top:30px; font-size:15px;width: 165px">
                                        <label for="Company Account Number">Account Number</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="IFSC Code" class="form-control" id="companyifsccode"
                                            placeholder="IFSC Code" name="companyifsccode"
                                            style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                        <label for="Company IFSC code">IFSC Code</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="companybankname"
                                            placeholder="Bank Name" name="companybankname"
                                            style="padding-top:30px; font-size:15px; width: 165px">
                                        <label for="Company Bank Name">Bank Name</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="Branch Name" class="form-control" id="companybranchname"
                                            placeholder="Branch Name" name="companybranchname"
                                            style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                        <label for="Company Branch Name">Branch Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br><br>
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:100px;">Previous</a>

                            <a href="#" class="btn btn-next"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:100px;">Next</a>

                        </div>
                    </div>


                    <div class="form-step">

                        <h1 style="font-size:20px;font-weight:700">Employement info</h1>
                        <br>
                        <h6 style="font-size:15px;font-weight:700">Contact Info</h6>
                        <br>
                        <div style="display:flex;">
                            <div class="row">

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="text" class="form-control" id="workmobilenumber"
                                            placeholder="Work Mobikle Num" name="workmobilenumber"
                                            style="padding-top:30px; font-size:15px; width: 165px">
                                        <label for="Work Mobile number">Work Mobile Num</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="email" class="form-control" id="workemail"
                                            placeholder="Work Email" name="workemail"
                                            style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                        <label for="Work Email">Work Email</label>
                                    </div>
                                </div>




                            </div>
                        </div>

                        <br>
                        <h6 style="font-size:15px;font-weight:700">Hiring Info</h6>
                        <br>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="date" class="form-control" id="hireddate"
                                            placeholder="Hired Date" name="hireddate"
                                            style="width:165px;padding-top:30px; font-size:15px">
                                        <label for="Hired Date">Hired Date</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="Employee Id" class="form-control" id="employeeid"
                                            placeholder="Employee Id" name="employeeid"
                                            style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                        <label for="Employee Id">Employee Id</label>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="Designation" class="form-control" id="designation"
                                            placeholder="Designation" name="designation"
                                            style="padding-top:30px; font-size:15px; width: 165px">
                                        <label for="Designation">Designation</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="Department" class="form-control" id="department"
                                            placeholder="Department" name="department"
                                            style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                        <label for="Department">Department</label>
                                    </div>
                                </div>



                            </div>
                        </div>


                        <br><br>

                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:100px;">Previous</a>

                            <a href="#" class="btn btn-next"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:100px;">Next</a>

                           
                        </div>
                    </div>


                    <div class="form-step">

                        <h1 style="font-size:15px;font-weight:700">Payroll info</h1>

                        <br>
                        <div style="display:flex;">
                            <div class="row">

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="text" class="form-control" id="ctc" placeholder=" CTC"
                                            name="ctc" style="padding-top:30px; font-size:15px; width:165px;">
                                        <label for="CTC">CTC*</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="text" class="form-control" id="uan" placeholder="UAN"
                                            name="uan" style="padding-top:30px; font-size:15px;margin-left:0%; width:165px">
                                        <label for="UAN">UAN*</label>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success active" type="button" id="myBtn"
                                style="width:100px; height:45px; margin-left:2%">Get Value</button>

                        </div>


                        <ul class="nav nav-pills">

                            <li class="active"><a data-toggle="pill" href="#Earnings">Earnings</a></li>
                            <li><a data-toggle="pill" href="#Deductions">Deductions</a></li>

                        </ul>
                        <div class="tab-content">
                            <div id="Earnings" class="tab-pane fade">
                                <br>
                                <br>
                                <div style="display:flex;">
                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="basic"
                                                    placeholder="Basic Salary" name="basicsalary"
                                                    style="padding-top:30px; font-size:15px; width: 165px">
                                                <label for="Basic Salary">Basic Salary*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="hra"
                                                    placeholder="HRA" name="hra"
                                                    style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                                <label for="HRA">HRA*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div style="display:flex;">
                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="conveyance"
                                                    placeholder=" Conveyance" name="conveyance"
                                                    style="padding-top:30px; font-size:15px; width: 165px">
                                                <label for="Conveyance">Conveyance*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="medicalAllowance"
                                                    placeholder="Medical Allowance" name="medicalallowance"
                                                    style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                                <label for="Medical Allowance">Medical Allowance*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class=" form-floating mb-4">
                                    <input type="text" class="form-control" id="taxOne"
                                        placeholder="Special Allowance" name="specialallowance"
                                        style="width:360px;padding-top:30px; font-size:15px">
                                    <label for="Special Allowance">Special Allowance*</label>
                                </div>
                            </div>

                            <br>

                            <div id="Deductions" class="tab-pane fade">

                                <br>
                                <br>
                                <div style="display:flex;">
                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="Proffesional Tax*" class="form-control"
                                                    id="professional" placeholder="Proffesional Tax*"
                                                    name="professionaltax" style="padding-top:30px; font-size:15px; width: 165px">
                                                <label for="Professional Tax">Proffesional Tax*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="tds"
                                                    placeholder="TDS" name="tds"
                                                    style="padding-top:30px; font-size:15px;margin-left:0%; width: 165px">
                                                <label for="TDS">TDS*</label>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div style="display:flex;">
                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="tdsOnBonus"
                                                    placeholder="TDS on Bonus" name="tdsonbonus"
                                                    style="padding-top:30px; font-size:15px; width: 165px">
                                                <label for="TDS on Bonus">TDS On Bonus*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="foodVouchers"
                                                    placeholder="Food Vouchers" name="foodvouchers"
                                                    style="padding-top:30px; font-size:15px;margin-left:0%; width:165px">
                                                <label for="Food Vouchers">Food Vouchers*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div style="display:flex;">

                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="epf"
                                                    placeholder="EPF" name="epf"
                                                    style="padding-top:30px; font-size:15px; width:165px">
                                                <label for="EPF">EPF*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="loan"
                                                    placeholder="Loans/Advances Deductions" name="loandeductions"
                                                    style="padding-top:30px; font-size:15px;margin-left:0%; width:165px">
                                                <label for="Loan Deductions">Loan Deductions*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div style="display:flex;">
                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="otherDeductions"
                                                    placeholder="Other Deductions" name="otherdeductions"
                                                    style="padding-top:30px; font-size:15px;width:165px">
                                                <label for="Other Deductions">Other Deductions*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="taxTwo"
                                                    placeholder="ESI" name="esi"
                                                    style="padding-top:30px; font-size:15px;margin-left:0%; width:165px">
                                                <label for="ESI">ESI*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>


                        <br><br>

                        <div style="display:flex;">
                            <div class="row">

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="text" class="form-control" id="gross"
                                            placeholder="Gross Pay" name="grosspay"
                                            style="padding-top:30px; font-size:15px; width:165px">
                                        <label for="Gross Pay">Gross Pay*</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="text" class="form-control" id="net"
                                            placeholder="Net Pay" name="netpay"
                                            style="padding-top:30px; font-size:15px;margin-left:0%; width:165px">
                                        <label for="Net Pay">Net Pay*</label>
                                    </div>
                                </div>

                            </div>
                        </div>





                        <br>
                        <br>




                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:100px;">Previous</a>

                            <a href="#" class="btn btn-next"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:100px;">Next</a>

                           
                        </div>
                    </div>

                    <div class="form-step">

                    <h1 style="font-size:20px;font-weight:700">Tax info</h1>
                    <br>
                    <h6 style="font-size:15px;font-weight:700">Investments/Saving Details</h6>
                    <br>
                    <h6 style="font-size:15px;font-weight:700">Under Section 80C</h6>
                    <br>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="pension"
                            placeholder="Deductions under Pension Scheme of Insurance" name="pension"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="pension">Deductions under Pension Scheme of Insurance*</label>
                    </div>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="newpension"
                            placeholder="Deductions Under New Pension Scheme-NPS*" name="newpension"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="newpension">Deductions Under New Pension Scheme-NPS*</label>
                    </div>
                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="nsc" placeholder="Nsc*" name="nsc"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="Nsc">Nsc*</label>
                    </div>
                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="ppf" placeholder="PPF*" name="ppf"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="PPF">PPF*</label>
                    </div>
                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="infrastructurebond"
                            placeholder="Infra Structure Bond*" name="infrastructurebond"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="Infra Structure Bond">Infra Structure Bond*</label>
                    </div>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="childreneducation"
                            placeholder="Children Education*" name="childreneducation"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="Children Education">Children Education*</label>
                    </div>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="houseloan"
                            placeholder="Housing Loan Principle repayment and Interest*" name="houseloan"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="House Loan">Housing Loan Principle repayment and Interest*</label>
                    </div>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="Insurance Premium"
                            placeholder="Insurance Premium*" name="insurancepremium"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="Insurance Premium">Insurance Premium*</label>
                    </div>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="Others" placeholder="Others(MF,ULIP)*"
                            name="others" style="width:360px;padding-top:30px; font-size:15px">
                        <label for="Others">Others(MF,ULIP)*</label>
                    </div>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="EPF VoluntaryPF"
                            placeholder="EPF & Voluntary PF*" name="epfvoluntarypf"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="EPF VoluntaryPF">EPF & Voluntary PF*</label>
                    </div>
                    <br>
                    <h6 style="font-size:15px;font-weight:700">Under Section 80 D</h6>
                    <br>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="Medical Insurance self"
                            placeholder="Medical Insurance Premium-Self*" name="medicalinsuranceself"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="Medical Insurance self">Medical Insurance Premium-Self*</label>
                    </div>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="Medical Insurance Parents"
                            placeholder="Medical Insurance Premium-parents(dependents)*"
                            name="medicalinsuranceparents" style="width:360px;padding-top:30px; font-size:15px">
                        <label for="Medical Insurance Parents">Medical Insurance
                            Premium-parents(dependents)*</label>
                    </div>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="Medical for disable"
                            placeholder="Medical for disable dependents*" name="medicalfordisable"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="Medical for disable">Medical for disable dependents*</label>
                    </div>

                    <div class=" form-floating mb-4">
                        <input type="text" class="form-control" id="Medical expenditure"
                            placeholder="Medical expenditure for specifies diseases*" name="medicalexpenditure"
                            style="width:360px;padding-top:30px; font-size:15px">
                        <label for="Medical expenditure">Medical expenditure for specifies diseases*</label>
                    </div>
                    <br><br>

                    <div class="btns-group">
                        <a href="#" class="btn btn-prev"
                            style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:100px">Previous</a>
                        <button class="btn "
                            style="background-color: rgb(101, 89, 89); color:white; font-weight:600; font-size:17px;width:100px;margin-left:45%">
                            Submit
                        </button>
                    </div>
            </div>


            </form>



        </div>
        </div>
















    </section>




</body>

</html>

<script>
    const prevBtns = document.querySelectorAll(".btn-prev");
    const nextBtns = document.querySelectorAll(".btn-next");
    const progress = document.getElementById("progress");
    const formSteps = document.querySelectorAll(".form-step");
    const progressSteps = document.querySelectorAll(".progress-step");

    let formStepsNum = 0;

    nextBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            formStepsNum++;
            updateFormSteps();
            updateProgressbar();
        });
    });

    prevBtns.forEach((btn) => {
        btn.addEventListener("click", () => {
            formStepsNum--;
            updateFormSteps();
            updateProgressbar();
        });
    });

    function updateFormSteps() {
        formSteps.forEach((formStep) => {
            formStep.classList.contains("form-step-active") &&
                formStep.classList.remove("form-step-active");
        });

        formSteps[formStepsNum].classList.add("form-step-active");
    }

    function updateProgressbar() {
        progressSteps.forEach((progressStep, idx) => {
            if (idx < formStepsNum + 1) {
                progressStep.classList.add("progress-step-active");
            } else {
                progressStep.classList.remove("progress-step-active");
            }
        });

        const progressActive = document.querySelectorAll(".progress-step-active");

        progress.style.width =
            ((progressActive.length - 1) / (progressSteps.length - 1)) * 100 + "%";
    }
</script>




<script>

    
    var btn = document.getElementById("myBtn");
    
    btn.addEventListener("click", basic);
    btn.addEventListener("click", hra);
    btn.addEventListener("click", epf);
    btn.addEventListener("click", gross);
    btn.addEventListener("click", net);
    btn.addEventListener("click", special);
    btn.addEventListener("click", professional);
    btn.addEventListener("click", esi);
    
    
    
    
     function basic(){
                
     var inputVal = document.getElementById("ctc").value;
    
     const percent = 40;
    
     const net = Math.floor((percent/100 * inputVal)/12);
    
     const head = document.getElementById('basic').value = net;
    
        
     document.body.appendChild(head);
       
            }



    
        
    
    function hra() {
    
      var inputVal = document.getElementById("basic").value;
    
      const percent = 40;
    
    const net = Math.floor(((percent/100) * inputVal));
    
    const head = document.getElementById('hra').value = net;

    
       document.body.appendChild(head);
      
    }  
    
    

    const conveyance = document.getElementById('conveyance').value = 1600;
    
    function epf() {
    
    var inputVal = document.getElementById("basic").value;
    
    const percent = 12;
    
    const net = Math.floor(((percent/100) * inputVal));
    
    const head = document.getElementById('epf').value = net;
    
    
    
    
     document.body.appendChild(head);
    
    }  




    

    
    const medicalAllowance = document.getElementById('medicalAllowance').value = 1250;
    
    




    
    function gross() {
    
        var inputVal = document.getElementById("ctc").value;
        
        const percent = 12;
        
        const net = Math.floor(( inputVal/12));
        
        const head = document.getElementById('gross').value = net;
        
        
        
        
         document.body.appendChild(head);
        
        } 
        
        
    


        
        function special() {
        
            const basic = parseInt(document.getElementById("basic").value);
            const hra = parseInt(document.getElementById("hra").value);
            const conveyance = parseInt(document.getElementById("conveyance").value);
            const medicalAllowance = parseInt(document.getElementById("medicalAllowance").value);
            
            const ctc = parseInt(document.getElementById("ctc").value);

            const salary = ctc/12;

            const epf = parseInt(document.getElementById("epf").value);

            
            const net = Math.floor(salary -basic - hra - conveyance - medicalAllowance - epf);
            
                      document.getElementById("taxOne").value = net;
            
            
            
            } 






            function professional(){

                const ctc = parseInt(document.getElementById("ctc").value);

                const salary = ctc/12;

                if(salary < 16000){

                    const head = document.getElementById('professional').value = 0;
            
            
            
            
             document.body.appendChild(head); 

                }

                else if(salary < 22000){

                    const head = document.getElementById('professional').value = 150;
            
            
            
            
                    document.body.appendChild(head); 
                    
                }

                else{
                    const head = document.getElementById('professional').value = 200;
            
            
            
            
                    document.body.appendChild(head); 
                }

            }






            const tds = document.getElementById('tds').value = 0;
    
            const tdsOnBonus = document.getElementById('tdsOnBonus').value = 0;

            const foodVouchers = document.getElementById('foodVouchers').value = 0;
    
            const loan = document.getElementById('loan').value = 0;

            const otherDeductions = document.getElementById('otherDeductions').value = 0;







            function esi(){

                const ctc = parseInt(document.getElementById("ctc").value);

                const salary = ctc/12;

                if(salary < 21000){

                    const percent = 0.75;

                    const net = Math.floor(( percent/100) * salary);
        
                    const head = document.getElementById('taxTwo').value = net;
        
                    document.body.appendChild(head);

                }

                else{

                    const head = document.getElementById('taxTwo').value = 0;

                }
            }
    






            function net() {
        
                const basic = parseInt(document.getElementById("basic").value);
                const hra = parseInt(document.getElementById("hra").value);
                const conveyance = parseInt(document.getElementById("conveyance").value);
                const medicalAllowance = parseInt(document.getElementById("medicalAllowance").value);

                const special = parseInt(document.getElementById("taxOne").value);
                
    
                const epf = parseInt(document.getElementById("epf").value);
 
                const net = (basic + hra + conveyance + medicalAllowance + special    - epf);
                
                const head = document.getElementById('net').value = net;
                
                
                
                
                 document.body.appendChild(head);
                
                } 
        
        
            
    </script>
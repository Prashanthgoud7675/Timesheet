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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


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
            display: block;
            width: 100%;
            padding: 0.75rem;
            border: 1px solid #ccc;
            border-radius: 0.25rem;
        }

        .width-50 {
            width: 50%;
        }

        .ml-auto {
            margin-left: auto;
        }

        .text-center {
            text-align: center;
        }


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
            width: 99%;
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

<body style="background-color: whitesmoke; font-family: 'Montserrat', sans-serif;">

    <section style="background-color:#002F6C;">

        <div class="container">



            <h1 style="font-size: 20px; color:white; font-weight:600"> <i class="fa fa-close"
                    style="font-size: 20px; color:white; margin-right:2%; margin-left:-12%"></i> Employee Setup</h1>



        </div>

    </section>

    <br>
    <br>



    <section>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="progressbar">
                    <div class="progress" id="progress"></div>


                    <div class="progress-step  progress-step-active" data-title="Contract info"></div>
                    <div class="progress-step" data-title="Direct deposit"> </div>
                    <div class="progress-step" data-title="Employment info"></div>
                    <div class="progress-step" data-title="payroll info"></div>

                    <div class="progress-step" data-title="Review and complete"></div>
                </div>
            </div>
        </div>
        <br>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-6"
                style="background-color: white; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); border-radius:10px">

                <form action="#" class="form" style="margin-top: 7%; margin-bottom:7%">

                   


                    <div class="form-step form-step-active">

                        <h3 style="font-weight: 600">Contract Info</h3>
                        <br>
    
                        <p style="font-size: 20px; font-weight:600">Basic Info</p>
                        <br>

                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style=" width:360px;padding-top:30px; font-size:15px">
                             
                              <option value="Contract with TIN">Contract with TIN</option>
                              
                            </select>
                            <label for="floatingSelect">Employement type*</label>
                          </div>
                          <br>


                     

                        <div class="row">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Company Name" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Company Name</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Tax Identification number" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Tax Identification number*</label>
                                </div>
                            </div>





                        </div>
                        <br>

                        <p style="font-size: 20px; font-weight:600">Home Address</p>
                        <br>

                        
                        <div class="row" style="margin-bottom:2%">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Flat no/Building Name" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Flat no/Building Name</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Locality/Area/Street" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Locality/Area/Street</label>
                                </div>
                            </div>





                        </div>

                        
                        <div class="row" style="margin-bottom:2%">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="City" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">City</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="State" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">State</label>
                                </div>
                            </div>





                        </div>

                        
                        <div class="row">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Pincode" style="padding-top:30px; font-size:15px;width:360px">
                                    <label for="floatingInput">Pincode</label>
                                </div>
                            </div>

                         





                        </div>




                        <h3 style="font-weight: 600">Contact Info</h3>
                        <br>


                        <div class="row">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Mobile Num" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Mobile Num</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput" placeholder="Email" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Email Address</label>
                                </div>
                            </div>





                        </div>
                        <br>



                        <div class="">
                            <a href="#" class="btn btn-next  ml-auto"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px; width:200px; margin-right:10%">Next</a>
                        </div>
                    </div>
                    <div class="form-step">

                        <h3 style="font-weight: 600">Direct deposit</h3>

                        <div class="form-floating">
                            <select class="form-select" id="floatingSelect" aria-label="Floating label select example" style="padding-top:30px; font-size:15px; width:360px">
                             
                              <option value="Current Account">Current Account</option>
                              <option value="Savings Account">Savings Account</option>
                              
                            </select>
                            <label for="floatingSelect">Account type*</label>
                          </div>
                          <br>


                          <div class="row" style="margin-bottom:2%">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Routing Number" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Routing Number</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Confirm Routing Num"
                                    style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Confirm Routing Num</label>
                                </div>
                            </div>

                        </div>

                        <div class="row" style="margin-bottom:2%">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Account Number" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Account Number</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Confirm Account Number"
                                    style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Confirm Account Number</label>
                                </div>
                            </div>

                        </div>


                        <div class="row" style="margin-bottom:2%">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Bank Name" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Bank Name</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Branch Name"
                                    style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Branch Name</label>
                                </div>
                            </div>

                        </div>


                        <div class="row">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Deposit Distribution" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Deposit Distribution</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Amount"
                                    style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Amount</label>
                                </div>
                            </div>

                        </div>

                        <br>
                        <br>


                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: blue; color:white; font-weight:600; font-size:17px; width:200px; margin-left:10%">Previous</a>
                            <a href="#" class="btn btn-next"
                                style="background-color: rgb(101, 89, 89); color:white; font-weight:600; font-size:17px; width:200px; margin-right:10%">Next</a>
                        </div>
                    </div>
                    <div class="form-step">

                        <h3 style="font-weight: 600">Employement info</h3>
                        <br>

                        <p style="font-size:20px; font-weight:600">Contact Info</p>
                        <br>


                        <div class="row">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Work Mobikle Num" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Work Mobile Num</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="Work Email" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Work Email</label>
                                </div>
                            </div>





                        </div>
                        <br>


                        <p style="font-size: 20px; font-weight:600">Hiring Info</p>
                        <br>


                        <div class="row" style="margin-bottom:2%">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="date" class="form-control" id="floatingInput"
                                        placeholder="Hired Date" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Hire Date </label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Employe ID" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Employe ID</label>
                                </div>
                            </div>


                        </div>


                        <div class="row">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder=" Designation" style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Designation</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="Dept Name"
                                    style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">Dept Name</label>
                                </div>
                            </div>

                        </div>
                        <br>
                        <br>



                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: blue; color:white; font-weight:600; font-size:17px; width:200px; margin-left:10% ">Previous</a>
                            <a href="#" class="btn btn-next"
                                style="background-color: rgb(101, 89, 89); color:white; font-weight:600; font-size:17px; width:200px; margin-right:10%">Next</a>
                        </div>
                    </div>
                    <div class="form-step">

                        <h3 style="font-size: 20px; font-weight:600">Payroll info</h3>


                        <div class="row">

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder=" CTC"
                                    style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">CTC*</label>
                                </div>
                            </div>

                            <div class="col">
                                <div class=" form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput" placeholder="UAN"
                                    style="padding-top:9%; font-size:15px">
                                    <label for="floatingInput">UAN*</label>
                                </div>
                            </div>



                        </div>
                        <br>




                        <ul class="nav nav-pills">

                            <li class="active"><a data-toggle="pill" href="#Earnings">Earnings</a></li>
                            <li><a data-toggle="pill" href="#Deductions">Deductions</a></li>

                        </ul>

                        <div class="tab-content">

                            <div id="Earnings" class="tab-pane fade">
                                <br>
                                <br>

                                <div class="row" style="margin-bottom:2%">

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Basic Salary" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">Basic Salary*</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="HRA" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">HRA*</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row" style="margin-bottom:2%">

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder=" Conveyance" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">Conveyance*</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Medical Allowance" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">Medical Allowance*</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Special Allowance" style="padding-top:30px;width:360px">
                                            <label for="floatingInput">Special Allowance*</label>
                                        </div>
                                    </div>

                                   

                                </div>

                                

                      

                            </div>


                            <div id="Deductions" class="tab-pane fade">

                                <br>
                                <br>

                                <div class="row" style="margin-bottom:2%">

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Pressional Tax" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">Professional TaX*</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="TDS" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">TDS*</label>
                                        </div>
                                    </div>

                                </div>


                                <div class="row" style="margin-bottom:2%">

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="TDS on Bonus" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">TDS On Bonus*</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Food Vouchers" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">Food Vouchers*</label>
                                        </div>
                                    </div>

                                </div>


                                <div class="row" style="margin-bottom:2%">

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="EPF" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">EPF*</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Loans/Advances Deductions" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">Loans/Advances Deductions*</label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row">

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="Other Deductions" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">Other Deductions*</label>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class=" form-floating mb-3">
                                            <input type="text" class="form-control" id="floatingInput"
                                                placeholder="ESI" style="padding-top:9%; font-size:15px">
                                            <label for="floatingInput">ESI*</label>
                                        </div>
                                    </div>

                                </div>

                                

                               


                            </div>

                            <br>
                            <br>
                            <br>


                            <div class="row">

                                <div class="col">
                                    <div class=" form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Gross Pay" style="padding-top:9%; font-size:15px">
                                        <label for="floatingInput">Gross Pay*</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class=" form-floating mb-3">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Net Pay" style="padding-top:9%; font-size:15px">
                                        <label for="floatingInput">Net Pay*</label>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <br>
                        <br>




                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: blue; color:white; font-weight:600; font-size:17px; width:200px; margin-left:10%">Previous</a>
                                <input type="submit" value="Submit" class="btn"
                                style="background-color: rgb(101, 89, 89); color:white; font-weight:600; font-size:17px; width:200px; margin-right:10%" />
                        </div>
                    </div>



                    <div class="form-step">
                        <div class="input-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" />
                        </div>
                        <div class="input-group">
                            <label for="confirmPassword">Confirm Password</label>
                            <input type="password" name="confirmPassword" id="confirmPassword" />
                        </div>



                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color:rgb(73, 66, 66); color:white; font-weight:600; font-size:17px">Previous</a>
                            <input type="submit" value="Submit" class="btn"
                                style="background-color: rgb(101, 89, 89); color:white; font-weight:600; font-size:17px" />
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

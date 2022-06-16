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
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Montserrat:wght@500&family=Quintessential&family=Ubuntu+Mono&display=swap" rel="stylesheet">

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
                <div class="progressbar">
                    <div class="progress" id="progress"></div>


                    <div class="progress-step  progress-step-active" data-title="Personal info"></div>
                    <div class="progress-step" data-title="Direct deposit"></div>
                    <div class="progress-step" data-title="Employment info"></div>
                    <div class="progress-step" data-title="payroll info"></div>
                    <div class="progress-step" data-title="Tax info"></div>
                    <div class="progress-step" data-title="Review and complete"></div>
                </div>
            </div>
        </div>

        <br>
        <br>

        <div class="row justify-content-center">
            <div class="col-md-6"
                style="background-color: white; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); border-radius:10px">

                <form action="#" class="form" style="margin-top: 7%; margin-bottom:7%;margin-left:3%">




                    <div class="form-step form-step-active">



                        <h1 style="font-size:20px;font-weight:700">Personal Info</h1>
                        <br>
                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="name" class="form-control" id="floatingInput" placeholder="name"
                                            style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">First Name</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="name" class="form-control" id="floatingInput" placeholder="name"
                                            style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Last Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-floating mb-4">
                            <input type="name" class="form-control" id="floatingInput" placeholder="name"
                                style="width:430px; padding-top:30px; font-size:15px">
                            <label for="floatingInput">Father's Name</label>
                        </div>




                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="date" class="form-control" id="floatingInput"
                                            placeholder="date of birth"
                                            style="width:200px; padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Date of birth</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <select class="form-select" id="floatingSelect"
                                            aria-label="Floating label select example"
                                            style=" font-size:11px; width:200px; padding-top:16%; font-size:15px">

                                            <option value="Male" style="font-size: 15px">Male</option>
                                            <option value="Female" style="font-size: 15px">Female</option>

                                        </select>
                                        <label for="floatingSelect">Gender</label>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="name" class="form-control" id="floatingInput"
                                            placeholder="Aadhar no"
                                            style="width: 200px;padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Aadhar Number</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="PAN Number" class="form-control" id="floatingInput"
                                            placeholder="PAN Number"
                                            style="width: 200px;padding-top:16%; font-size:15px">
                                        <label for="floatingInput">PAN Number</label>
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
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Flat no/Bulding Name"
                                    style="width: 430px;padding-top:30px; font-size:15px">
                                <label for="floatingInput">Flat no/Bulding Name</label>
                            </div>
                        </div>


                        <div class="form-floating mb-4">
                            <input type="pincode" class="form-control" id="floatingInput"
                                placeholder="Locality/Area/Street"
                                style="width:430px; padding-top:30px; font-size:15px">
                            <label for="floatingInput">Locality/Area/Street</label>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="City"
                                            style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">City</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="state"
                                            style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">State</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="form-floating  mb-4">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Pincode"
                                    style="width: 200px;padding-top:30px; font-size:15px">
                                <label for="floatingInput">Pincode</label>
                            </div>
                        </div>

                        </br>
                        <h6 style="font-size:15px;font-weight:700"> Permanent Address</h6>
                        </br>


                        <div>
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Flat no/Bulding Name"
                                    style="width: 430px;padding-top:30px; font-size:15px">
                                <label for="floatingInput">Flat no/Bulding Name</label>
                            </div>
                        </div>





                        <div class="form-floating mb-4">
                            <input type="pincode" class="form-control" id="floatingInput"
                                placeholder="Locality/Area/Street" style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Locality/Area/Street</label>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="City"
                                            style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">City</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="state"
                                            style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">State</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="form-floating  mb-4">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Pincode"
                                    style="width: 200px;padding-top:30px; font-size:15px">
                                <label for="floatingInput">Pincode</label>
                            </div>
                        </div>

                        <br>
                        <h1 style="font-size:20px;font-weight:700">Contact Info</h1>
                        <br>
                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="Mobile number" class="form-control" id="floatingInput"
                                            placeholder="Mobile no" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Mobile Number</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="Alternate Number" class="form-control" id="floatingInput"
                                            placeholder="Alternate Number" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Alternate Number</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="Email" class="form-control" id="floatingInput" placeholder="Email"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Email</label>
                        </div>

                        <br><br>

                        <div class="">
                            <a href="#" class="btn btn-next width-50 ml-auto"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:200px;margin-right:5%">Next</a>
                        </div>

                    </div>




                    <div class="form-step">

                        <h1 style="font-size:20px;font-weight:700">Bank info</h1>

                        <br>
                        <h6 style="font-size:15px;font-weight:700">Bank Details 1</h6>
                        <br>

                        <div class="form-floating mb-4">
                            <input type="name" class="form-control" id="floatingInput" placeholder="name"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Account Holder Name</label>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="Account Number" class="form-control" id="floatingInput"
                                            placeholder="Account Number" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Account Number</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="IFSC Code" class="form-control" id="floatingInput"
                                            placeholder="IFSC Code" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">IFSC Code</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Bank Name" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Bank Name</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="Branch Name" class="form-control" id="floatingInput"
                                            placeholder="Branch Name" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Branch Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br>
                        <h6 style="font-size:15px;font-weight:700">Bank Details 2</h6>
                        <br>

                        <div class="form-floating mb-4">
                            <input type="name" class="form-control" id="floatingInput" placeholder="name"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Account Holder Name</label>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="Account Number" class="form-control" id="floatingInput"
                                            placeholder="Account Number" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Account Number</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="IFSC Code" class="form-control" id="floatingInput"
                                            placeholder="IFSC Code" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">IFSC Code</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Bank Name" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Bank Name</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-floating  mb-4">
                                        <input type="Branch Name" class="form-control" id="floatingInput"
                                            placeholder="Branch Name" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Branch Name</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:200px;">Previous</a>
                            <a href="#" class="btn btn-next"
                                style="background-color: rgb(101, 89, 89); color:white; font-weight:600; font-size:17px;width:200px;margin-left:25%">Next</a>
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
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Work Mobikle Num" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Work Mobile Num</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="email" class="form-control" id="floatingInput"
                                            placeholder="Work Email" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Work Email</label>
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
                                        <input type="date" class="form-control" id="floatingInput"
                                            placeholder="Hired Date"
                                            style="width:200px; padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Hired Date</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="Employee Id" class="form-control" id="floatingInput"
                                            placeholder="Employee Id" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Employee Id</label>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <div style="display:flex;">
                            <div class="row">
                                <div class="col">
                                    <div class="form-floating mb-4">
                                        <input type="Designation" class="form-control" id="floatingInput"
                                            placeholder="Designation" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Designation</label>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-floating mb-3">
                                        <input type="Department" class="form-control" id="floatingInput"
                                            placeholder="Department" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Department</label>
                                    </div>
                                </div>



                            </div>
                        </div>

                        <br><br>

                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:200px;">Previous</a>
                            <a href="#" class="btn btn-next"
                                style="background-color: rgb(101, 89, 89); color:white; font-weight:600; font-size:17px;width:200px;margin-left:25%">Next</a>
                        </div>
                    </div>

                    <div class="form-step">

                        <h1 style="font-size:15px;font-weight:700">Payroll info</h1>

                        <br>
                        <div style="display:flex;">
                            <div class="row">

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="text" class="form-control" id="floatingInput" placeholder=" CTC"
                                            style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">CTC*</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="UAN"
                                            style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">UAN*</label>
                                    </div>
                                </div>

                            </div>

                        </div>

<br><br>


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
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Basic Salary" style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">Basic Salary*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="HRA" style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">HRA*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div style="display:flex;">
                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder=" Conveyance" style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">Conveyance*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Medical Allowance"
                                                    style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">Medical Allowance*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class=" form-floating mb-4">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="Special Allowance"
                                        style="width:430px;padding-top:30px; font-size:15px">
                                    <label for="floatingInput">Special Allowance*</label>
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
                                                <input type="Proffesional Tax*" class="form-control" id="floatingInput"
                                                    placeholder="Proffesional Tax*"
                                                    style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">Proffesional Tax*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="TDS" style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">TDS*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div style="display:flex;">
                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="TDS on Bonus" style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">TDS On Bonus*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Food Vouchers" style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">Food Vouchers*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div style="display:flex;">

                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="EPF" style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">EPF*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Loans/Advances Deductions"
                                                    style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">Loan Deductions*</label>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div style="display:flex;">
                                    <div class="row">

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="Other Deductions"
                                                    style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">Other Deductions*</label>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class=" form-floating mb-4">
                                                <input type="text" class="form-control" id="floatingInput"
                                                    placeholder="ESI" style="padding-top:16%; font-size:15px">
                                                <label for="floatingInput">ESI*</label>
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
                                        <input type="text" class="form-control" id="floatingInput"
                                            placeholder="Gross Pay" style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Gross Pay*</label>
                                    </div>
                                </div>

                                <div class="col">
                                    <div class=" form-floating mb-4">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Net Pay"
                                            style="padding-top:16%; font-size:15px">
                                        <label for="floatingInput">Net Pay*</label>
                                    </div>
                                </div>

                            </div>
                        </div>



                        <br>
                        <br>




                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:200px;">Previous</a>
                            <a href="#" class="btn btn-next"
                                style="background-color: rgb(101, 89, 89); color:white; font-weight:600; font-size:17px;width:200px;margin-left:25%">Next</a>
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
                            <input type="text" class="form-control" id="floatingInput"
                                placeholder="Deductions under Pension Scheme of Insurance"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Deductions under Pension Scheme of Insurance*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Deductions Under New Pension Scheme-NPS*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Deductions Under New Pension Scheme-NPS*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Nsc*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Nsc*</label>
                        </div>
                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="PPF*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">PPF*</label>
                        </div>
                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Infra Structure Bond*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Infra Structure Bond*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Children Education*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Children Education*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Housing Loan Principle repayment and Interest*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Housing Loan Principle repayment and Interest*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Insurance Premium*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Insurance Premium*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Others(MF,ULIP)*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Others(MF,ULIP)*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="EPF & Voluntary PF*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">EPF & Voluntary PF*</label>
                        </div>
<br>
                        <h6 style="font-size:15px;font-weight:700">Under Section 80 D</h6>
                        <br>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Medical Insurance Premium-Self*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Medical Insurance Premium-Self*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Medical Insurance Premium-parents(dependents)*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Medical Insurance Premium-parents(dependents)*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Medical for disable dependents*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Medical for disable dependents*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Medical expenditure for specifies diseases*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Medical expenditure for specifies diseases*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Deferred Annuity*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Deferred Annuity*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Other Mscl.Sections*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Other Mscl.Sections*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Higher Education Loan Interest Repayment[Sec 80E]*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Higher Education Loan Interest Repayment[Sec 80E]*</label>
                        </div>

                        <div class=" form-floating mb-4">
                            <input type="text" class="form-control" id="floatingInput" placeholder="Rent Deductions[Sec 80GG] only if HRA is not received*"
                                style="width:430px;padding-top:30px; font-size:15px">
                            <label for="floatingInput">Rent Deductions[Sec 80GG] only if HRA is not received*</label>
                        </div>
                        <br><br><br>
                        <div style="display:flex">
                            <h6 style="font-size:15px;font-weight:700">Total (Savings of Tax Rebate) =</h6>
                            <div class=" form-floating mb-4">
                                <input type="text" class="form-control" id="floatingInput" placeholder=""
                                    style="width:100px;padding-top:30px; font-size:15px;margin-left:5%">

                            </div>

                        </div>
<br><br>

                        <div class="btns-group">
                            <a href="#" class="btn btn-prev"
                                style="background-color: rgb(153, 153, 217); color:white; font-weight:600; font-size:17px;width:200px">Previous</a>
                            <a href="contract" class="btn"
                                style="background-color: rgb(101, 89, 89); color:white; font-weight:600; font-size:17px;width:200px;margin-left:25%">
                                Submit
                            </a>
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
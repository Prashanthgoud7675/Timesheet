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

    <title>XSILICA HRMS</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body style="background-color: whitesmoke">
<div class="main_container" >

<div class="row">
    <div class="col-lg-12 margin-tb" >
        <div >
            <h2 style="margin-left:5%">Add Employe</h2>
        </div>
        <div >
            <a class="btn btn-primary" href="{{ route('filter') }}" style="margin-left:5%"> Back</a>
         
        </div>
    </div>
</div>
<br>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Warning!</strong> Please check input field code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-md-3">
</div>
<div class="col-md-5"  style="background-color: white; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); border-radius:10px">

<div class=" flex justify-center">

<form action="{{ route('employe.store') }}" method="POST">
    @csrf
<br><br>
    
          <div class="form-floating mb-4" style="margin-left:5%">
                            <input type="name" class="form-control" id="First_Name" placeholder="First Name" name="First_Name"
                                style="width:330px; padding-top:30px; font-size:15px">
                            <label for="father">First Name</label>
                        </div>

                        <div class="form-floating mb-4" style="margin-left:5%">
                            <input type="text" class="form-control" id="Last_Name" placeholder="LastName" name="Last_Name"
                                style="width:330px; padding-top:30px; font-size:15px">
                            <label for="Last_Name"> Last Name</label>
                        </div>
                        <div class="form-floating mb-4" style="margin-left:5%">
                            <input type="text" class="form-control" id="Company_Name" placeholder="Company Name" name="Company_Name"
                                style="width:330px; padding-top:30px; font-size:15px">
                            <label for="Company_Name">Company Name </label>
                        </div>
                        <div class="form-floating mb-4" style="margin-left:5%">
                            <input type="text" class="form-control" id="Registration" placeholder="Registration" name="Registration"
                                style="width:330px; padding-top:30px; font-size:15px">
                            <label for="Registration"> Registration</label>
                        </div>
                        <div class="form-floating mb-4" style="margin-left:5%">
                            <input type="text" class="form-control" id="Mobile_Number" placeholder="Mobile_Number" name="Mobile_Number"
                                style="width:330px; padding-top:30px; font-size:15px">
                            <label for="Mobile_Number">Mobile Number </label>
                        </div>
                        <div class="form-floating mb-4" style="margin-left:5%">
                            <input type="text" class="form-control" id="Email" placeholder="Email" name="Email"
                                style="width:330px; padding-top:30px; font-size:15px">
                            <label for="Email">Email </label>
                        </div>
                        <div class="form-floating mb-4" style="margin-left:5%">
                            <input type="text" class="form-control" id="employment_type" placeholder="employment_type" name="employment_type"
                                style="width:330px; padding-top:30px; font-size:15px">
                            <label for="employment_type">Employment Type </label>
                        </div>
                        <div class="form-floating mb-4" style="margin-left:5%">
                            <input type="text" class="form-control" id="Status" placeholder="Status" name="Status"
                                style="width:330px; padding-top:30px; font-size:15px">
                            <label for="Status"> Status</label>
                        </div>
                        <div class="form-floating mb-4" style="margin-left:5%">
                            <input type="text" class="form-control" id="company_id" placeholder="company_id" name="company_id"
                                style="width:330px; padding-top:30px; font-size:15px">
                            <label for="company_id"> company Code</label>
                        </div>
          <br>
          <button type="submit" class="btn btn-primary" style="margin-left:5%">Add</button>
          <br> <br> <br>
</form>
</div>
</div>
</div>

</body>
</html>
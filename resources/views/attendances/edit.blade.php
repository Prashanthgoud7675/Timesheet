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
<div class="main_container">

<div class="row">
    <div class="col-lg-12 " style="margin-left:7%">
       
        <div >
            <a class="btn btn-primary" href="{{ route('admin') }}"> Back</a>
        </div>
    </div>
</div>

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
<div class="col-md-6" style="background-color: white; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); border-radius:10px">
<div class=" flex justify-center">

<form action="{{ route('attendances.update',$attendance->id) }}" method="POST">
    @csrf
    @method('PUT')
    <br><br>
    <div class="form-group" style="margin-left:5%">
               <label for="Client_ID">Date</label>
              <input type="text" class="form-control" name="Date" style="width:400px;" value="{{$attendance->Date}}"/>
          </div>
          <div class="form-group" style="margin-left:5%">
              <label for="Branch_Code">Regular</label>
              <input type="text" class="form-control" name="Regular" style="width:400px" id="regular" oninput="timesheet()"  value="{{$attendance->Regular}}"/>
          </div>
          <div class="form-group" style="margin-left:5%">
              <label for="Company_Name">OverTime</label>
              <input type="text" class="form-control" name="Overtime" style="width:400px" id="overtime" oninput="timesheet()"   value="{{$attendance->Overtime}}"/>
          </div>
          <div class="form-group" style="margin-left:5%">
              <label for="Company_Address">Sick</label>
              <input type="text" class="form-control" name="Sick" style="width:400px" id="sick" oninput="timesheet()"   value="{{$attendance->Sick}}"  />
          </div>
          <div class="form-group" style="margin-left:5%">
              <label for="Next_Check_Date">Vacation</label>
              <input type="text" class="form-control" name="Vacation" style="width:400px" id="vacation" oninput="timesheet()"   value="{{$attendance->Vacation}}"/>
          </div>
          <div class="form-group" style="margin-left:5%">
              <label for="Status">Holiday</label>
              <input type="text" class="form-control" name="Holiday" style="width:400px" id="holiday" oninput="timesheet()"   value="{{$attendance->Holiday}}"/>
          </div>
          <div class="form-group" style="margin-left:5%">
            <label for="Status">Unpaid</label>
            <input type="text" class="form-control" name="Unpaid" style="width:400px" id="unpaid" oninput="timesheet()"   value="{{$attendance->Unpaid}}"/>
        </div>
        <div class="form-group" style="margin-left:5%">
            <label for="Status">Other</label>
            <input type="text" class="form-control" name="other" style="width:400px" id="other" oninput="timesheet()"   value="{{$attendance->other}}"/>
        </div>
        <div class="form-group" style="margin-left:5%">
            <label for="Status">Total</label>
            <input type="text" class="form-control" name="Total" style="width:400px" id="total" value="{{$attendance->Total}}"/>
        </div>
          <br>
          <button type="submit" class="btn btn-primary" style="margin-left:5%">Submit</button>
          <br> <br> <br>
</form>
</div>
</div>
</div>

</body>
</html>

<script>
    function timesheet() {

      var Regular = document.getElementById("regular").value ;
      var Overtime = document.getElementById("overtime").value ;
      var Sick = document.getElementById("sick").value ;
      var Vacation = document.getElementById("vacation").value ;
      var Holiday = document.getElementById("holiday").value ;
      var Unpaid = document.getElementById("unpaid").value ;
      var Other = document.getElementById("other").value ;
 

      document.getElementById("total").value = parseInt(Regular) + parseInt(Overtime) + parseInt(Sick) + parseInt(Vacation) +parseInt(Holiday) + parseInt(Unpaid) + parseInt(Other);
    }
  </script>
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
    
    
            <a class="btn btn-success" href="{{ route('jobs.create') }}" style="margin-top: 3%"> Create new Job</a>

            <br>
            <br>

            @if ($message = Session::get('success_message'))
                <div style="width: 700px; margin-left:350px ">
                    <p>{{ $message }}</p>
                </div>
            @endif

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
                        <th>Accountholder_Name</th>
                        <th>Account Number</th>
                        <th>IFSC Code</th>
                        <th>Bank Name</th>
                        <th>Branch Name</th>
                        <th>Company Accountholder Name</th>
                        <th>Company Account_Number</th>
                        <th>Company IFSC Code</th>
                        <th>Company Bank Name</th>
                        <th>Company Branch Name</th>
                        <th>Work Mobile Number</th>
                        <th>Work Email</th>
                        <th>Hired Date</th>
                        <th>Employe_Id</th>
                        <th>Designation</th>
                        <th>Department</th>
                        <th>Pension</th>
                        <th>New_Pension</th>
                        <th>NSC</th>
                        <th>PPF</th>
                        <th>Infrastructure Bond</th>
                        <th>Children Education</th>
                        <th>House Loan</th>
                        <th>Insurance Premium</th>
                        <th>Others</th>
                        <th>Epfvoluntary PF</th>
                        <th>Medical Insurance Self</th>
                        <th>Medical Insurance Parents</th>
                        <th>Medical for Disable</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th width="250px">Action</th>
                    </tr>
                    @foreach ($data as $i)
                        <tr>

                            <td>{{ $i->id }}</td>
                            <td>{{ $i->JobId }}</td>
                            <td>{{ $i->JobTitle }}</td>
                            <td>{{ $i->JobRole }}</td>
                            <td>{{ $i->Description }}</td>
                            <td>{{ $i->Positions }}</td>
                            <td>{{ $i->Location }}</td>
                            <td>{{ $i->AnnualSalary }}</td>
                            <td>{{ $i->deptshortname }}</td>
                            <td>{{ $i->Active }}</td>
                            <td>{{ $i->CreatedDate }}</td>
                            <td>{{ $i->CreatedBy }}</td>
                            <td><a href="https://xsilica.com">{{ $i->ApplyLink }} </a></td>
                            <td>{{ $i->CloseDate }}</td>
                            <td>
                                <form action="{{ route('jobs.destroy', $i->id) }}" method="POST">





                                    <a class="btn btn-primary"
                                        href="{{ route('jobs.edit', $i->id) }}">Edit</a>




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
    </section>



   

</body>

</html>


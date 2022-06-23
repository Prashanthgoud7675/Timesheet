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

        <form action="{{ route('form.update', $job->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row" >
                <div class=" col-md-12" style="margin-left: 14%">
                    <div style="margin-bottom: 4%">
                        <x-label for="JobId" :value="__('JobId')"  style="font-size: 17px"/>

                        <x-input id="JobId" class="block mt-1  h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobId"
                            value="{{ $job->JobId }}" required autofocus />
                    </div>

                    <div class="mt-4" style="margin-bottom: 4%">
                        <x-label for="JobRole" :value="__('JobRole')" style="font-size: 17px"/>

                        <x-input id="JobRole" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobRole"
                            value="{{ $job->JobRole }}" required />
                    </div>


                    <div class="mt-4" style="margin-bottom: 4%">
                        <x-label for="JobTitle" :value="__('JobTitle')" style="font-size: 17px"/>

                        <x-input id="JobTitle" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="string" name="JobTitle"
                            value="{{ $job->JobTitle }}" required />
                    </div>

                    <div style="margin-bottom: 4%">
                        <x-label for="Description" :value="__('Description')" style="font-size: 17px"/>

                        <x-input id="Description" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Description"
                            value="{{ $job->Description }}" required autofocus />
                    </div>


                    <div class="mt-4" style="margin-bottom: 4%">
                        <x-label for="Positions" :value="__('Positions')" style="font-size: 17px"/>

                        <x-input id="Positions" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger"
                            name="Positions" value="{{ $job->Positions }}" required />
                    </div>
                    <div style="margin-bottom: 4%">
                        <x-label for="Location" :value="__('Location')" style="font-size: 17px"/>

                        <x-input id="Location" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="text" name="Location"
                            value="{{ $job->Location }}" required autofocus />
                    </div>


                    <div class="mt-4" style="margin-bottom: 4%">
                        <x-label for="AnnualSalary" :value="__('AnnualSalary')" style="font-size: 17px"/>

                        <x-input id="AnnualSalary" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger"
                            name="AnnualSalary" value="{{ $job->AnnualSalary }}" required />
                    </div>
                    <div style="margin-bottom: 4%">
                        <x-label for="deptshortname" :value="__('deptshortname')" style="font-size: 17px"/>

                        <x-input id="deptshortname" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="string" name="deptshortname"
                            value="{{ $job->deptshortname }}" required autofocus />
                    </div>


                    <div style="margin-bottom: 4%">
                        <x-label for="Active" :value="__('Active')" style="font-size: 17px"/>

                        <x-input id="Active" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="unsignedBigInteger"
                            name="Active" value="{{ $job->Active }}" required autofocus />
                    </div>


                    <div class="mt-4" style="margin-bottom: 4%">
                        <x-label for="CreatedDate" :value="__('CreatedDate')" style="font-size: 17px"/>

                        <x-input id="CreatedDate" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CreatedDate"
                            value="{{ $job->CreatedDate }}" required />
                    </div>
                    <div style="margin-bottom: 4%">
                        <x-label for="Created_By" :value="__('CreatedBy')" style="font-size: 17px"/>

                        <x-input id="CreatedBy" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="string" name="CreatedBy"
                            value="{{ $job->CreatedBy }}" required autofocus />
                    </div>


                    <div class="mt-4" style="margin-bottom: 4%">
                        <x-label for="Apply_Link" :value="__('ApplyLink')" style="font-size: 17px"/>

                        <x-input id="ApplyLink" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="string" name="ApplyLink"
                            value="{{ $job->ApplyLink }}" required />
                    </div>



                    <div class="mt-4" style="margin-bottom: 4%">
                        <x-label for="CloseDate" :value="__('CloseDate')" style="font-size: 17px"/>

                        <x-input id="CloseDate" class="block mt-1 w-full h-10"
                            style="background-color:rgb(243, 235, 235);width:500px" type="date" name="CloseDate"
                            value="{{ $job->CloseDate }}" required />
                    </div>



                    <div class="flex items-center justify-end mt-4">



                        <input type="submit" value="Save" class="btn btn-success active" style="width: 500px; "></br>
                    </div>
                </div>
            </div>
        </form>
           

    </section>



   

</body>

</html>


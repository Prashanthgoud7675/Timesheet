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


    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />


    <title>Attune Global</title>

    <style>

    </style>
</head>

<body style="background-color: whitesmoke">

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

       

        <div class="col-md-7">
            <div class="table-responsive">
<div class="card" style="width:680px;background-color: rgb(255, 255, 255); border-radius:10px;  box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);padding:10px">
            <h1 style="font-size: 30px; font-weight:700;padding-top:2%">Terrific! We'll send them an invite </h1>

            <h5 style="color: rgb(124, 117, 117); font-size:20px">We just need some basic info to get them started.
            </h5>

            <br>
            <br>


            
            <div style="display: flex">
               
                <div class="mb-4">
                    <label style="margin-left:0%">First Name*</label>
                    <input type="text" name="First Name" id="First Name" placeholder="First Name"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('First Name') border-red-500 @enderror"
                        style="width:300px;border-radius:10px;margin-left:0%">

                    @error('First Name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                

                <div class="mb-4">
                    <label style="margin-left: 8%">Last Name*</label>
                    <input type="text" name="Last Name" id="Last Name" placeholder="Last Name"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Last Name') border-red-500 @enderror"
                        style="width:300px;border-radius:10px;margin-left:7%">

                    @error('Last Name')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div style="display: flex">
                <div class="mb-4">
                    <label style="margin-left:0%">Social Security Number*</label>
                    <input type="text" name="Social Security Number" id="Social Security Number" placeholder="SSN"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Social Security Number') border-red-500 @enderror"
                        style="width:300px;border-radius:10px;margin-left:0%">

                    @error('Social Security Number')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>



                <div class="mb-4">
                    <label style="margin-left: 12%">Confirm Social Secyrity Number*</label>
                    <input type="text" name="Confirm Social Secyrity Number" id="Confirm Social Secyrity Number"
                        placeholder="Confirm Social Secyrity Number"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Confirm Social Secyrity Number') border-red-500 @enderror"
                        style="width:300px;border-radius:10px;margin-left:12%">

                    @error('Confirm Social Secyrity Number')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <div style="display: flex">
                <div class="mb-4">
                    <label style="margin-left:0%">Hire date*</label>
                    <input type="date" name="Hire date" id="Hire date" placeholder="Hire date"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Hire date') border-red-500 @enderror"
                        style="width:300px;border-radius:10px;margin-left:0%;height:35px">

                    @error('Hire date')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label style="margin-left: 10%">Date of birth*</label>
                    <input type="date" name="Date of birth" id="Date of birth" placeholder="Date of birth"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Date of birth') border-red-500 @enderror"
                        style="width:300px;border-radius:10px;margin-left:9%;height:35px">

                    @error('Date of birth')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>



            <div style="display: flex">
                <div class="mb-4">
                    <label style="margin-left:0%">Mobile phone*</label>
                    <input type="text" name="Mobile phone" id="Mobile phone" placeholder="Mobile phone"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Mobile phone') border-red-500 @enderror"
                        style="width:300px;border-radius:10px;margin-left:0%">

                    @error('Mobile phone')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label style="margin-left: 7%">Email Address*</label>
                    <input type="text" name="email" id="email" placeholder="Email Address"
                        class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"
                        style="width:300px;border-radius:10px;margin-left:7%">

                    @error('email')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>

            <br>

            <button class="btn btn-primary active" style="margin-left: 79%; width:120px;font-size:17px;font-weight:600"> <a href="contract_form" style="color:white; text-decoration:none"> Send Invite </a> </button>

            <br>

            <hr style="height: 2px; width:95%; margin-left:2%">

            

            <a href="#" style="text-decoration: none"> <h4 style="margin-left:13%; margin-bottom:3%"> Back </h4></a>
        
        </div>
</div>
        </div>

</div>
    </section>




</body>

</html>
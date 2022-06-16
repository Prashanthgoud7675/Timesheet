<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdn.tailwindcss.com"></script>


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
        <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>


    
    

</head>
<body>

<section style="background-color:#002F6C;">
        <nav class="navbar navbar-expand-lg  navbar-light fixed-top" style="background-color: #002F6C;height:50px">
            <div class="container">
                <a href="#">
                    <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo"
                        height="70px" width="200px" style="margin-left: -10%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
                    style="color:white; background-color:white">
                    <span class="navbar-toggler-icon" style="color:white; background-color:white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu" style="margin-left: 10%;">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item" ght: 200;">

                            <input type="text" name="term" placeholder="Find answers, pages, reports and more" id="term"
                                style="height:40px;width:400px;background-color: whitesmoke;border-radius: 8px;">

                        </li>
                        <br>
                        <br>
                        <li class="nav-item-active " style=" margin-left: 95%">
                            <a> <i class="fa fa-user-circle-o"
                                    style="color: rgb(212, 212, 215); font-size: 35px"></i></a>
                        </li>


                    </ul>
                </div>
            </div>

        </nav>

        <hr style="width: 88%; margin-left: 5%">

        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:3%">
            <option value="Company List">Company List</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
            <option value="Company List">Home</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
            <option value="Company List">Employees</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
            <option value="Company List">Company</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
            <option value="Company List">Reports</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
            <option value="Company List">Taxes</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
            <option value="Company List">Time</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
            <option value="Company List">General Ledger</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
            <option value="Company List">Insurance</option>
        </select>




    </section>
</body>
@yield('content')
</html>
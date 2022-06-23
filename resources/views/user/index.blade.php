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
            <div class="container" style="margin-top:2%">
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
                                style="height:40px;width:400px;background-color: whitesmoke;border-radius: 8px;padding:10px">

                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item-active " style=" margin-left: 45%">
                            <a> <i class="fa fa-user-circle-o"
                                    style="color: rgb(212, 212, 215); font-size: 35px"></i></a>
                        </li>
                            <li class="nav-item dropdown" style="margin-left: 25%">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" >
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" >
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            
                        @endguest

                        
                       


                    </ul>
                </div>
            </div>

        </nav>
<br>
  

        <hr style="width: 88%; margin-left: 5%">

        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:3%">
            <option value="Company List">Company List</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
            <option value="Company List">Home</option>
        </select>

        <a href="employee">
            <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%">
                <option value="Company List"> Employees </option>
            </select>
        </a>

        <br>
    <br>
    <br>


        

    </section>

    
    <div style="background-color:#002F6C">
        
        <div class="row justify-content-center">
            
            <div class="col-md-10">
                <div style="background-color:white;padding:10px;border-radius:10px;display:flex">
                    <i class="bi bi-megaphone" style="font-size:30px;color:#002F6C;margin-top:-1%"></i>
                    <p style="margin-left:5%"> Letting the employee enter their own info saves your time and helps
                        prevent errors</p>
                    <button
                        style="float-right;background-color:#002F6C;color:white;padding:5px;margin-left:30%;border-radius:5px">Try
                        it now</button>
                </div>
            </div>
   

            <br>
            <br>
        </div>
        <div class="row justify-content-center">

            <div class="col-md-10">
                <br>
                <br>
                <div class=" text-center">
                    <h1 style="color:white;font-size:20px;font-weight:700">Good afternoon</h1>

                    <br>
                    <div>
                        <input type="text" name="term" placeholder="Search a report" id="term"
                            style="height:40px;background-color: whitesmoke;border-radius: 20px;width:370px">
                    </div>
                </div>
                <br>
                <div class="flex justify-center">
                    <div style="margin-right:3%">
                        <h1 style="color:white;font-weight:600;"><i class="fa fa-users"
                                style="color:white;border-radius:50%;background-color:#0F0E4B;padding:20px;font-size:15px"></i><br><br>Directory
                        </h1>
                    </div>
                    <div style="margin-right:2%">
                        <h1 style="color:white;font-weight:600;margin-left:-20%"><i class="fa fa-folder"
                                style="color:white;border-radius:50%;background-color:#0F0E4B;padding:20px;font-size:15px"></i><br><br>HR411
                        </h1>
                    </div>
                    <div style="margin-right:1%">
                        <h1 style="color:white;font-weight:600"><i class="fa fa-fire"
                                style="color:white;border-radius:50%;background-color:#0F0E4B;padding:20px;font-size:15px"></i><br><br>Zip<br>Recruiter
                        </h1>
                    </div>
                    <div style="margin-right:2%">
                        <h1 style="color:white;font-weight:600"><i class="fa fa-cloud"
                                style="color:white;border-radius:50%;background-color:#0F0E4B;padding:20px;font-size:15px"></i><br><br>Doc<br>Vault
                        </h1>
                    </div>
                    <div style="margin-right:1%">
                        <h1 style="color:white;font-weight:600"><i class="fa fa-gift"
                                style="color:white;border-radius:50%;background-color:#0F0E4B;padding:20px;font-size:15px"></i><br><br>Exclusive
                            <br>Benefits</h1>
                    </div>
                    <div style="margin-left:1%">
                        <h1 style="color:white;font-weight:600;"><i class="fa fa-pencil"
                                style="color:white;border-radius:50%;background-color:#0F0E4B;padding:20px;font-size:15px"></i><br><br>Edit
                        </h1>
                    </div>

                </div>
                <br><br>
            </div>


        </div>

    </div>



</body>

</html>

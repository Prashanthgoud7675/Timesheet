<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

   
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

<body style="background-color:whitesmoke">

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
        <br>
  

        <hr style="width: 88%; margin-left: 5%">

        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:3%; border:none">
            <option value="Company List">Company List</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%; border:none">
            <option value="Company List">Home</option>
        </select>

        <a href="onboard">
            <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%; border:none">
                <option value="Company List"> Employees </option>
            </select>
        </a>


        <br>
        <br>



    </section>

    <br><br>

    <div class="row justify-content-center">

        <div class="col-md-1">
            <h3>Directory</h3>
        </div>
        
        <div class="col-md-4" >

            

            

            <label for="" style="margin-left: 2%">Sort by: </label>

            <select style="background-color:whitesmoke;  margin-left:6%; width:50%;font-size:20px; font-weight:600; border-radius:8px;padding-top:8px; padding-bottom:8px">
              <option value="" >Name</option>
              <option value="" ></option>
          </select>

        </div>

        <div class="col-md-4" >
            <form action="employee " method="GET" role="search">
                <div  style="padding-top:2%; display:flex;">
                   
                  <label for="search" style="margin-left: 2%">Search: </label>
  
                  <input type="text" name="term" placeholder="Search People" id="term"
                  style="height:40px;background-color: whitesmoke;border-radius: 8px; margin-left:6%; width:50%">
  
                  <h1 style="margin-left:4%;color:#002F6C;margin-top:-1%"><i class="bi bi-filter" style="font-size:20px">Filter</i>
                  </h1>
  
                </div>
                
                </form>
        </div>

    </div>





    <div class="row justify-content-center">

        <div class="col-md-10">

            
           <div>
        



            <div class="table-responsive">
               
        
                <br><br> <br><br>
                <table class="table"
                    style="background-color:white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
                    <thead>
                        <tr>
                            <th scope="col" style="padding:10px">Name</th>
                            <th scope="col" style="padding:10px">Registration</th>
                            <th scope="col" style="padding:10px">Paperless</th>
                            <th scope="col" style="padding:10px">Contact info</th>
                            <th scope="col" style="padding:10px">Employment type</th>
                            <th scope="col" style="padding:10px">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @forelse ($data as $i)
                  
               
                        <tr>
                         
                          <td style="font-size:17px; color:rgb(133, 125, 125)">{{$i->Last_Name}},{{$i->First_Name}}</td>
                          <td style="font-size:17px; color:rgb(133, 125, 125)">{{$i->Registration}}</td>
                          <td style=" font-size:17px; color:rgb(133, 125, 125)"> {{$i->Paperless}}</td>
                          <td style="font-size:17px; color:rgb(133, 125, 125)">{{$i->contact_info}}</td>
                          <td style="font-size:17px; color:rgb(133, 125, 125)">{{$i->employment_type}}</td>
                          <td style="font-size:17px; color:rgb(133, 125, 125)">{{$i->Status}}</td>
                        </tr>
                        @empty
        
        
                        <p style="margin-left: 10%; font-size:17px; font-weight:600; "> No Data Found</p>
        
                        @endforelse
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

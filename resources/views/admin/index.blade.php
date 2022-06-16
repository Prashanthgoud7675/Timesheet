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

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>


    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />

<script src="jQuery/jquery-1.11.2.min.js"></script>
    <title>Attune Global</title>

    <style>
.odd{
  background:#CCFFEB;
}
.even{
  background:#99FFD6;
}
    </style>
</head>

<body style="background-color: whitesmoke">

    <section style="background-color:#002F6C;">
        <nav class="navbar navbar-expand-lg  navbar-light fixed-top" style="background-color: #002F6C;height:50px">
            <div class="container" style="margin-top:2%">
                <a href="#">
                    <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo"
                        height="70px" width="200px" style="margin-left: -40%">
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
                        <li class="nav-item-active " style=" margin-left: 35%">
                            <a> <i class="fa fa-user-circle-o"
                                    style="color: rgb(212, 212, 215); font-size: 35px"></i></a>
                        </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:white;">
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown" >
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" >
                                        @csrf
                                    </form>
                                </div>
                            </li>

                            
                        @endguest

                        <br>
                        <br>
                       


                    </ul>
                </div>
            </div>

        </nav>


        
        <hr style="width: 88%; margin-left: 5%;">

        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:13%">
            <option value="Company List">Company List</option>
        </select>




    </section>

    <br>
    <br>


    <section>
        <div class="col-md-1"></div>
        <div class="col-md-10"
            style="background-color: white; border-radius:10px;  box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
            <h3 class="breadcrumb" style="background-color: #1956a4; font-weight:600; color:white">Company List <i
                    class="fa fa-question-circle"
                    style="font-size: 15px; color: rgb(212, 212, 215); margin-left:80%"></i></h3>

            <br>
            <br>
            <div style="background-color:  rgb(212, 212, 215); margin-bottom:3%">
              <div  style="padding-top:2%; display:flex"> 
                <label for="" style="margin-left: 2%">Search: </label>

                <input type="text" name="term" placeholder="" id="term"
                style="height:40px;width:400px;background-color: whitesmoke;border-radius: 8px; margin-left:6%; width:30%">

                <h5 style="margin-left:3%;"> Enter all, or a portion, of the company name and then click find</h5>

              </div>
              <br>
              <br>

              <div style="display:flex;">

                <label for="" style="margin-left: 2%">Sort by: </label>

                <select style="background-color:whitesmoke;  margin-left:6%; width:30%;font-size:15px; font-weight:600; border-radius:8px;padding-top:8px; padding-bottom:8px">
                  <option value="Company Name A-Z" >Attune Global Inc</option>
                  <option value="Company Name A-Z" >Dynamic software Consultants</option>
              </select>

              </div>

              <br>
              <br>

              <button type="button" class="btn btn-success " style="font-size: 15px; margin-left:80%; width:12%; margin-bottom:2%">Find</button>
              

            </div>  
            
            
            <table class="table">
              <thead>
                <tr>
                
                  <th scope="col">Client ID</th>
                  <th scope="col">Branch/ Co Code</th>
                  <th scope="col">Company Name</th>
                  <th scope="col">Company Address</th>
                  <th scope="col">Next Check Date</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                 
                  <td style="font-size:17px; color:rgb(133, 125, 125)">23688963</td>
                  <td style="font-size:17px; color:rgb(133, 125, 125)">K7/D9j</td>
                  <td style="color: rgb(49, 143, 243); font-size:17px"> <a href="dashboard"> Attune Global Inc </a> </td>
                  <td style="font-size:17px; color:rgb(133, 125, 125)">8840 cypress Waters Blvd, Coppell, TX 75019</td>
                  <td style="font-size:17px; color:rgb(133, 125, 125)">5/27/2022</td>
                  <td style="font-size:17px; color:rgb(133, 125, 125)">Active</td>
                </tr>
                <tr>
                  
                  <td style="font-size:17px; color:rgb(133, 125, 125)">20463161</td>
                  <td style="font-size:17px; color:rgb(133, 125, 125)">RN/MJK</td>
                  <td style="color: rgb(49, 143, 243); font-size:17px">Dynamic Software Consultants</td>
                  <td style="font-size:17px; color:rgb(133, 125, 125)">928 S Beltline Rd Ste 100, Coppell, TX 75019</td>
                  <td style="font-size:17px; color:rgb(133, 125, 125)">5/27/2022</td>
                  <td style="font-size:17px; color:rgb(133, 125, 125);">Active</td>
                
                </tr>
               
              </tbody>
            </table>
            <br>
            <br>


        </div>
    </section>




</body>
<script>
  $(document).ready(function() {
    function addRemoveClass(theRows){
     theRows.removeClass("odd even");
     theRows.filter(":odd").addClass("odd");
     theRows.filter(":even").addClass("even");
    }
    var rows = $("table#myTable tr:not(:first-child)");
    addRemoveClass(rows);
    $("#selectedField").on("change",function(){
      var selected = this.value;
      if(selected != "All"){
        rows.filter("[position="+selected+"]").show();
        rows.not("[position="+selected+"]").hide();
        var visibleRows = rows.filter("[position="+selected+"]");
        addRemoveClass(visibleRows);
      }else{
        rows.show();
        addRemoveClass(rows);yyy
      }
    });
  });
  </script>

</html>
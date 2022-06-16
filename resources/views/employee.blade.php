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
        <nav class="navbar navbar-expand-lg  navbar-light fixed-top" style="background-color: #002F6C;">
            <div class="container">
                <a href="#">
                    <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo"
                        height="70px" width="200px" style="margin-left: 0%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
                    style="color:white; background-color:white">
                    <span class="navbar-toggler-icon" style="color:white; background-color:white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu" style="margin-left: 7%;">
                    <ul class="navbar-nav">
                        <li class="nav-item">

                            <input type="text" name="term" placeholder="Find answers, pages, reports and more" id="term"
                                style="height:40px;width:320px;background-color: whitesmoke;border-radius: 8px; margin-top:4%">

                        </li>
                    </ul>


                    <ul class="nav navbar-nav navbar-right">
                        <li class="nav-item-active ">
                            <a> <i class="fa fa-user-circle-o "
                                    style="color: rgb(212, 212, 215); font-size: 35px"></i></a>
                        </li>


                    </ul>
                </div>
            </div>

        </nav>

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


        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%; border:none">
            <option value="Company List">Company</option>
        </select>


        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%; border:none">
            <option value="Company List">Reports</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%; border:none">
            <option value="Company List">Taxes</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%; border:none">
            <option value="Company List">Time</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%; border:none">
            <option value="Company List">General Ledger</option>
        </select>
        <select style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:2%; border:none">
            <option value="Company List">Insurance</option>
        </select>




    </section>

    <br><br>

    <div class="row justify-content-center">

        <div class="col-md-1">
            <h3>Directory</h3>
        </div>
        
        <div class="col-md-4" >

            

            

            <label for="" style="margin-left: 2%">Sort by: </label>

            <select style="background-color:whitesmoke;  margin-left:6%; width:50%;font-size:20px; font-weight:600; border-radius:8px;padding-top:8px; padding-bottom:8px">
              <option value="" >Last Name</option>
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
                        <tr>

                            <td style="padding:10px"><span
                                    style="background-color:#002F6C;border-radius:50%;padding:10px;margin-right:5%;color:white;margin-top:3%">MB</span>Beerpur,Mamatha
                            </td>
                            <td style="padding:10px">Not Registered</td>
                            <td style="padding:10px">payroll<br>W-2</td>
                            <td style="padding:10px">mamatha@gmail.com</td>
                            <td style="padding:10px">Employee<br>Full|time|salary</td>
                            <td style="padding:10px"><span
                                    style="background-color:#C8E5D6;border-radius:30%;padding:10px;color:black;">Active</span>
                            </td>
                            <td style="padding:10px"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
                        </tr>
                        <tr>

                            <td style="padding:10px"><span
                                    style="background-color:#002F6C;border-radius:50%;padding:10px;margin-right:5%;color:white">CT</span>Chandupatla,Tejaswini
                            </td>
                            <td style="padding:10px">Registered</td>
                            <td style="padding:10px">payroll<br>W-2</td>
                            <td style="padding:10px">tejaswi@gmail.com</td>
                            <td style="padding:10px">Employee<br>Full|time|salary</td>
                            <td style="padding:10px"><span
                                    style="background-color:#C8E5D6;border-radius:30%;padding:10px;color:black;">Active</span>
                            </td>
                            <td style="padding:10px"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
                        </tr>
                        <tr>

                            <td style="padding:10px"><span
                                    style="background-color:#002F6C;border-radius:50%;padding:10px;margin-right:5%;color:white">GD</span>Gaddam,Dhiraj
                                kumar</td>
                            <td style="padding:10px">Not registered</td>
                            <td style="padding:10px">payroll<br>w-3</td>
                            <td style="padding:10px">deeraj@gmail.com</td>
                            <td style="padding:10px">Employee<br>Full|time|salary</td>
                            <td style="padding:10px"><span
                                    style="background-color:#C8E5D6;border-radius:30%;padding:10px;color:black;">Active</span>
                            </td>
                            <td style="padding:10px"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
                        </tr>
                        <tr>

                            <td style="padding:10px"><span
                                    style="background-color:#002F6C;border-radius:50%;padding:10px;margin-right:5%;color:white">KS</span>Kachapuram,Sai
                                krishna</td>
                            <td style="padding:10px">Registered</td>
                            <td style="padding:10px">payroll<br>W-2</td>
                            <td style="padding:10px">saikrishna@gmail.com</td>
                            <td style="padding:10px">Employee<br>Full|time|salary</td>
                            <td style="padding:10px"><span
                                    style="background-color:#C8E5D6;border-radius:30%;padding:10px;color:black;">Active</span>
                            </td>
                            <td style="padding:10px"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
                        </tr>
                        <tr>

                            <td style="padding:10px"><span
                                    style="background-color:#002F6C;border-radius:50%;padding:10px;margin-right:5%;color:white">RN</span>Rathore,Nitu
                            </td>
                            <td style="padding:10px">Registered</td>
                            <td style="padding:10px">payroll</td>
                            <td style="padding:10px">niturathod@gmail.com</td>
                            <td style="padding:10px">Employee</td>
                            <td style="padding:10px"><span
                                    style="background-color:#C8E5D6;border-radius:30%;padding:10px;color:black;">Active</span>
                            </td>
                            <td style="padding:10px"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</body>

</html>

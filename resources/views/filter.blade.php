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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <title>Attune Global</title>

    <style>

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
                                    style="color: rgb(212, 212, 215); font-size: 35px; color: rgb(80, 77, 77)"></i></a>
                        </li>
                            <li class="nav-item dropdown" >
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:black;">
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

<br>
        
        <hr style="width: 88%; margin-left: 5%;">

 
</section>
<br>

<div class="container" >
<div class="row justify-content-center">
    
    <div class="col-md-10"style="background-color:  rgb(212, 212, 215);border-radius:10px;padding-top:2%;padding-bottom:2%;">
    <form action="{{ ('filter') }}" method="GET"  >
<div class="flex" style="display:flex">
                        <label style="margin-top:1%">Select:</label>
                        <select name="category" id="category" class="form-control" 
                                style=" height:42px;width:200px;margin-left:10px">
                                <option value=""> Company Name</option>
                                @if(count($categories)>0)
                            @foreach($categories as $category)
                            <option value="{{ $category['Company_Code'] }}">
                                {{ $category->Company_Name }}
                            </option>
                                    @endforeach
                            @endif
                            </select>
                            </div>
                    </form>

    </div>
</div>

                   <br><br><br>

        <div class="row justify-content-center">
            <div class="col-md-10" >
                <div class="card">
                    

                    <div class="table-responsive">


                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company Name</th>
                                <th>Registration</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Employement Type</th>
                                <th>Status</th>
                                <th>Company Code</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @if(count($products)>0)
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product['id']}}</td>
                                <td>{{$product['First_Name']}}</td>
                                <td>{{$product['Last_Name']}}</td>
                                <td>{{$product['Company_Name']}}</td>
                                <td>{{$product['Registration']}}</td>
                                <td>{{$product['Mobile_Number']}}</td>
                                <td>{{$product['Email']}}</td>
                                <td>{{$product['employment_type']}}</td>
                                <td>{{$product['Status']}}</td>
                                <td>{{$product['company_id']}}</td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    <script>
    $(document).ready(function() {

        $("#category").on('change', function() {
            var category = $(this).val();
            $.ajax({
                url: "{{route('filter')}}",
                type: "GET",
                data: {
                    'category': category
                },
                success: function(data) {
                    var products = data.products;
                    var html = '';
                    if (products.length > 0) {
                        for (let i = 0; i < products.length; i++) {
                            html += '<tr>\
                                             <td>' + (i + 1) + '</td>\
                                             <td>' + products[i]['First_Name'] + '</td>\
                                             <td>' + products[i]['Last_Name'] + '</td>\
                                             <td>' + products[i]['Company_Name'] + '</td>\
                                             <td>' + products[i]['Registration'] + '</td>\
                                             <td>' + products[i]['Paperless'] + '</td>\
                                             <td>' + products[i]['contact_info'] + '</td>\
                                             <td>' + products[i]['employment_type'] + '</td>\
                                             <td>' + products[i]['Status'] + '</td>\
                                            <td>' + products[i]['company_id'] + '</td>\
                                            </tr>';
                        }


                    } 
                    else {
                        html += '<tr>\
                         <td>No data</td>\
                         </tr>';
                    }
                    $("#tbody").html(html);
                }
            });
        });
    });
    </script>





</body>

</html>
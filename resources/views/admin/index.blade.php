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
        <nav class="navbar navbar-expand-lg  navbar-light fixed-top" style="background-color: #002F6C;">
            <div class="container">
                <a href="#">
                    <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo"
                        height="70px" width="200px" style="margin-left: -50%">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
                    style="color:white; background-color:white">
                    <span class="navbar-toggler-icon" style="color:white; background-color:white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu" style="margin-left: 0%;">
                    <ul class="navbar-nav">
                        <li class="nav-item">

                            <input type="text" name="term" placeholder="Find answers, pages, reports and more"
                                id="term"
                                style="height:40px;width:330px;background-color: whitesmoke;border-radius: 8px; margin-top:4%">

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

        <select
            style="background-color:#002F6C; color:white;margin-top:2%; margin-bottom:2%; margin-left:13%; border:none">
            <option value="Company List">Company List</option>
        </select>




    </section>

    <br>
    <br>


    <section>
        <div class="row justify-content-center">
            <div class="col-md-10"
                style="background-color: white; border-radius:10px;  box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
                <h3 class="breadcrumb" style="background-color: #1956a4; font-weight:600; color:white">Company List <i
                        class="fa fa-question-circle"
                        style="font-size: 25px; color: rgb(212, 212, 215); margin-left:80%"></i></h3>

                <br>
                <br>
                <div style="background-color:  rgb(212, 212, 215); margin-bottom:3%">
                   
                    <br>
                    <br>

                    <div style="display:flex;">


                        <label for="sort by" style="margin-left: 2%">Sort by: </label>

                        <div style="margin-left: 6%; width:30%;">
                            <select name="filter_country" id="filter_country" class="form-control" 
                                style=" height:42px">
                                <option value="">Select Company_Name</option>
                                @foreach ($company_name as $i)
                                    <option value="{{ $i->Company_Name }}">{{ $i->Company_Name }}</option>
                                @endforeach
                            </select>

                            
                        </div>

                        <h5 style="margin-left:3%; font-weight:600"> Select the company name and then click find </h5>

                    </div>

                    <br>
                    <br>

                    <button type="button" name="filter" id="filter" class="btn btn-success "
                        style="font-size: 20px; margin-left:80%; width:12%; margin-bottom:2%">Find</button>


                </div>
                <br>

                <div class="table-responsive">
                    <table id="customer_data" class="table table-bordered table-striped">
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


                    </table>
                </div>



                <br>
                <br>


            </div>
        </div>
    </section>






</body>

</html>


<script>
    $(document).ready(function() {

        fill_datatable();

        function fill_datatable(filter_country = '') {
            var dataTable = $('#customer_data').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('customsearch.index') }}",
                    data: {
                        filter_country: filter_country
                    }
                },
                columns: [{
                        data: 'Client_ID',
                        name: 'CustomerName'
                    },
                    {
                        data: 'Branch_Code',
                        name: 'Gender'
                    },
                    {
                        data: 'Company_Name',
                        name: 'Address'
                    },
                    {
                        data: 'Company_Address',
                        name: 'City'
                    },
                    {
                        data: 'Next_Check_Date',
                        name: 'PostalCode'
                    },
                    {
                        data: 'Status',
                        name: 'Country'
                    }
                ]
            });
        }

        $('#filter').click(function() {
            var filter_country = $('#filter_country').val();


            if (filter_country != '') {
                $('#customer_data').DataTable().destroy();
                fill_datatable(filter_country);
            }

        });



    });
</script>

<html>
 <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laravel 5.8 - Individual Column Search in Datatables using Ajax</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 </head>
 <body>
  <div class="container">    
     <br />
     <h3 align="center">Laravel 5.8 - Custom Search in Datatables using Ajax</h3>
     <br />
            <br />
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="filter_country" id="filter_country" class="form-control" required>
                            <option value="">Select Company_Name</option>
                            @foreach($company_name as $i)

                            <option value="{{ $i->Company_Name }}">{{ $i->Company_Name }}</option>

                            @endforeach
                        </select>
                    </div>
        
                    
                    <div class="form-group" align="center">
                        <button type="button" name="filter" id="filter" class="btn btn-info">Filter</button>

                       
                    </div>
                </div>
                
            </div>
            <br />
   <div class="table-responsive">
    <table id="customer_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Customer Name</th>
                            <th>Gender</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>Postal Code</th>
                            <th>Country</th>
                        </tr>
                    </thead>

                   
                </table>
   </div>
            <br />
            <br />
  </div>
 </body>
</html>

<script>
$(document).ready(function(){

    fill_datatable();

    function fill_datatable(filter_country = '')
    {
        var dataTable = $('#customer_data').DataTable({
            processing: true,
            serverSide: true,
            ajax:{
                url: "{{ route('customsearch.index') }}",
                data:{filter_country:filter_country}
            },
            columns: [
                {
                    data:'Client_ID',
                    name:'CustomerName'
                },
                {
                    data:'Branch_Code',
                    name:'Gender'
                },
                {
                    data:'Company_Name',
                    name:'Address'
                },
                {
                    data:'Company_Address',
                    name:'City'
                },
                {
                    data:'Next_Check_Date',
                    name:'PostalCode'
                },
                {
                    data:'Status',
                    name:'Country'
                }
            ]
        });
    }

    $('#filter').click(function(){
        var filter_country = $('#filter_country').val();
    

        if(filter_country != '')
        {
            $('#customer_data').DataTable().destroy();
            fill_datatable(filter_country);
        }
        
    });

   

});
</script>
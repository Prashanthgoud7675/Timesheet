<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/start/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Document</title>
    <style>
        .w-5{
            display: inline;
            height: 20px;
            width: 20px;
            
        }
    </style>

    <script>
        $(document).ready(function() {

            var weekStart, weekEnd;

            function completeWeek() {
                window.setTimeout(function() {
                    $(".ui-datepicker-current-day a").addClass("ui-state-active");
                });
            }

            /*
            $("#start").datepicker({
                numberOfMonths: 1,
                changeYear: true,
                changeMonth: true,
                showOtherMonths: true,
                onSelect:function(selectedDate, instance) {
                var dateFormat = "yy/mm/dd";
                $("#start").val($.datepicker);

                }
                
            });

            */


            $("#start").datepicker({
                changeYear: true,
                changeMonth: true,
                showOtherMonths: true,
                selectOtherMonths: true,
                onSelect: function(selectedDate, instance) {


                    var myDate = new Date(selectedDate);


                    weekStart = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate());


                    



                    var dateFormat = "yy/mm/dd";
                    $("#start").val($.datepicker.formatDate(dateFormat, weekStart));
                   
          

                    

                },
                beforeShowDay: function(date) {
                    var cssClass = "";
                    if (date >= weekStart && date <= weekEnd)
                        cssClass = "ui-datepicker-current-day";
                    return [true, cssClass];
                },
                onChangeMonthYear: function() {
                    completeWeek();
                }


            });


            
            $("#end").datepicker({
                changeYear: true,
                changeMonth: true,
                showOtherMonths: true,
                selectOtherMonths: true,
                onSelect: function(selectedDate, instance) {


                    var myDate = new Date(selectedDate);


                    weekEnd = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate());


                    



                    var dateFormat = "yy/mm/dd";
                    $("#end").val($.datepicker.formatDate(dateFormat, weekEnd));
                   
          

                    

                },
                beforeShowDay: function(date) {
                    var cssClass = "";
                    if (date >= weekStart && date <= weekEnd)
                        cssClass = "ui-datepicker-current-day";
                    return [true, cssClass];
                },
                onChangeMonthYear: function() {
                    completeWeek();
                }


            });

            /*

            $("#end").datepicker({
                numberOfMonths: 1,
                changeYear: true,
                changeMonth: true,
                showOtherMonths: true,
                
            });

            */






            $("#weekpicker").datepicker({

                changeYear: true,
                changeMonth: true,
                showOtherMonths: true,
                selectOtherMonths: true,
                onSelect: function(selectedDate, instance) {


                    var myDate = new Date(selectedDate);


                    weekStart = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
                        myDate.getDay());


                    weekEnd = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
                        myDate.getDay() + 6);



                    var dateFormat = "yy/mm/dd";
                    $("#start").val($.datepicker.formatDate(dateFormat, weekStart));
                   
                    $("#end").val($.datepicker.formatDate(dateFormat, weekEnd));

                    completeWeek();

                },
                beforeShowDay: function(date) {
                    var cssClass = "";
                    if (date >= weekStart && date <= weekEnd)
                        cssClass = "ui-datepicker-current-day";
                    return [true, cssClass];
                },
                onChangeMonthYear: function() {
                    completeWeek();
                }


            });

        });
    </script>

</head>
<body>

    <section style="background-color:#002F6C;">

        <div class="container" style="padding-top: 1%; padding-bottom:1%">



            <h1 style="font-size: 20px; color:white; font-weight:600"> <i class="fa fa-close"
                    style="font-size: 20px; color:white; margin-right:1%;"></i> Timesheet Setup</h1>



        </div>

    </section>

    <br><br><br>

    <div style="float: right; margin-top:-2%; margin-right:11%;">


        <div style="display: flex">
            <label for="Name" style="font-size: 18px; font-weight:600; ">Name :</label>
            <h6 style="margin-top:1%;">{{ Auth::user()->name }}</h6>
        </div>

        <div style="display: flex">
            <label for="EmpId" style="font-size: 18px; font-weight:600;margin-top:3%; ">Employe Id :</label>
            <h6 style="margin-left:3%;margin-top:5%;">{{ Auth::user()->empid }}</h6>
        </div>

    </div>
    <br><br>
    <br>

    <form action="{{url('attendances')}}" method="POST">
        @csrf


        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-7">
                <div style="display:flex;">
                    <div class="row ">
                        <div class="col">
                            <div class="form-floating mb-4">
                                <input type="text" class="form-control" id="start"
                                    placeholder="Start Date" name="fromDate"
                                    style= "font-size:15px; height:50px" required>
                                <label for="Start Date">StartDate</label>
                            </div>
                        </div>
        
                        <div class="col">
                            <div class="form-floating  mb-4">
                                <input type="text" class="form-control" id="end"
                                    placeholder="End Date" name="toDate"
                                    style=" font-size:15px;height:50px" required>
                                <label for="End Date">EndDate</label>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-success" type="submit" name="search" style="width: 21%; height:50px; margin-left:3%">submit</button>
                </div>
            </div>
        </div>
      
       
    </form>

    
<br><br>
    <div class="row">

        <div class="col-md-3" style="margin-left: 5%; margin-top:5%">
            
           <div id="weekpicker"></div>

       </div>

        <div class="col-md-8">

            <div class="table-responsive">
                <table class="table">
                    @if ($data->count() > 0)

                    <tr>
                        <th scope="row">Date</th>

                        @foreach ( $data as $i)
                            <td>{{$i->Date}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Regular</th>

                        @foreach ( $data as $i)
                            <td>{{$i->Regular}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">OverTime</th>

                        @foreach ( $data as $i)
                            <td>{{$i->Overtime}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Sick</th>

                        @foreach ( $data as $i)
                            <td>{{$i->Sick}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Vacation</th>

                        @foreach ( $data as $i)
                            <td>{{$i->Vacation}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Holiday</th>

                        @foreach ( $data as $i)
                            <td>{{$i->Holiday}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Unpaid</th>

                        @foreach ( $data as $i)
                            <td>{{$i->Unpaid}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Other</th>

                        @foreach ( $data as $i)
                            <td>{{$i->other}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Total</th>

                        @foreach ( $data as $i)
                            <td>{{$i->Total}}</td>
                        @endforeach
                    </tr>


                    <tr>
                        <th>Actions</th>
                        @foreach ( $data as $i)

                        <td>
                            <form action="" method="POST">





                                <a class="btn btn-primary"
                                    href="{{route('attendances.edit', $i->id)}}">Edit</a>




                               
                            </form>
                        </td>
                            
                        @endforeach

                    </tr>
                        
                    @endif

                </table>
               
            </div>

            
            

        </div>
    </div>
    
</body>
</html>
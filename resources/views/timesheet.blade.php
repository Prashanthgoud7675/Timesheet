<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
    <style>
        .w-5{
            display: inline;
            height: 20px;
            width: 20px;
            
        }
    </style>
</head>
<body>
    <br><br><br>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Regular</th>
                            <th>OverTime</th>
                            <th>Sick</th>
                            <th>Vacation</th>
                            <th>Holiday</th>
                            <th>Unpaid</th>
                            <th>Other</th>
                            <th>Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $i)
                        <tr>
                            <td>{{$i->Date}}</td>
                            <td>{{$i->Regular}}</td>
                            <td>{{$i->Overtime}}</td>
                            <td>{{$i->Sick}}</td>
                            <td>{{$i->Vacation}}</td>
                            <td>{{$i->Holiday}}</td>
                            <td>{{$i->Unpaid}}</td>
                            <td>{{$i->other}}</td>
                            <td>{{$i->Total}}</td>
                        </tr>
                            
                        @endforeach
                    </tbody>
                </table>
                <div>
        
                    {{$data->links()}}
        
                </div>
            </div>
            

        </div>
    </div>
    
</body>
</html>
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

    <form action="{{url('attendances')}}" method="POST">
        @csrf
        <input type="date" name="fromDate" required>
        <input type="date" name="toDate" required>
        <button type="submit" name="search">submit</button>
    </form>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th scope="row">Date</th>

                        @foreach ($data as $i)
                            <td>{{$i->Date}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Regular</th>

                        @foreach ($data as $i)
                            <td>{{$i->Regular}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">OverTime</th>

                        @foreach ($data as $i)
                            <td>{{$i->Overtime}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Sick</th>

                        @foreach ($data as $i)
                            <td>{{$i->Sick}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Vacation</th>

                        @foreach ($data as $i)
                            <td>{{$i->Vacation}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Holiday</th>

                        @foreach ($data as $i)
                            <td>{{$i->Holiday}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Unpaid</th>

                        @foreach ($data as $i)
                            <td>{{$i->Unpaid}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Other</th>

                        @foreach ($data as $i)
                            <td>{{$i->other}}</td>
                        @endforeach
                    </tr>

                    <tr>
                        <th scope="row">Total</th>

                        @foreach ($data as $i)
                            <td>{{$i->Total}}</td>
                        @endforeach
                    </tr>

                    <tr>

                        <th>Actions</th>
                        @foreach ($data as $i)

                        <td>
                            <form action="" method="POST">





                                <a class="btn btn-primary"
                                    href="{{route('attendances.edit', $i->id)}}">Edit</a>




                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger active">Delete</button>
                            </form>
                        </td>
                            
                        @endforeach

                    </tr>
                </table>
               
            </div>

            
            

        </div>
    </div>
    
</body>
</html>
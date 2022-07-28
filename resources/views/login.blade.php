<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

    <script src="https://cdn.tailwindcss.com"></script>

    <title>XSILICA HRMS</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">


</head>

<body style="background-color:whitesmoke">


    <div class="row justify-content-center">
        

        <div class="col-md-6" style="margin-top: 9%;background-color:white;width:500px;margin-bottom:5%;border-radius:10px; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
            <div class="" style="padding-top:4%;padding-bottom:4%;border-radius:25px">
                <div class="flex justify-center">
                    <h1 style="font-size:20px;font-weight:700">Welcome!</h1>
                </div>
                <br>
                <div class="flex justify-center" style="margin-top: 0%">
                    <div class="w-6/12    rounded-lg">


                        @if (session('status'))
                            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('message'))
                        <div class="alert alert-success-500 p-4 rounded-lg mb-6 text-white text-center">
                            {{ session('message') }}
                        </div>
                    @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" style="width: 375px;  ">
                                <p>{{ $message }}</p>
                            </div>
                        @endif




                        <form action="" method="post">
                            @csrf


                            <div class="mb-4">
                                <label >User Id</label>
                                <input type="text" name="email" id="email" placeholder=" Email Id"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"
                                    value="{{ old('email') }} " style="width:300px">

                                @error('email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <label>
                        <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember My User ID <i class="fa fa-question-circle"></i>
                    </label>
                            <div class="mb-4">
                                <label  >Password</label>
                                <input type="password" name="password" id="password" placeholder="Enter password"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror"
                                    value="" style="width:300px">

                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                           


                            <div class="flex justify-center">
                                <button type="submit"
                                    class="bg-blue-500 text-white px-2 py-2 rounded font-medium w-35" style="background-color:#052CA3"> <a href="welcome"> SIGN IN </a> </button>
                           
                                    </div>
                            <br>
                            <div class="flex justify-center">
                            <h1 style="color:#052CA3">FORGOT YOUR PASSWORD?</h1>
</div>
                            <br>
                           
                        </form>

                    </div>
                </div>

                <hr style="height:2px;width:350px;margin-left:40px">

<br>
<div class="flex justify-center">

                            <a href="register" >  <h1 class="text-center" style="font-size: 17px; font-weight:600; margin-left: 0%; margin-bottom:5%;color:black;text-decoration:underline"> New User?</h1> </a>
                            <i class="fa fa-user-plus" style="color:#052CA3;margin-left:1%;margin-top:1%"> CREATE ACCOUNT </i>

</div>
<br>
<hr style="height:2px;width:350px;margin-left:40px">
<br>

<h1 style="font-weight:700;margin-left:5%">Not a Client yet?</h1>
<p style="padding:20px"> RUN Powered  helps you manage your payroll,people, and benefits from anywhere. So you can spend more time growing your business.</p>
<h1 style="float:right;margin-right:5%;color:#052CA3">Learn More<i class="fa fa-angle-right"></i></h1>
<br><br>
            </div>
        </div>
    </div>
   
</body>

</html>
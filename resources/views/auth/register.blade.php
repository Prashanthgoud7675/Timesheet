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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Montserrat&family=Quintessential&family=Ubuntu+Mono&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>XSILICA HRMS</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body style="font-family: 'Montserrat', sans-serif;">


    <div class="row justify-content-center">


        <div class="col-md-6"
            style="margin-top: 9%;background-color:white;width:500px;margin-bottom:5%;border-radius:10px; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
            <div class="" style="padding-top:4%;padding-bottom:4%;border-radius:25px">
                <div class="flex justify-center">
                    <img src="https://imagizer.imageshack.com/img923/5138/bRZo8P.png" alt="logo" height="170px"
                        width="150px" style="align-item:center">

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

                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="mb-4">
                                <label for="name">First Name</label>
                                <input type="text" name="name" id="name" placeholder="Your Name"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('name') border-red-500 @enderror"
                                    value="{{ old('name') }}">

                                @error('name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>


                            <div class="mb-4">
                                <label for="Companyname">Company Name</label>
                                <input type="text" name="Companyname" id="company name" placeholder="Company Name"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Companyname') border-red-500 @enderror"
                                    value="{{ old('Companyname') }}">

                                @error('Companyname')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="empid">Employe Id</label>
                                <input type="text" name="empid" id="empid" placeholder="Employe Id"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('empid') border-red-500 @enderror"
                                    value="{{ old('empid') }}">

                                @error('empid')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" placeholder="Email"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>



                            <div class="mb-4">
                                <label>Password</label>
                                <input type="password" name="password" id="password" placeholder="Choose a password"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror"
                                    value="">

                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation">Re-enter Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Re-enter password"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password_confirmation') border-red-500 @enderror"
                                    value="">

                                @error('passwor_confirmation')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <label>
                                <input type="checkbox" name="remember" style="margin-bottom:15px"> Remember me
                            </label>
                            <br>
                            <br>



                            <div class="flex justify-center">
                                <button type="submit"
                                    class=" bg-blue-500 text-white px-2 py-2 rounded font-medium w-45"
                                    style="background-color:#052CA3;width:100px">Register</button>
                            </div>
                            <br>
                        </form>


                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>

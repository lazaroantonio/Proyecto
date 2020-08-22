<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background:url(https://cdn.hipwallpaper.com/i/37/52/J2wVt6.jpg)no-repeat;
                color: white;
                font-family: 'Nunito', sans-serif;
                background-size: contain;
                position: center;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;

            }


            .content {
                text-align: center;
                margin-top: 110px;
            }
            .hola {
                text-align: center;
                position: absolute;
                right: 550px;
                top: 18px;
                color: white;
                font-size: 50px;


            }

            .title {
                font-size: 100px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="incio">
            <div class="content">
                <div class="title m-b-md">
                    Nailuj Electronics
            </div>


                <div class="flex-center position-ref full-height">
                    @if (Route::has('login'))
                            <div class="hola">
                            @auth
                             <a href="{{ url('/home') }}"> <font color="white">Home</font></a>
                            @else
                                <a href="{{ route('login') }}"><font color="white">Login</font></a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}"><font color="white">Register</font></a>
                                @endif
                            @endauth
                        </div>
                    @endif
        </div>
    </body>
</html>

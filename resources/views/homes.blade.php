<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login</title>

        
        </div>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: green;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
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

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 200px;
            }

            header {
    background-color: #333;
    color: #fff;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.left {
  display: block;
  margin-left: auto;
  margin-right: 50%;
  width: 50%;
}

        </style>
    </head>
    <body>

  
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" style="color: white;">Home</a>
                    @else
                         <a href="{{ url('/homes') }}" style="color: white;">Home</a>
                        <a href="{{ url('/search') }}" style="color: white;">Search</a>
                        <a href="{{ route('login') }}" style="color: white;">Login</a>
                        <a href="{{ route('register') }}" style="color: white;">Register</a>
                    @endauth
                </div>
            @endif
            <div class="left">
           <img src="{{ asset('images/download.png') }}" alt="Your Image" width="100" height="100">
           </div>
        <div class="flex-center position-ref full-height">
           <div class="content">
                <div class="title m-b-md" style="color: white">
                  <b>Home</b>
                </div>

                
            </div>
        </div>
    </body>
</html>
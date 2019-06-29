<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>E-Commerce</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F08080;
                color: #F08080;
                font-family: 'fontawesome-webfont', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .title m-b-md{
                font-family: 'Nunito', sans-serif;
                color: white;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: white;

            }
            .button {
              background-color: #DC143C;
              color: white;
              border-radius: 8px;
              padding: 5px 12px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 12px;
            }
            .btn{
                background-color: #DAA520;
              color: white;
              border-radius: 8px;
              padding: 5px 12px;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 12px; 
            }
            h2{
                color: white;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <!-- @if (Route::has('login')) -->
                <div class="top-right links">
                    <!-- @auth
                        <a href="{{ url('/home') }}">Home</a -->>
                   <!--  @else
                        <a href="{{ route('login') }}">Login</a> -->

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                   <!--  @endauth -->
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Selamat Datang
                </div>
                <h2>Silahkan berbelanja sesuai dengan kebutuhan anda!</h2>
                <button class="button">
                    <a href="{{ route('products.index')}}" class="button">Produk</a>
                </button>
                <button class="btn">
                    <a href="{{ route('login') }}" class="btn">Login</a>
                </button>
        </div>
    </body>
</html>

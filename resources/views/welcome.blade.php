<!doctype html>
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
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    MRT Demo App
                </div>

                <div class="links">
                    <a href="https://medrt.co.jp/">Homepage</a>
                    <a href="/contact">contact</a>
                    <a href="/about">about</a>
                    <a href="/login">login</a>
                    <a href="https://github.com/laravel/laravel">公式GitHub</a>
                    <a href="/new">new</a>
                    <a href="/search">search</a>
                    <a href="/find">find</a>
                    <a href="/dentakun">DENTAKUN</a>
                    <a href="/calculator">Calculator</a>
                    <a href="/calcal">CalCal</a>
                    <a href="/calc">sakaCalc</a>
                    <a href="/mrtlp">MRTLP_S</a>
                    <a href="/answerman">Answerman</a>
                    <a href="/mrt-db">MRT-db</a>
                    <a href="/bookRoom">BookRoom</a>
                    <a href="/doctor">MRT-h</a>
                    <a href="/yukiLab">yukiLab</a>
                    <a href="/employee/list">従業員リスト</a>
                    <a href="/SpMrt">SpMrt</a>
                    <a href="MRT_form">お問い合わせ</a>
                    <a href="/LibBook">古本屋</a>
                </div>
            </div>
        </div>
    </body>
</html>

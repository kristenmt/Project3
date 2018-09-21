<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #4f5050;
                color: #FDA136;
                font-family: 'Lato', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
                text-rendering: optimizeLegibility;
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

            /* .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            } */

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
                padding-top: 200px;
            }

            .intro {
                font-size: 30px;
                margin-bottom: 20px;
                margin-top: -20px;
            }

            .links > a {
                color: #FDA136;
                padding: 0 15px;
                font-size: 22px;
                font-weight: 400;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links a:hover{
                color: #dc7702;
                /* border-bottom: 2px solid #dc7702; */
                /* transition: border-bottom 0.2s; */
            }

            .m-b-md {
                margin-bottom: 0px;
            }
        </style>
    </head>
    <body>
        @yield('authentication')
        {{-- <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif --}}

           
                {{-- <div class="links"> --}}
                    {{-- <a href="/users/create">Sign Up</a> --}}
                    {{-- <a href="#">Sign In</a> --}}
                    {{-- <a href="https://laravel-news.com">News</a> --}}
                    {{-- <a href="https://nova.laravel.com">Nova</a> --}}
                    {{-- <a href="https://forge.laravel.com">Forge</a> --}}
                    {{-- <a href="https://github.com/laravel/laravel">GitHub</a> --}}
                {{-- </div> --}}
            </div>
        </div>
    </body>
</html>





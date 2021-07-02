<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>News Stories</title>

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
                color: #fff;
                padding: 10px 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .text {
                color: #d0eae0;
            }
            .image {
                background-image: url('{{ asset('/images/news_stories.jpg')}}');
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                height:100%;
            }
        </style>
    </head>
    <body>
        <div id="loading" class="rounded mx-auto d-block image">
        <div class="flex-center position-ref full-height text">
            @if (Route::has('login'))
                <div class="top-right links text">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" >Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md" style="color: #afe8f1">
                    Welcome To News Stories
                </div>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">Story List</div>
                                <div class="col-md-12 col-sm-12 mb-5">

                                    @foreach ($data as $item)
                                    <div class="col-md-12 col-sm-12 mb-5">
                                        <h3 style="color:#bfbfbf;">{{ $item['title'] }}<h3>
                                        <p class="col-md-6">
                                            by {{$item['publisher']}} on {{$item['published_date']}}
                                        </p>

                                        <p class="">
                                            {{ $item['body'] }}
                                        </p>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

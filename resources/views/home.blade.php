<!DOCTYPE html>
<!--
	Solitude by TEMPLATE STOCK
	templatestock.co @templatestock
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>News Story</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/elusive-webfont.css') }}">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="{{ asset('js/jquery.min.js') }}"></script>
      <script type="text/javascript" src="{{ asset('js/modernizr.custom.js') }}"></script>
    <![endif]-->

    <!-- deletion confirmation -->
    <script>
        function myFunction() {
            if(!confirm("Warning!!! This data will be lost permanently!"))
            event.preventDefault();
        }
    </script>
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <a class="navbar-brand hidden-xs hidden-sm" href="{{url('/home')}}"><h1>News Story</h1></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          	<div class="nav navbar-nav">
	          		<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
			            <div class="container">

			                <div class="collapse navbar-collapse" id="navbarSupportedContent">
			                    <!-- Left Side Of Navbar -->
			                    <ul class="navbar-nav mr-auto">

			                    </ul>

			                    <!-- Right Side Of Navbar -->
			                    <ul class="navbar-nav ml-auto">
			                        <!-- Authentication Links -->
			                        @guest
			                            <li class="nav-item">
			                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
			                            </li>
			                            @if (Route::has('register'))
			                                <li class="nav-item">
			                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
			                                </li>
			                            @endif
			                        @else
			                            <li class="nav-item dropdown">
			                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
			                                    {{ Auth::user()->name }} <span class="caret"></span>
			                                </a>

			                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
			                                    <a class="dropdown-item" href="{{ route('logout') }}"
			                                       onclick="event.preventDefault();
			                                                     document.getElementById('logout-form').submit();">
			                                        {{ __('Logout') }}
			                                    </a>

			                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			                                        @csrf
			                                    </form>
			                                </div>
			                            </li>
			                        @endguest
			                    </ul>
			                </div>
			            </div>
			        </nav>
                </div>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    </div>

  
  
		<!-- ==== HEADERWRAP ==== -->
	    <div id="headerwrap" id="home" name="home">
            <div class="card-body ">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <h4 class="animated bounceIn">WELCOME</h4>
            </div>
			<header class="clearfix">
                <h1 class="animated bounceIn">News Story</h1>
                <p class="animated slideInLeft">Welcome to the best blog journey ever.</p>
                <p class="animated slideInRight">We Are Here For You. Go through the blogs as you like. Thanks for being with us.</p>
            </header>	    
	    </div><!-- /headerwrap -->		

		
		<!-- ==== BLOG ==== -->
		<div class="container" id="blog" name="blog">
        
			<div class="row white">
				<h1 class="fade-down centered">WE ARE STORYTELLERS</h1>
				<hr class="fade-down title-mb">
			</div><!-- /row -->
			<div class="row">
				<div class="row blog-bg">
                    <div class="col-md-12 col-sm-12 col-xs-12 fade-down centered">
                        <h3 class="fade-down centered">Have some thoughts on mind?</h3>			
                            <a href="{{url('/add/stories')}}" class="btn btn-primary mb-5">Add New Story</a>
                        <hr class="fade-down title-mb">
                    </div>
					@foreach ($data as $item)
					<div class="col-md-12 col-sm-12 col-xs-12 blog-content fade-up">
						<h2>{{ $item['title'] }}</h2>
						<div class="col-md-12 col-sm-12 col-xs-12 blog-meta fade-down">
							<h4>by {{$item['publisher']}} on {{$item['published_date']}}</h4>
						</div>
						<p>{{ $item['body'] }}</p>
						<a class="btn btn-danger btn-sm float-left mr-2" onclick="return myFunction();" href="{{url('/delete/stories/'.$item['id'])}}">delete</a>
                        <a class="btn btn-primary btn-sm float-left mr-2" href="{{url('/edit/stories/'.$item['id'])  }}">edit</a>
                        <a class="btn btn-secondary btn-sm float-left mr-2" href="{{url('api/json-api/'.$item['id'])}}">JSON</a>
                        <a class="btn btn-secondary btn-sm float-left mr-2" href="{{url('api/xml-api/'.$item['id'])}}">XML</a>											
                    </div>
					@endforeach
        
				</div><!-- /col -->

                <div class="row justify-content-center mt-5">{{ $data->links() }}</div>

				
				<!--<div class="col-md-6 blog-bg">
					@foreach ($data as $item)
                        <div class="col-md-12 col-sm-12 col-xs-12 blog-content fade-up">
                            <h2>{{ $item['title'] }}<h2>
	                        <div class="row blog-meta fade-down">
								<h5>by {{$item['publisher']}} on {{$item['published_date']}}</h5>
							</div>
	                        <p>{{ $item['body'] }}</p>
                        </div>
                    @endforeach
				</div> /col -->

			</div><!-- /row -->
			<br>
			<br>
		</div><!-- /container -->

		
		

		<div id="footerwrap">
			<div class="container">
                <h4 class="fade-up">Created by <a href="#">News Story</a> - Copyright 2021</h4>
			</div>
		</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/plugins.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/init.js') }}"></script>
  </body>
</html>

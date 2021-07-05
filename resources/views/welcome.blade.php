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
  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navbar-main">
  
  
  	<div id="navbar-main">
      <!-- Fixed navbar -->
	    <div class="navbar navbar-default navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          	<i class="el-icon-lines"></i>
	          </button>
	          <a class="navbar-brand hidden-xs hidden-sm" href="#home"><h1>News Story</h1></a>
	        </div>
	        <div class="navbar-collapse collapse">
	          	<ul class="nav navbar-nav">
	          		@if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}">Home</a></li>
                    @else
                        <li><a href="{{ route('login') }}" >Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            		@endif
				</ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </div>
    </div>

  
  
		<!-- ==== HEADERWRAP ==== -->
	    <div id="headerwrap" id="home" name="home">
			<header class="clearfix">
	  		 		<h1 class="animated bounceIn">News Story</h1>
	  		 		<p class="animated slideInLeft">Let Us Help You Be Something Awesome.</p>
	  		 		<p class="animated slideInRight">We Are Here For You.</p>
	  		</header>	    
	    </div><!-- /headerwrap -->		

		
		<!-- ==== BLOG ==== -->
		<div class="container" id="blog" name="blog">
		<br>
			<div class="row white">
				<h1 class="fade-down centered">WE ARE STORYTELLERS</h1>
				<hr class="fade-down title-mb">
			</div><!-- /row -->
			
			<div class="row">
				<div class="row blog-bg">
					@foreach ($data as $item)
					<div class="col-md-12 col-sm-12 col-xs-12 blog-content fade-up">
						<h2>{{ $item['title'] }}</h2>
						<div class="col-md-12 col-sm-12 col-xs-12 blog-meta fade-down">
							<h4>by {{$item['publisher']}} on {{$item['published_date']}}</h4>
						</div>
						<br>
						<br>
						<p>{{ $item['body'] }}</p>						
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

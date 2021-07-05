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
	

	
		<!-- ==== BLOG ==== -->
		<div class="container" id="blog" name="blog">
        <header class="clearfix">
            <h1 class="animated bounceIn">News Story</h1>
            <p class="animated slideInRight">So what brings you here to change your thoughts!!</p>
        </header>
		<br>
			<form action="{{url('/edit/stories')  }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data['id'] ?? ''}}">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" value="{{ $data['title'] ?? '' }}">

                    </div>
                    <div class="form-group">
                        <label for="Body">Body</label>
                        <textarea name="body" class="form-control" id="body" placeholder="body" value="{{ $data['body'] ?? '' }}">{{ $data['body'] ?? '' }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="Publisher">Publisher Name</label>
                        <p><input type="text" name="publisher" class="form-control" id="publisher" placeholder="publisher" value="{{ $data['publisher'] ?? '' }}"></p>
                    </div>

                    <div class="form-group">
                        <label for="Datepicker">Published at</label>
                        <p><input name="published_date" class="form-control" type="date" id="datepicker" placeholder="published_date" value="{{ $data['published_date'] ?? '' }}"></p>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
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

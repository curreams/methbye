<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>{{ config('app.name', 'booking-engine') }}</title>
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/methcustom.css">
<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- ====================================================
header section -->
<header class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-xs-5 header-logo">
				<br>
				<a href="/"><img src="img/logo.png" alt="MethBye" class="img-responsive logo"></a>
			</div>

			<div class="col-md-7">
				<nav class="navbar navbar-default">
				  <div class="container-fluid nav-bar">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  
					  <ul class="nav navbar-nav navbar-right">

						@if (Route::has('login'))
						
						@if (Auth::check())
						<li><a class="menu active" href="/welcome" >Home</a></li>
						<li><a class="menu" href="/info">Info</a></li>                            
						<li><a class="menu" href="/events/info">Create Event</a></li>
						<li><a class="menu" href="/events/timeline">See Events</a></li>
						<li><a class="menu" href="{{ url('/logout') }}">Logout</a></li>
						@else
						<li><a class="menu active" href="/" >Home</a></li>
						<li><a class="menu" href="/info">Info</a></li>
						<li><a class="menu" href="{{ url('/login') }}">Login</a></li>
						<li><a class="menu" href="{{ url('/register') }}">Register</a></li>
						@endif
						
						@endif

						<!--<li><a class="menu" href="#service">download</a></li>-->
						<!--<li><a class="menu" href="#team">record</a></li>-->
						<!--<li><a class="menu" href="#ourGroup">contact</a></li>-->
					  </ul>
					</div><!-- /navbar-collapse -->
				  </div><!-- / .container-fluid -->
				</nav>
			</div>
		</div>
	</div>
</header> <!-- end of header area -->

<div class="container body-content">
	@yield('content')
</div>

<!-- footer starts here -->
<footer class="footer clearfix">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 footer-para">
				<!--<p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://guantaow.taobao.com/">厚朴网络淘宝店</a><a target="_blank" href="http://www.moobnn.com">网页模板</a></p>-->
				<p>MIT License ; 2018.InCoChi Group.</p>
			</div>
		</div>
	</div>
</footer>

<!-- script tags
============================================================= -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
</body>
</html>
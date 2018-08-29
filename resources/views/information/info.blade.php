<!DOCTYPE html>
<html lang="en"> 
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<title>Home</title>
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/methcustom.css">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
<script src="js/modernizr.js"></script>
<script src="js/echarts.min.js"></script>
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

<!-- ====================================================
header section -->
<header class="top-header" id="header_info">
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
						<li><a class="menu active" href="/" id="home_header">Home</a></li>						
					  </ul>
					</div><!-- /navbar-collapse -->
				  </div><!-- / .container-fluid -->
				</nav>
			</div>
		</div>
	</div>
</header> <!-- end of header area -->

<!-- about section -->
<br>
<br>
<br>
<br>
<section class="about text-center" id="about">
	<div class="container">
		<div class="row">
			<h2>about us</h2>
			<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
			<div class="col-md-12">
				<select id="mental_health_select" >
					<option value="" disabled selected>Select your option</option>
					<option value="2010">2010</option>
					<option value="2013">2013</option>
					<option value="2016">2016</option>
				</select>		
				<div id="mental_health_present" style="width:600px; height:400px"></div>
			</div>

		</div>
	</div>
</section><!-- end of about section -->


<!-- service section starts here -->
<section class="service text-center" id="service">
	<div class="container">
		<div class="row">
			<h2>our services</h2>
			<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
			<div class="col-md-12">
				<select id="first_use_select" >
					<option value="" disabled selected>Select your option</option>
					<option value="2013">2013</option>
					<option value="2016">2016</option>
				</select>   	
				<div id="meth_first_use" style="width:800px; height:600px"></div>				
			</div>

		</div>
	</div>
</section><!-- end of service section -->

<section class="about text-center" id="about">
	<div class="container">
		<div class="row">
			<h2>about us</h2>
			<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
			<div class="col-md-12">
				<select id="source_select" >
					<option value="" disabled selected>Select your option</option>
					<option value="2010">2010</option>
					<option value="2013">2013</option>
					<option value="2016">2016</option>
				</select>   	
				<div id="meth_source" style="width:800px; height:600px"></div>
			</div>

		</div>
	</div>
</section><!-- end of about section -->

<!-- service section starts here -->
<section class="service text-center" id="service">
	<div class="container">
		<div class="row">
			<h2>our services</h2>
			<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
			<div class="col-md-12">
				<select id="trend_select" >
					<option value="" disabled selected>Select your option</option>
					<option value="health">Health Problem</option>
					<option value="death">Death Rate</option>
					<option value="offences">Offences Rate</option>			
					<option value="age">Age Distribution</option>
				</select>   
				<div id="trend_source" style="width:800px; height:600px"></div>
				
			</div>

		</div>
	</div>
</section><!-- end of service section -->


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
<script src="js/jquery-2.1.1.js"></script>
<script src="js/mental-health.js"></script>
<script src="js/first-use.js"></script>
<script src="js/trend.js"></script>
<script src="js/source.js"></script>
</body>
</html>
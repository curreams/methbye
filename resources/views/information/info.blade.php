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
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
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

<section class="slider" id="graph"> 
	<div class=container-fluid>
		<select id="mental_health_select" >
			<option value="" disabled selected>Select your option</option>
			<option value="2010">2010</option>
			<option value="2013">2013</option>
			<option value="2016">2016</option>
		</select>
		<div class="row">
		<div id="mental_health_present" style="width:600px; height:400px"></div>
		</div>
		<div>
    	<p>The reason for first use meth</p> 
		<select id="first_use_select" >
			<option value="" disabled selected>Select your option</option>
			<option value="2013">2013</option>
			<option value="2016">2016</option>
		</select>   	
    	<div id="meth_first_use" style="width:800px; height:600px"></div>
		</div>
    	<p>Source of use meth</p> 
		<select id="source_select" >
			<option value="" disabled selected>Select your option</option>
			<option value="2010">2010</option>
			<option value="2013">2013</option>
			<option value="2016">2016</option>
		</select>   	
    	<div id="meth_source" style="width:800px; height:600px"></div>
		</div>
		<p>Trend</p>
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
</section>


<!-- footer starts here -->


<!-- script tags
============================================================= -->
<script src="js/jquery-2.1.1.js"></script>
<script src="js/mental-health.js"></script>
<script src="js/first-use.js"></script>
<script src="js/trend.js"></script>
<script src="js/source.js"></script>
</body>
</html>
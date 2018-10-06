@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<section class="about text-center">
	<div class="container">
		<div class="col-md-12">
			<nav class="navbar navbar-default">
			<div class="container-fluid nav-bar">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" id="button-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
				
				<ul class="nav navbar-nav navbar-left">

					<li><a class="menu nav-link" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" href="#trend">Trends</a></li>
					<li><a class="menu nav-link" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" href="#mental">Mental Health</a></li>
					<li><a class="menu nav-link" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" href="#reason">Reason of Use</a></li>
					<li><a class="menu nav-link" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" href="#cut">Percentage of Cutdown</a></li>
					<li><a class="menu nav-link" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" href="#source">Source of Meth</a></li>
				</ul>
				</div><!-- /navbar-collapse -->
			</div><!-- / .container-fluid -->
			</nav>
		</div>
	</div>
	<div class="container" id="trend">
		<div class="row">
			<h2>Trend of Meth</h2>
			<br>
			<h4>Do you know the trend around Meth? Are you scared that you are the only one have this problem? Do you know the consequence of continually using meth? Please select one chart below</h4>
			<div class="form-group meth_select">
				<label for="trend_select" class="col-md-2">Select one trend</label>
				<div class="col-md-10">
					<select id="trend_select" class="col-md-3" >
						<option value="" disabled selected>Select...</option>
						<option value="health">Health Problem</option>
						<option value="death">Death Rate</option>
						<option value="offences">Offences Rate</option>
						
					</select>
				</div>
			</div>
			<div class="form-group  meth_select">
				<div id="trend_source" class="col-sm-12 col-md-6" style=" height:400px"></div>
				<div class="col-md-6 "><br><br><br> <p id="text_health">There is a high percentage of health problems when consuming methamphetamine. 
					In 2007 56.5% of the consumers suffered from any health problem and 88.1% in 2016.
					</p> 
					<p id="text-death">The death rate of consuming methamphetamine has significantly increased from 2007 to 2016 from 5.3% to 19.2%. 
						Don’t you want to leave them?</p>
					<p id="text-offence">Methamphetamine impels the consumers to take criminals actions. 
						It is the impeller to drive you to commit a crime.</p>		
				
				</div>
			</div>			

		</div>
	</div>
</section><!-- end of about section -->


<!-- service section starts here -->

<section class="service text-center" id="mental">
	<div class="container">
		<div class="row">
			<h2>mental health</h2>
			<br>
			<h4>Is the meth user Struggling with psychological distress?<br><br>Low psychological problems occur
                since taking the meth in last month was increasingly notable. The moderate
                psychological distress and high/ very high psychological distress will be
                reduced if you don’t take them for a long time. You will be recovered without
				consuming meth gradually after 12 months.</h4>
			<div class="form-group meth_select">
				<label class="col-md-2">Select one option</label>				
				<select id="mental_health_select" class="col-md-3">
					<option value="" disabled selected>Select...</option>
					<option value="Used in the previous month">Used in the previous month</option>
					<option value="Used in the previous 12 months">Used in the previous 12 months</option>
					<option value="Not used in the previous 12 months">Not used in the previous 12 months</option>
				</select>
				</div>
			</div>
			<br>
			<div class="form-group  meth_select">
				<div id="mental_health_present" class="col-sm-12 col-md-6" style="height:400px"></div>
				<div class="col-md-6 "><br><br><br> <p id="text_mental">Low psychological problems occur since taking the methamphetamine in last month was increasingly notable. 
					The moderate psychological distress and high/ very high psychological distress will be reduced if you don’t take them for a long time. 
					You will be recovered without consuming meth gradually after 12 months.</p>		
				
				</div>
			</div>	
		</div>

	</div>
</section><!-- end of service section -->

<section class="about text-center" id="reason">
	<div class="container">
		<div class="row">
			<h2>Reason of use</h2>
			<br>
			<h4>Do you know why your friend implicated in meth? Here are the reasons, and we
								provide the comparison of the reasons among different ages.</h4>
			<div class="form-group meth_select">
				<label class="col-md-2">Select age group</label> 
				<select id="first_use_select" class="col-md-3">
					<option value="" disabled selected>Select...</option>
					<option value="14-19">14-19 years old</option>
					<option value="20–29">20–29</option>
					<option value="30–39">30–39</option>
					<option value="40–49">40–49</option>
					<option value="50–59">50–59</option>
					<option value="60+">60+</option>
				</select>
			</div>
			</div>
			<br>
			<div class="form-group  meth_select">				
				<div id="meth_first_use" class="col-sm-12 col-md-6" style="height:400px"></div>
				<div class="col-md-6 "><br><br><br> <p id="text_use">Why do you first attempt methamphetamine? : Do you know why your friend is implicated in meth? 
				Here are the reasons, and we provide the comparison of the reasons among different ages.</p>		
				
				</div>
			</div>	
				
			

		</div>
	</div>
</section><!-- end of about section -->

<!-- service section starts here -->

<section class="service text-center" id="cut">
	<div class="container">
		<div class="row">
			<h2>Percentage of Cutdown </h2>
			<br>
			<h4>See how many people leave it</h4>
			<div class="form-group  meth_select">				
				<div id="meth_cutdown" class="col-sm-12 col-md-6" style="height:400px"></div>
				<div class="col-md-6 "><br><br><br> <p id="text_cut">You can still leave METHAMPHETAMINE:  the rate of “can cut down” is significantly higher than “cannot cut down”. 
					Just make up your mind and get help from us and pursue better life for yourself or your family and friends.</p>	
				</div>
			</div>
		</div>

	</div>
</section><!-- end of service section -->

<section class="about text-center" id="source">
	<div class="container">
		<div class="row">
			<h2>Source of Meth</h2>
			<br>
			<h4>Here are the “Chief Culprits” that hurt you and your Families</h4>
			<div class="form-group  meth_select">				
				<div id="meth_source" class="col-sm-12" style="height:500px"></div>
					
				
			</div>
		</div>
	</div>
</section><!-- end of about section -->

<script src="js/jquery-2.1.1.js"></script>
<script src="js/mental-health.js"></script>
<script src="js/first-use.js"></script>
<script src="js/trend.js"></script>
<script src="js/source.js"></script>
<script src="js/cutdown.js"></script>
<script src="js/modernizr.js"></script>
<script src="js/echarts.min.js"></script>
@endsection
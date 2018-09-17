@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<section class="about text-center" id="trends">
	<div class="container">
		<div class="row">
			<h2>Trend of Meth</h2>
			<br>
			<h4>Do you know the trend around Meth? Are you scared that you are the only one have this problem? Do you know the consequence of continually using meth? Please select one chart below</h4>
			<div class="col-md-12 meth_select">
				<label>Select one Trend</label> &nbsp;&nbsp;
				<select id="trend_select" >
					<option value="" disabled selected>Select...</option>
					<option value="health">Health Problem</option>
					<option value="death">Death Rate</option>
					<option value="offences">Offences Rate</option>			
					<option value="age">Age Distribution</option>
				</select>   
				<div id="trend_source" style="width:800px; height:600px"></div>
				
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
			<div class="col-md-12 meth_select">
				<label>Select one Year</label> &nbsp;&nbsp;
				<select id="mental_health_select" >
					<option value="" disabled selected>Select...</option>
					<option value="2010">2010</option>
					<option value="2013">2013</option>
					<option value="2016">2016</option>
				</select>		
				<div id="mental_health_present" style="width:600px; height:400px"></div>
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
			<div class="col-md-12 meth_select">
				<label>Select one Year</label> &nbsp;&nbsp;
				<select id="first_use_select" >
					<option value="" disabled selected>Select...</option>
					<option value="2013">2013</option>
					<option value="2016">2016</option>
				</select>   	
				<div id="meth_first_use" style="width:800px; height:600px"></div>				
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
			<h4>See how many people leave it!!</h4>
			<div class="col-md-12">
				<div id="meth_cutdown" style="width:800px; height:600px"></div>
			</div>
		</div>
	
	</div>
</section><!-- end of service section -->

<section class="about text-center" id="source">
	<div class="container">
		<div class="row">
			<h2>Source of Meth</h2>
			<br>
			<h4>Here are the “Chief Culprits” that hurt you and your Families!!</h4>
			<div class="col-md-12 meth_select">
				<label>Select one Year</label> &nbsp;&nbsp;
				<select id="source_select" >
					<option value="" disabled selected>Select...</option>
					<option value="2010">2010</option>
					<option value="2013">2013</option>
					<option value="2016">2016</option>
				</select>   	
				<div id="meth_source" style="width:800px; height:600px"></div>
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

@extends('layouts.app')

@section('content')


<!-- Introduction section -->
<br>
<br>
<br>
<br>
<br>
<br>
@if(Session::has('success_message'))
        <div class="alert alert-success">            
            {!! session('success_message') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
@endif
<section class="about text-center" id="info">
	<div class="container">
		<div class="row">
			<h2>What do you want to do?</h2>
		    <h4>Select an option</h4>
			<div class="intro_layout">
				
				<div class="col-md-3 intro_inline">
					<a href="/info">
						<div class="single-about-detail clearfix">
							<div class="about-img" id="about-img">
								<img class="img-responsive" src="img/item1.jpg" alt="">
							</div>
							<div class="about-details" id="about-details">
								
								<h3>Meth information</h3>
								<p id="info_info"><br>Do you intend to use Methamphetamine more often than not? 
								<br>Do you know the consequences involved using Methamphetamine? 
								<br>Please click here to know more.</p>
								<br>
								<br>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 intro_inline">
					<a href="/events/info">
						<div class="single-about-detail clearfix">
							<div class="about-img" id="about-img">
								<img class="img-responsive" src="img/item2.jpg" alt="">
							</div>
							<div class="about-details" id="about-details">
								
								<h3>Record an Episode</h3>
								<p id="info_info"><br>Please start sharing your feelings to get help from your friend/relative 
								<br>whom you feel comfortable and secured with, and your friend/relative can keep track of 
								your status by creating the events.
								
								
								
								
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 intro_inline">
					<a href="/events/timeline">
						<div class="single-about-detail clearfix">
							<div class="about-img" id="about-img">
								<img class="img-responsive" src="img/item3.jpg" alt="">
							</div>
							<div class="about-details" id="about-details">
								
								<h3>Episodes Timeline</h3>
								<p id="info_info"><br>Want to see the status of your friend to help him in the 
								<br>process of recovery? Then have a look at the timeline of events created by you.
								<br>
								<br>
								<br>
								
								
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 intro_inline">
					<a href="/reports">
						<div class="single-about-detail clearfix">
							<div class="about-img" id="about-img">
								<img class="img-responsive" src="img/item4.jpg" alt="">
							</div>
							<div class="about-details" id="about-details">
								
								<h3>Generate Report</h3>
								<p id="info_info"><br>Want to know where you or your friend/relative stand as a person in the process of quitting Meth? 
								<br>Start generating reports from a specific period so that you can analyze yourself or your friend/relative's status.
								<br>
								<br>	

								
							</div>
						</div>
					</a>
				</div>

			</div>


		</div>
	</div>
</section><!-- end of about section -->
@endsection

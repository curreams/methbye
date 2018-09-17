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
				
				<div class="col-md-4 intro_inline">
					<a href="/info">
						<div class="single-about-detail clearfix">
							<div class="about-img" id="about-img">
								<img class="img-responsive" src="img/item1.jpg" alt="">
							</div>
							<div class="about-details" id="about-details">
								
								<h3>Meth information</h3>
								<p id="info_info"><br>If you are using methamphetamine,do you know the consequence of using Methamphetamine continuously?
								<br>If you want to help your family and friend, do you really understand it?
								<br>Click here If you want know more</p>
								
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 intro_inline">
					<a href="/events/info">
						<div class="single-about-detail clearfix">
							<div class="about-img" id="about-img">
								<img class="img-responsive" src="img/item2.jpg" alt="">
							</div>
							<div class="about-details" id="about-details">
								
								<h3>Create an Event</h3>
								<p id="info_info"><br>Please start sharing your feelings to get help from your friend/relative 
								<br>whom you feel comfortable and secured with, and your friend/relative can keep track of 
								<br>your status by creating the events.
								<br>
								<br>
								
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-4 intro_inline">
					<a href="/events/timeline">
						<div class="single-about-detail clearfix">
							<div class="about-img" id="about-img">
								<img class="img-responsive" src="img/item3.jpg" alt="">
							</div>
							<div class="about-details" id="about-details">
								
								<h3>See Events</h3>
								<p id="info_info"><br>Want to see the status of your friend to help him in the 
								<br>process of recovery? Then have a look at the timeline of events created by you.
								<br>
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

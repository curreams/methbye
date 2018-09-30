@extends('layouts.methbye')

@section('content')
<section class="slider" id="home">
	<div class="container-fluid">
		<div class="row">
			<div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
				<div class="header-backup"></div>
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="img/homepage.jpg" alt="">
						<div class="carousel-caption">
							<h1>Methbye</h1>
							<p>An excellent source for providing a helping hand to your friend/relative in the recovery process.</p>
							<!--<button>learn more</button>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!-- end of slider section -->

<!-- Introduction section -->
<br>
<br>
<section class="about text-center" id="info">
	<div class="container">
		<div class="row">
			<h2>Information</h2>
		    <h4>Understanding methamphetamine</h4>
			<div class="intro_layout">
				<div class="col-md-3 intro_inline"></div>
				<div class="col-md-6 intro_inline" id="intro_methuser">
					<a href="/info">
						<div class="single-about-detail clearfix">
							<div class="about-img" id="about-img">
								<img class="img-responsive" src="img/item1.jpg" alt="">
							</div>
							<div class="about-details" id="about-details">
								
								<h3></h3>
								<p id="info_info"><br>Do you intend to use Methamphetamine more often than not? 
								<br>Do you know the consequences involved using Methamphetamine? 
								<br>Please click here to know more.</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-md-3 intro_inline"></div>

			</div>


		</div>
	</div>
</section><!-- end of about section -->
@endsection

@extends('layouts.app') 

@section('content')
<br>
<br>
<br>
<br>
<section class="team" id="team">
	<div class="container">
		<div class="row">
            <div class="team-heading text-center">
			    <h2>{{ __('Support Services') }}</h2>
                <h4>Find services that can assist you with more information</h4>
            </div>
            <div class="col-md-1 single-member "></div>
			<div class="col-md-2 single-member ">
                <a href="https://ice.vic.gov.au/" target="_blank" rel="noopener noreferrer">
                    <div class="person">
                        <img class="img-responsive" src="{{ asset('img/IceAdvice.png') }}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3> Ice Help line</h3>
                        <p>Call 1800423238423 to have more information about ice consumption</p>
                    </div>
                 </a>
            </div>
            <div class="col-md-1 single-member "></div>
			<div class="col-md-2 single-member ">
                <a href="https://www.directline.org.au/" target="_blank" rel="noopener noreferrer">
                    <div class="person">
                        <img class="img-responsive" src="{{ asset('img/directline.jpg') }}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3> Direct Line</h3>
                        <p>For 24/7 counselling, information and referral</p>
                    </div>
                </a>
            </div>			
            <div class="col-md-1 single-member"></div>        
            <div class="col-md-2 single-member ">
                <a href="https://www.counsellingonline.org.au/" target="_blank" rel="noopener noreferrer">
                    <div class="person">
                        <img class="img-responsive" src="{{ asset('img/counsellingonline.jpg') }}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3> Counselling Online</h3>
                        <p>Line for general drug consumption counselling</p>
                    </div>
                </a>
        </div>
            <div class="col-md-3 single-member "></div>
        </div>
    </div>
</section><!-- end of about section -->
<section class="team" id="team">
	<div class="container">
		<div class="row">
            <div class="col-md-1 single-member "></div>
            <div class="col-md-2 single-member ">
                <a href="https://adf.org.au/drug-facts/" target="_blank" rel="noopener noreferrer">
                    <div class="person">
                        <img class="img-responsive" src="{{ asset('img/adf-2.png') }}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Australian Drug Fundation</h3>
                        <p>Find methamphetamines information</p>
                    </div>
                </a>
            </div>             
            <div class="col-md-1 single-member "></div>
            <div class="col-md-2 single-member ">
                <a href="https://www.suicideline.org.au/" target="_blank" rel="noopener noreferrer">
                    <div class="person">
                        <img class="img-responsive" src="{{ asset('img/suicideline.jpg') }}" alt="member-1">
                    </div>
                    <div class="person-detail">
                        <div class="arrow-bottom"></div>
                        <h3>Suicial Line</h3>
                        <p>For people feeling distressed or suicial and their families</p>
                    </div>
                </a>
            </div>            


		</div>
	</div>
</section><!-- end of about section -->
@endsection

@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<section class="cd-horizontal-timeline">
	<div class="timeline">
		<div class="events-wrapper">
			<div class="events">
				<ol>                       
                    @foreach($events as  $event)
                    <li><a href="#0" class="{{ head(head($events))=== $event ? 'selected' : '' }}" data-date="{{date('d/m/Y', strtotime($event->date))}}">{{date('m/y', strtotime($event->date))}}</a></li>
                    @endforeach 
               
				</ol>

				<span class="filling-line" aria-hidden="true"></span>
			</div> <!-- .events -->
		</div> <!-- .events-wrapper -->
			
		<ul class="cd-timeline-navigation">
			<li><a href="#0" class="prev inactive">Prev</a></li>
			<li><a href="#0" class="next">Next</a></li>
		</ul> <!-- .cd-timeline-navigation -->
    </div> <!-- .timeline -->
    <div class="events-content">
		<ol>
            @foreach($events as $event)
                <li class="{{ head(head($events))=== $event ? 'selected' : '' }}" data-date="{!!date('d/m/Y', strtotime($event->date))!!}">
				<h2>{!!date('d M Y', strtotime($event->date))!!}</h2>
				<em>Details</em>
				<p>	
                 {{$event->description}}       
                </p>
			</li>
            @endforeach
		</ol>
	</div> <!-- .events-content -->

</section>
@endsection

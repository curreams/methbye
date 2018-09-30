@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<section class="timeline">

@foreach($events as $event)
  <div class="entry">
    <div class="title">
      <h3>{!!date('d M Y', strtotime($event->date))!!}</h3>
      <p>{!!date('h:i a', strtotime($event->date))!!}</p>
    </div>
    <div class="body">
      <p>{{$event->details}} </p>
      <ul>
        <li>Location: {{$event->location}}</li>
        <li>Mood: {{$event->mood}}</li>
        <li>Condition: {{$event->physical_condition}}</li>
      </ul>
    </div>
  </div>

@endforeach
  

</section>
@endsection

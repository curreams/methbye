@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<section class="about " id="register">
    <div class="container">
        <div class="row">
        <br>
        <br>
        @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        @endif
            
            <h2 class="text-center">{{ __('Episodes Timeline') }}</h2>
            <br>
            <br>
            <br>
            
            <div class="intro_layout">              
                <div class="col-md-10 col-sm-12 intro_inline" id="intro_methuser">
                    <div class="card-body methfont" >
                    <form method="GET" action="{{ route('events.event.filter') }}" accept-charset="UTF-8" id="filter_form" name="filter_form">
                      <div class="form-group {{ $errors->has('date_begin') ? 'has-error' : '' }}">
                        <label for="date_begin" class="col-md-2 control-label label-form">Start Date</label>
                        <div class="col-md-2">
                          <input class="form-control" name="date_begin" id="date_begin" autocomplete="off">
                          {!! $errors->first('date_begin', '<p class="help-block">:message</p>') !!}
                        </div>
                      </div>
                      <div class="form-group {{ $errors->has('date_end') ? 'has-error' : '' }}">
                          <label for="date_end" class="col-md-2 control-label label-form">End Date</label>
                          <div class="col-md-2">
                              <input class="form-control" name="date_end" id="date_end" autocomplete="off" >
                              {!! $errors->first('date_end', '<p class="help-block">:message</p>') !!}
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-2">
                            <input class="btn btn-primary" type="submit"  value="Apply" id="filter_dates">
                        </div>
                      </div>
                      </form>

                          </div>
                          
                        </div>
                        
                        
                      </div>


        </div>
    </div>
    
</section>
<br> 

<section class="timeline">

@foreach($events as $event)
  <div class="entry" id="timeline_entry">
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
@section('scripts')
<script src="{{ asset('js/timelinefilter.js') }}"></script> 
@endsection

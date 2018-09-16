@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<section class="about text-center" id="register">
    <div class="container">
        <div class="row">
        @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
        @endif
            <h2>{{ __('Event Details') }}</h2>
            <br>
            <br>
            <div class="intro_layout">              
                <div class="col-md-8 col-sm-12 intro_inline" id="intro_methuser">
                    <div class="card-body methfont" >
                        <form method="POST" action="{{ route('events.event.store') }}" accept-charset="UTF-8" id="create_event_form" name="create_event_form" class="form-horizontal">
                        {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                                <label for="date" class="col-md-2 control-label">Date</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="date" type="date" id="date" required>
                                    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('time') ? 'has-error' : '' }}">
                                <label for="time" class="col-md-2 control-label">Time</label>
                                <div class="col-md-10">
                                    <input class="form-control" name="time" type="time" id="time" required>
                                    {!! $errors->first('time', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>                            
                            <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                                <label for="location" class="col-md-2 control-label">Location</label>
                                <div class="col-md-10">
                                    <label for="location_home" class="radio-inline">
                                        <input id="location_home" class="" name="location" type="radio" value="Home" >
                                        Home
                                    </label>
                                    <label for="location_park" class="radio-inline">
                                        <input id="location_park" class="" name="location" type="radio" value="Park" >
                                        Park
                                    </label>
                                    <label for="location_shopping_mall" class="radio-inline">
                                        <input id="location_shopping_mall" class="" name="location" type="radio" value="Shopping Mall" >
                                        Shopping Mall
                                    </label>
                                    <label for="location_other" class="radio-inline">
                                        <input id="location_other" class="" name="location" type="radio" value="Other" >
                                        Other
                                    </label>

                                    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('currentMood') ? 'has-error' : '' }}">
                                <label for="currentMood" class="col-md-2 control-label">Current Mood</label>
                                <div class="col-md-10">
                                    <label for="currentMood_happy" class="checkbox-inline">
                                        <input id="currentMood_happy"  name="currentMood[]" type="checkbox" value="Happy" >
                                        Happy
                                    </label>
                                    <label for="currentMood_sad" class="checkbox-inline">
                                        <input id="currentMood_sad"  name="currentMood[]" type="checkbox" value="Sad" >
                                        Sad
                                    </label>
                                    <label for="currentMood_angry" class="checkbox-inline">
                                        <input id="currentMood_angry"  name="currentMood[]" type="checkbox" value="Angry">
                                        Angry
                                    </label>
                                    <label for="currentMood_disappointed" class="checkbox-inline">
                                        <input id="currentMood_disappointed"  name="currentMood[]" type="checkbox" value="Disappointed" >
                                        Disappointed
                                    </label>
                                    <label for="currentMood_anxious" class="checkbox-inline">
                                        <input id="currentMood_anxious"  name="currentMood[]" type="checkbox" value="Anxious" >
                                        Anxious
                                    </label>
                                    <label for="currentMood_fearfull" class="checkbox-inline">
                                        <input id="currentMood_fearfull"  name="currentMood[]" type="checkbox" value="Fearfull" >
                                        Fearfull
                                    </label>
                                    <label for="currentMood_other" class="checkbox-inline">
                                        <input id="currentMood_other"  name="currentMood[]" type="checkbox" value="Other" >
                                        Other
                                    </label>

                                    {!! $errors->first('currentMood', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('physicalCondition') ? 'has-error' : '' }}">
                                <label for="physicalCondition" class="col-md-2 control-label">Physical Condition</label>
                                <div class="col-md-10">
                                    <label for="physicalCondition_sleepy" class="checkbox-inline">
                                        <input id="physicalCondition_sleepy"  name="physicalCondition[]" type="checkbox" value="Sleepy" >
                                        Sleepy
                                    </label>
                                    <label for="physicalCondition_drowsy" class="checkbox-inline">
                                        <input id="physicalCondition_drowsy"  name="physicalCondition[]" type="checkbox" value="Drowsy" >
                                        Drowsy
                                    </label>
                                    <label for="physicalCondition_sweaty" class="checkbox-inline">
                                        <input id="physicalCondition_sweaty"  name="physicalCondition[]" type="checkbox" value="Sweaty" >
                                        Sweaty
                                    </label>
                                    <label for="physicalCondition_hungry" class="checkbox-inline">
                                        <input id="physicalCondition_hungry"  name="physicalCondition[]" type="checkbox" value="Hungry" >
                                        Hungry
                                    </label>
                                    <label for="physicalCondition_thristy" class="checkbox-inline">
                                        <input id="physicalCondition_thristy"  name="physicalCondition[]" type="checkbox" value="Thristy" >
                                        Thristy
                                    </label>
                                    <label for="physicalCondition_other" class="checkbox-inline">
                                        <input id="physicalCondition_other"  name="physicalCondition[]" type="checkbox" value="Other" >
                                        Other
                                    </label>

                                    {!! $errors->first('physicalCondition', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
                                <label for="details" class="col-md-2 control-label">Details</label>
                                <div class="col-md-10">
                                    <textarea class="form-control" name="details" cols="50" rows="5" id="details" minlength="1" maxlength="20000" placeholder="Enter extra details here..."></textarea>
                                    {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input class="btn btn-primary" type="submit" value="Save Event">
                            </div>
                        </div>

                        </form>                
                    
                    </div>

                </div>
                

            </div>


        </div>
    </div>
</section> 
@endsection

@extends('layouts.app')

@section('content')
<br>
<br>
<br>
<br>
<section class="about " id="register">
    <div class="container">
        <div class="row">
            <h2 class="text-center">{{ __('Episode Details') }}</h2>
            <br>
            <br>
            @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="intro_layout">              
                <div class="col-md-8 col-sm-12 intro_inline" id="intro_methuser">
                    <div class="card-body methfont" >
                        <form method="POST" action="{{ route('events.event.store') }}" accept-charset="UTF-8" id="create_event_form" name="create_event_form" class="form-horizontal">
                        {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
                                <label for="date" class="col-md-2 control-label label-form">Date</label>
                                <div class="col-md-4">
                                    <input class="form-control" name="date" id="date" autocomplete="off" required>
                                    {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                          
                            <div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
                                <label for="location" class="col-md-2 control-label label-form">Location</label>
                                <div class="col-md-4">
                                    <div class="radio">
                                        <label for="location_home">
                                            <input id="location_home" class="" name="location" type="radio" value="Home" >
                                            Home
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="location_park">
                                            <input id="location_park" class="" name="location" type="radio" value="Park" >
                                            Park
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="location_shopping_mall">
                                            <input id="location_shopping_mall" class="" name="location" type="radio" value="Shopping Mall" >
                                            Shopping Mall
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label for="location_other">
                                            <input id="location_other" class="" name="location" type="radio" value="Other" >
                                            Other
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" name="location" id="location_other_text" disabled required>
                                    </div>                                    

                                    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('currentMood') ? 'has-error' : '' }}">
                                <label for="currentMood" class="col-md-2 control-label label-form">Current Mood</label>
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label for="currentMood_happy">
                                            <input id="currentMood_happy" class="" name="currentMood[]" type="checkbox" value="Happy" >
                                            Happy
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="currentMood_sad">
                                            <input id="currentMood_sad" class="" name="currentMood[]" type="checkbox" value="Sad" >
                                            Sad
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="currentMood_angry">
                                            <input id="currentMood_angry" class="" name="currentMood[]" type="checkbox" value="Angry" >
                                            Angry
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="currentMood_disappointed">
                                            <input id="currentMood_disappointed" class="" name="currentMood[]" type="checkbox" value="Disappointed" >
                                            Disappointed
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="currentMood_anxious">
                                            <input id="currentMood_anxious" class="" name="currentMood[]" type="checkbox" value="Anxious" >
                                            Anxious
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="currentMood_fearfull">
                                            <input id="currentMood_fearfull" class="" name="currentMood[]" type="checkbox" value="Fearfull" >
                                            Fearfull
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="currentMood_other">
                                            <input id="currentMood_other" class="" name="currentMood[]" type="checkbox" value="" >
                                            Other
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" name="currentMood[]" id="currentMood_other_text" disabled>
                                    </div>  

                                    {!! $errors->first('currentMood', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('physicalCondition') ? 'has-error' : '' }}">
                                <label for="physicalCondition" class="col-md-2 control-label label-form">Physical Condition</label>
                                <div class="col-md-4">
                                    <div class="checkbox">
                                        <label for="physicalCondition_sleepy">
                                            <input id="physicalCondition_sleepy" class="" name="physicalCondition[]" type="checkbox" value="Sleepy" >
                                            Sleepy
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="physicalCondition_drowsy">
                                            <input id="physicalCondition_drowsy" class="" name="physicalCondition[]" type="checkbox" value="Drowsy" >
                                            Drowsy
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="physicalCondition_sweaty">
                                            <input id="physicalCondition_sweaty" class="" name="physicalCondition[]" type="checkbox" value="Sweaty" >
                                            Sweaty
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="physicalCondition_hungry">
                                            <input id="physicalCondition_hungry" class="" name="physicalCondition[]" type="checkbox" value="Hungry" >
                                            Hungry
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="physicalCondition_thristy">
                                            <input id="physicalCondition_thristy" class="" name="physicalCondition[]" type="checkbox" value="Thristy" >
                                            Thristy
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label for="physicalCondition_other">
                                            <input id="physicalCondition_other" class="" name="physicalCondition[]" type="checkbox" value="" >
                                            Other
                                        </label>
                                    </div>
                                    <div class="col-md-12">
                                        <input class="form-control" name="physicalCondition[]" id="physicalCondition_other_text" disabled>
                                    </div>

                                    {!! $errors->first('physicalCondition', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>

                            <div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
                                <label for="details" class="col-md-2 control-label label-form">Details</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="details" cols="50" rows="5" id="details" minlength="1" maxlength="20000" placeholder="Enter extra details here..."></textarea>
                                    {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input class="btn btn-primary" type="submit" value="Save Episode">
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
@section('scripts')
<script src="{{ asset('js/event.js') }}"></script> 
@endsection
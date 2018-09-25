
<div class="form-group {{ $errors->has('date') ? 'has-error' : '' }}">
    <label for="date" class="col-md-2 control-label">text</label>
    <div class="col-md-10">
        <input class="form-control" name="date" type="text" id="date" value="{{ old('date', optional($event)->date) }}" minlength="1" placeholder="Enter date here...">
        {!! $errors->first('date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('location') ? 'has-error' : '' }}">
    <label for="location" class="col-md-2 control-label">Location</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="location_home">
            	<input id="location_home" class="" name="location" type="radio" value="Home" {{ old('location', optional($event)->location) == 'Home' ? 'checked' : '' }}>
                Home
            </label>
        </div>
        <div class="radio">
            <label for="location_park">
            	<input id="location_park" class="" name="location" type="radio" value="Park" {{ old('location', optional($event)->location) == 'Park' ? 'checked' : '' }}>
                Park
            </label>
        </div>
        <div class="radio">
            <label for="location_shopping_mall">
            	<input id="location_shopping_mall" class="" name="location" type="radio" value="Shopping Mall" {{ old('location', optional($event)->location) == 'Shopping Mall' ? 'checked' : '' }}>
                Shopping Mall
            </label>
        </div>
        <div class="radio">
            <label for="location_other">
            	<input id="location_other" class="" name="location" type="radio" value="Other" {{ old('location', optional($event)->location) == 'Other' ? 'checked' : '' }}>
                Other
            </label>
        </div>

        {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('currentMood') ? 'has-error' : '' }}">
    <label for="currentMood" class="col-md-2 control-label">Current Mood</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="currentMood_happy">
            	<input id="currentMood_happy" class="required" name="currentMood[]" type="checkbox" value="Happy" {{ in_array('Happy', old('currentMood', optional($event)->currentMood) ?: []) ? 'checked' : '' }}>
                Happy
            </label>
        </div>
        <div class="checkbox">
            <label for="currentMood_sad">
            	<input id="currentMood_sad" class="required" name="currentMood[]" type="checkbox" value="Sad" {{ in_array('Sad', old('currentMood', optional($event)->currentMood) ?: []) ? 'checked' : '' }}>
                Sad
            </label>
        </div>
        <div class="checkbox">
            <label for="currentMood_angry">
            	<input id="currentMood_angry" class="required" name="currentMood[]" type="checkbox" value="Angry" {{ in_array('Angry', old('currentMood', optional($event)->currentMood) ?: []) ? 'checked' : '' }}>
                Angry
            </label>
        </div>
        <div class="checkbox">
            <label for="currentMood_disappointed">
            	<input id="currentMood_disappointed" class="required" name="currentMood[]" type="checkbox" value="Disappointed" {{ in_array('Disappointed', old('currentMood', optional($event)->currentMood) ?: []) ? 'checked' : '' }}>
                Disappointed
            </label>
        </div>
        <div class="checkbox">
            <label for="currentMood_anxious">
            	<input id="currentMood_anxious" class="required" name="currentMood[]" type="checkbox" value="Anxious" {{ in_array('Anxious', old('currentMood', optional($event)->currentMood) ?: []) ? 'checked' : '' }}>
                Anxious
            </label>
        </div>
        <div class="checkbox">
            <label for="currentMood_fearfull">
            	<input id="currentMood_fearfull" class="required" name="currentMood[]" type="checkbox" value="Fearfull" {{ in_array('Fearfull', old('currentMood', optional($event)->currentMood) ?: []) ? 'checked' : '' }}>
                Fearfull
            </label>
        </div>
        <div class="checkbox">
            <label for="currentMood_other">
            	<input id="currentMood_other" class="required" name="currentMood[]" type="checkbox" value="Other" {{ in_array('Other', old('currentMood', optional($event)->currentMood) ?: []) ? 'checked' : '' }}>
                Other
            </label>
        </div>

        {!! $errors->first('currentMood', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('physicalCondition') ? 'has-error' : '' }}">
    <label for="physicalCondition" class="col-md-2 control-label">Physical Condition</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="physicalCondition_sleepy">
            	<input id="physicalCondition_sleepy" class="required" name="physicalCondition[]" type="checkbox" value="Sleepy" {{ in_array('Sleepy', old('physicalCondition', optional($event)->physicalCondition) ?: []) ? 'checked' : '' }}>
                Sleepy
            </label>
        </div>
        <div class="checkbox">
            <label for="physicalCondition_drowsy">
            	<input id="physicalCondition_drowsy" class="required" name="physicalCondition[]" type="checkbox" value="Drowsy" {{ in_array('Drowsy', old('physicalCondition', optional($event)->physicalCondition) ?: []) ? 'checked' : '' }}>
                Drowsy
            </label>
        </div>
        <div class="checkbox">
            <label for="physicalCondition_sweaty">
            	<input id="physicalCondition_sweaty" class="required" name="physicalCondition[]" type="checkbox" value="Sweaty" {{ in_array('Sweaty', old('physicalCondition', optional($event)->physicalCondition) ?: []) ? 'checked' : '' }}>
                Sweaty
            </label>
        </div>
        <div class="checkbox">
            <label for="physicalCondition_hungry">
            	<input id="physicalCondition_hungry" class="required" name="physicalCondition[]" type="checkbox" value="Hungry" {{ in_array('Hungry', old('physicalCondition', optional($event)->physicalCondition) ?: []) ? 'checked' : '' }}>
                Hungry
            </label>
        </div>
        <div class="checkbox">
            <label for="physicalCondition_thristy">
            	<input id="physicalCondition_thristy" class="required" name="physicalCondition[]" type="checkbox" value="Thristy" {{ in_array('Thristy', old('physicalCondition', optional($event)->physicalCondition) ?: []) ? 'checked' : '' }}>
                Thristy
            </label>
        </div>
        <div class="checkbox">
            <label for="physicalCondition_other">
            	<input id="physicalCondition_other" class="required" name="physicalCondition[]" type="checkbox" value="Other" {{ in_array('Other', old('physicalCondition', optional($event)->physicalCondition) ?: []) ? 'checked' : '' }}>
                Other
            </label>
        </div>

        {!! $errors->first('physicalCondition', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
    <label for="details" class="col-md-2 control-label">Details</label>
    <div class="col-md-10">
        <textarea class="form-control" name="details" cols="50" rows="10" id="details" minlength="1" maxlength="20000" placeholder="Enter extra details here...">{{ old('details', optional($event)->details) }}</textarea>
        {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
    </div>
</div>


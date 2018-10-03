@extends('layouts.app') 

@section('content')
<br>
<br>
<br>
<br>
<section class="about text-center" id="register">
	<div class="container">
		<div class="row">
            <h2>{{ __('Nearby Hospitals') }}</h2>
            <br>
            <br>
            <br>
            <br>
		    
			<div class="intro_layout">				
				<div class="col-md-6 col-sm-12 intro_inline" id="intro_methuser">
                <div class="card-body methfont" >
                
                        <div class="form-group row">
                            <label for="location" class="col-md-3 col-form-label text-md-right">{{ __('Location') }}</label>

                            <div class="col-md-5">
                                <input id="location" placeholder="Enter a Location" type="text" class="form-control{{ $errors->has('location') ? ' is-invalid' : '' }}" name="location" required>

                                @if ($errors->has('location'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class=" col-md-4">
                            <button type="button" id='submit_button' class="btn btn-primary">
                                    {{ __('Search') }}
                                </button>
                            </div>
                        </div>
                <div class="col-md-5 col-sm-12 intro_inline" ></div>
                <div class="col-md-7 col-sm-12 intro_inline" >
                    <div id="mapview" style="width: 500px; height: 500px;">                    
                </div>
                </div>
                    
                </div>

				</div>
				

			</div>


		</div>
	</div>
</section><!-- end of about section -->
@endsection
@section('scripts')
<script src="{{ asset('js/map.js') }}"></script> 
@endsection

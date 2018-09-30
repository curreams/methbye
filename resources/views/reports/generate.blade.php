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
            
            <h2 class="text-center">{{ __('Generate Report') }}</h2>
            <br>
            <br>
            <br>
            
            <div class="intro_layout">              
                <div class="col-md-8 col-sm-12 intro_inline" id="intro_methuser">
                    <div class="card-body methfont" >
                        <form method="POST" action="{{ route('reports.report.generate') }}" accept-charset="UTF-8" id="create_report_form" name="create_report_form" class="form-horizontal">
                        <input type="text" name="csrf" id="csrf" value="{{ csrf_token() }}" class="hidden">
                        {{ csrf_field() }}
                            <div class="form-group {{ $errors->has('date_begin') ? 'has-error' : '' }}">
                                <label for="date_begin" class="col-md-2 control-label label-form">Start Date</label>
                                <div class="col-md-4">
                                    <input class="form-control" name="date_begin" id="date_begin" required>
                                    {!! $errors->first('date_begin', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group {{ $errors->has('date_end') ? 'has-error' : '' }}">
                                <label for="date_end" class="col-md-2 control-label label-form">End Date</label>
                                <div class="col-md-4">
                                    <input class="form-control" name="date_end" id="date_end" required>
                                    {!! $errors->first('date_end', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>                            
                          
                            <div class="form-group {{ $errors->has('details') ? 'has-error' : '' }}">
                                <label for="details" class="col-md-2 control-label label-form">Comments</label>
                                <div class="col-md-6">
                                    <textarea class="form-control" name="details" cols="50" rows="5" id="details" minlength="1" maxlength="20000" placeholder="Enter extra details here..."></textarea>
                                    {!! $errors->first('details', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <input class="btn btn-primary" type="submit"  value="Generate Report">
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
<script src="{{ asset('js/report.js') }}"></script> 
@endsection
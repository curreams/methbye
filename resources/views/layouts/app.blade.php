<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'MethBye') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset('css/methcustom.css') }}">
	
    <link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('css/timeline.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logo.ico') }}" >
	
</head>

<body>

    <header class="top-header" id="header_info">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-5 header-logo">
                    <br>
                    @if (Route::has('login'))
                            
                            @if (Auth::check())
                            <a href="/welcome"><img src="{{ asset('img/logo2.png') }}" alt="MethBye" class="img-responsive logo"></a>
                            @else
                            <a href="/"><img src="{{ asset('img/logo2.png') }}" alt="MethBye" class="img-responsive logo"></a>
                            @endif
                            
                    @endif
                    
                </div>

                <div class="col-md-9">
                    <nav class="navbar navbar-default">
                    <div class="container-fluid nav-bar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        
                        <ul class="nav navbar-nav navbar-right">
                            @if (Route::has('login'))
                            
                            @if (Auth::check())
                            <li><a class="menu bluemenu" href="/welcome" >Home</a></li>
                            <li><a class="menu bluemenu" href="/info">Info</a></li>                            
                            <li><a class="menu bluemenu" href="/events/info">Record Episode</a></li>
                            <li><a class="menu bluemenu" href="/events/timeline">Timeline</a></li>
                            <li><a class="menu bluemenu" href="/reports">Report</a></li>
                            <li><a class="menu bluemenu" href="{{ url('/help') }}">Support Services</a></li>
                            <li><a class="menu bluemenu" href="{{ url('/logout') }}">Logout</a></li>
                            @else
                            <li><a class="menu bluemenu" href="/" >Home</a></li>
                            <li><a class="menu bluemenu" href="/info">Info</a></li>
                            <li><a class="menu bluemenu" href="{{ url('/help') }}">Support Services</a></li>
                            <li><a class="menu bluemenu" href="{{ url('/login') }}">Login</a></li>
                            <li><a class="menu bluemenu" href="{{ url('/register') }}">Register</a></li>
                            @endif
                            
                            @endif

                            <!--<li><a class="menu" href="#service">download</a></li>-->
                            <!--<li><a class="menu" href="#team">record</a></li>-->
                            <!--<li><a class="menu" href="#ourGroup">contact</a></li>-->
                        </ul>
                        </div><!-- /navbar-collapse -->
                    </div><!-- / .container-fluid -->
                    </nav>
                </div>
            </div>
        </div>
    </header> <!-- end of header area -->

    <div class="container body-content">
        @yield('content')
    </div>

<!-- footer starts here -->
    <footer class="footer clearfix">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 footer-para">
                    <!--<p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="http://guantaow.taobao.com/">厚朴网络淘宝店</a><a target="_blank" href="http://www.moobnn.com">网页模板</a></p>-->
                    <p>MIT License ; 2018.InCoChi Group.</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"
        integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBHKYsIrfTX4_BYPTYBNsA3N8gOznLgMz8&libraries=places"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>    
    <script src="{{ asset('js/jquery.mobile.custom.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.js') }}"></script>
    <script src="{{ asset('js/datetimepicker.js') }}"></script>
    @yield('scripts')
    <script type="text/javascript">
        $(function(){

             // sends the uploaded file file to the fielselect event
            $(document).on('change', ':file', function() {
                var input = $(this);
                var label = input.val().replace(/\\/g, '/').replace(/.*\//, '');

                input.trigger('fileselect', [label]);
            });

            // Set the label of the uploaded file
            $(':file').on('fileselect', function(event, label) {
                $(this).closest('.uploaded-file-group').find('.uploaded-file-name').val(label);
            });
            
            // Deals with the upload file in edit mode
            $('.custom-delete-file:checkbox').change(function(e){
                var self = $(this);
                var container = self.closest('.input-width-input');
                var display = container.find('.custom-delete-file-name');

                if (self.is(':checked')) {
                    display.wrapInner('<del></del>');
                } else {
                    var del = display.find('del').first();
                    if (del.is('del')) {
                        del.contents().unwrap();
                    }
                }
            }).change();

            // Sets the validator defaults
            $.validator.setDefaults({
                errorElement: "span",
                errorClass: "help-block",
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                },
                errorPlacement: function (error, element) {
                    if (element.parent('.input-group').length) {
                        error.insertAfter(element.parent());
                    } else if(element.prop('type') === 'checkbox' || element.prop('type') === 'radio') {
                        error.appendTo(element.closest(':not(input, label, .checkbox, .radio)').first());
                    } else {
                        error.insertAfter(element);
                    }
                }
            });

            // Makes sure any input with the required class is actually required
            $('form').each(function(index, item){
                var form = $(item);
                form.validate();

                form.find(':input.required').each(function(i, input){
                    $(input).attr('required', true);
                });
            });

        });
    </script>

</body>
</html>

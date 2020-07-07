<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="{{asset('dependencies/bootstrap/css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/fontawesome/css/all.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/flaticon/flaticon.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/animate.css/css/animate.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.theme.default.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/magnific-popup/css/magnific-popup.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/sal/css/sal.css')}}"  type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/select2/css/select2.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/nivo-slider/nivo-slider.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/meanmenu/meanmenu.min.css')}}" type="text/css">
        <link rel="stylesheet" href="assets/css/app.css" type="text/css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ADMIN</div>
                    <div class="card-body">
                        <form method="POST" action="{{ url('/admin/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
    
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
    
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @if(session('error'))
                                <div class="alert alert-success">
                                    {{ session()->get('error') }}
                                </div>
                            @endif
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ url('') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="{{asset('dependencies/jquery/js/jquery.min.js')}}"></script>
<script src="{{asset('dependencies/popper.js/js/popper.min.js')}}"></script>
<script src="{{asset('dependencies/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dependencies/nivo-slider/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('dependencies/nivo-slider/home.js')}}"></script>
<script src="{{asset('dependencies/owl.carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('dependencies/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('dependencies/sal/js/sal.js')}}"></script>
<script src="{{asset('dependencies/select2/js/select2.min.js')}}"></script>
<script src="{{asset('dependencies/isotope-layout/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('dependencies/imagesloaded/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('dependencies/validator/validator.min.js')}}"></script>
<script src="{{asset('dependencies/meanmenu/jquery.meanmenu.min.js')}}"></script>



    <!-- Custom Js -->

<script>
    /*$(document).ready(function(){
        $('#btn-enviar-formulario').click(function(){
            let formu = $('#formulario-admin').serialize();
            $.ajax({
                method: 'post',
                url : '',
                data : formu,
                success: function(response){

                }
            });

        }); 

    });
    */
</script>
</html>
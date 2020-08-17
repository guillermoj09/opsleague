@extends('layouts.layout')

@section('contenido')
    

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Reestablecer contraseña</div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{url('/password/reset')}}" method="post">
                            {{ csrf_field() }}
                        <input type="hidden" name="token" value="{{$token}}">    

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            @if ($errors->has('email'))
                            <span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
                            @endif
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email"/>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            @if ($errors->has('password'))
                            <span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
                            @endif
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password"/>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            @if ($errors->has('password_confirmation'))
                            <span class="help-block"><strong>{{ $errors->first('password_confirmation') }}</strong></span>
                            @endif
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password"/>
                        </div>
                            <button class="btn btn-danger btn-block">Reestablecer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
@endsection
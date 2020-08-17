@extends('layouts.layout')

@section('contenido')
    

<body>
    <div class="container" style="margin-top: 120px; margin-bottom: 80px;">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Recupera tu contraseña</div>
                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form action="{{url('/password/email')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email</label> 
                                <input class="form-control" type="email" name="email" id="email" placeholder="Ingrese tu email">
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                            </div>
                            <button class="btn btn-danger btn-block">recuperar tu contraseña</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
@endsection
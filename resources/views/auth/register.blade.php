@extends('layouts.layout')

@section('contenido')
    

<body>
    <div class="container">
        
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Registro Jugadores</div>
                    <div class="card-body">
                        <form action="{{route('registro')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email">Email</label> 
                                <input class="form-control" type="email" name="email" id="email" placeholder="Ingrese tu email">
                                {!! $errors->first('email','<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group">
                                <label for="nickname">Nickname</label> 
                                <input class="form-control" type="text" name="nickname" id="nickname" placeholder="Ingrese tu password">   
                                {!! $errors->first('nickname','<span class="help-block">:message</span>') !!}
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label> 
                                <input class="form-control" type="password" name="password" id="password" placeholder="Ingrese tu password">    
                            </div>
                            <div class="form-group">
                                <label for="nombrecompleto">Nombre Completo</label> 
                                <input class="form-control" type="text" name="nombrecompleto" id="nombrecompleto" placeholder="Ingrese tu password">    
                            </div>
                            <div class="form-group">
                                <label for="pais">Pais</label> 
                                <select   name="pais">
                                    <option value="1" selected>Chile</option>
                                </select> 
                            </div>
                
                            <button class="btn btn-danger btn-block">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>
</body>
@endsection
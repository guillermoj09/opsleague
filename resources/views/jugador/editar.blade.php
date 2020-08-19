@extends('layouts.layout')
@section('li-torneos')
    @foreach ($torneos as $n)
        <li><a href="{{url('torneo/ver/'.$n->id)}}">{{$n->nombre}}</a></li>
    @endforeach
@endsection
@section('contenido')
<section class="inner-section">
    <div class="container">
        <div class="row gutters-40">
            <div class="col-xl-9 col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{url('jugadores/perfil/actualizar')}}" method="post" enctype="multipart/form-data">
                        <img src="{{url('jugadorimages/'.$jugador->logo)}}" class="m-x-auto img-fluid img-circle" alt="avatar">
              
                        <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input" id="imgPerfil" name="imgPerfil">
                            <span class="btn btn-primary">Cambiar foto de perfil</span>
                        </label>
                       
                    </div>
                    <div class="col-lg-4">
                    
                        {{ csrf_field() }}
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>                                   
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            <h6>Nickname</h6>
                            <p>
                            <input type="hidden" class="form-control" id="id" name ="id" value="{{$jugador->id}}">
                            <input type="text" class="form-control" id="nickname" name="nickname" value="{{$jugador->nickname}}">
                            </p>
                            <h6>Nombre Completo</h6>
                            <p>
                            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="{{$jugador->nombre_completo}}">
                            </p>
                            {{--<h6>Password</h6>
                            <p>
                            <input type="text" class="form-control" id="password" name="password" value="{{$jugador->password}}">
                            </p>--}}
                            <h6>Pais</h6>
                            <p>
                            <select type="text" class="form-control" id="pais" name="pais">
                                <option value="Chile">Chile</option>
                                <option value="Perú">Perú</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Argentina">Argentina</option>
                            </select>
                            </p>
                            <a href="{{url('jugadores/cambiarPassword/'.$jugador->id)}}" class="btn btn-success">Cambiar Password</a>
                            <br><br>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

@endsection
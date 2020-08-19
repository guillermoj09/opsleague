@extends('layouts.layout-admin')

@section('contenido')
    <body>
        <div class="container">
            <h1 class="mt-4">Editar Torneo:</h1>
            <div class="mt-5">
                <form action="{{url('admin/torneos/edit')}}" method="post" enctype="multipart/form-data">
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
                    <div class="form-group">
                    
                    <label for="exampleFormControlInput1">Nombre torneo</label>
                    <input type="hidden" name="id" value="{{$torneo->id}}">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$torneo->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Juego</label>
                        <select class="form-control" id="juego" name="juego">
                            @foreach ($juegos as $juego)
                                @if ($juego->id == $torneo->juego_id)
                                    <option value="{{$juego->id}}" selected="">{{$juego->nombre}}</option>
                                @else
                                    <option value="{{$juego->id}}">{{$juego->nombre}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Fecha comienzo</label>
                        <input type="date" class="form-control" id="fecha_comienzo" name="fecha_comienzo" value="{{$torneo->fecha_comienzo}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripción</label>
                    <textarea class="form-control" id="descripcion" name="descripcion" rows="3"> {{$torneo->descripcion}}</textarea>
                    </div>
                    <div class="form-group row">
                        <div class="offset-sm-11">
                        <button type="submit" class="btn btn-primary">Guardar</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </body>
@endsection
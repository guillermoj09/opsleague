@extends('layouts.layout-admin')

@section('contenido')
    <body>
        <div class="container">
            <h1 class="mt-4">Crear Torneo:</h1>
            <div class="mt-5">
                <form action="{{url('admin/torneos/crear')}}" method="post" enctype="multipart/form-data">
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
                        <label for="exampleFormControlInput1">Nombre torneo:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                    <div class="form-group">
                        <label>Juego:</label>
                        <select class="form-control" id="juego" name="juego">
                            @foreach ($juegos as $juego)
                                <option value="{{$juego->id}}">{{$juego->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="example-number-input">Teams:</label>
                        <input class="form-control" type="number" value="2" min="2" id="teams">
                      </div>
                    <div class="form-group">
                        <label for="example-date-input">Fecha inicio:</label>
                    <input class="form-control" type="date" id="fechaInicio" name="fechaInicio" value="{{ date('d-m-Y') }}">
                    </div>
                    <div class="form-group">
                        <label for="example-date-input">Fecha termino:</label>
                        <input class="form-control" type="date" id="fechaTermino" name="fechaTermino">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripción del torneo:</label>
                        <textarea class="form-control" id="descripcionTorneo" name="descripcionTorneo"rows="5"></textarea>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-11">
                            <button type="submit" class="btn btn-primary">Crear</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </body>
@endsection
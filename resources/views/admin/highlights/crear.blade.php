@extends('layouts.layout-admin')

@section('contenido')
    <body>
        <div class="container">
            <h1 class="mt-4">Crear Highlight</h1>
            <div class="mt-5">
            <form action="{{url('admin/highlight/crear')}}" method="post" enctype="multipart/form-data">
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
                    <label for="exampleFormControlInput1">nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" value="#">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Juego:</label>
                        <select class="form-control" id="juego" name="juego">
                            @foreach ($juegos as $juego)
                                <option value="{{$juego->id}}">{{$juego->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label for="basic-url">URL:</label>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">https://www.youtube.com/</span>
                            </div>
                        <input type="text" class="form-control" id="url" name="url" aria-describedby="basic-addon3">
                        </div>
                    <div class="form-group">
                        <label for="imagen">Cargar imagen...</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen">
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
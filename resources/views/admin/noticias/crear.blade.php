@extends('layouts.layout-admin')

@section('contenido')
    <body>
        <div class="container">
            <h1 class="mt-4">Crear Noticia</h1>
            <div class="mt-5">
                <form action="{{url('admin/noticias/crear')}}" method="post" enctype="multipart/form-data">
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
                    <label for="exampleFormControlInput1">Titulo</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{old('titulo')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Sub Titulo</label>
                        <input type="text" class="form-control" id="subtitulo" placeholder="Sub-Titulo">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Categoria</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" value="{{old('categoria')}}" placeholder="Categoria">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Example file input</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen">
                      </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Example textarea</label>
                        <textarea class="form-control" id="noticia" name="noticia" value="{{old('noticia')}}" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
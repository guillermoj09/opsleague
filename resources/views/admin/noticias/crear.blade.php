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
                    <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Sub-Titulo" value="{{old('subtitulo')}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Categoria</label>
                        <input type="text" class="form-control" id="categoria" name="categoria" value="{{old('categoria')}}" placeholder="Categoria">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Portada</label>
                        <input type="file" class="form-control-file" id="imagen1" name="imagen1">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Parrafo 1</label>
                        <textarea class="form-control" id="parrafo1" name="parrafo1" value="{{old('parrafo1')}}" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen 2</label>
                        <input type="file" class="form-control-file" id="imagen2" name="imagen2">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Parrafo 2</label>
                        <textarea class="form-control" id="parrafo2" name="parrafo2" value="{{old('parrafo2')}}" rows="3"></textarea>
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
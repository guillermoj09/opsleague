@extends('layouts.layout-admin')

@section('contenido')
    <body>
        <div class="container">
            <h1 class="mt-4">Editar Noticia</h1>
            <div class="mt-5">
                <form action="{{url('admin/noticias/edit')}}" method="post" enctype="multipart/form-data">
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
                    <input type="hidden" name="id" value="{{$noticia->id}}">
                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo" value="{{$noticia->titulo}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Viñeta</label>
                    <input type="text" class="form-control" id="subtitulo" name="subtitulo" placeholder="Sub-Titulo" value="{{$noticia->subtitulo}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Categoria</label>
                    <input type="text" class="form-control" id="categoria" name="categoria" value="{{$noticia->categoria}}" placeholder="Categoria">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Portada</label>
                        <input type="file" class="form-control-file" id="imagen1" name="imagen1">
                      </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Parrafo 1</label>
                    <textarea class="form-control" id="parrafo1" name="parrafo1" rows="3" >{{$noticia->parrafo_1}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="imagen">Imagen 2</label>
                        <input type="file" class="form-control-file" id="imagen2" name="imagen2">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Parrafo 2</label>
                    <textarea class="form-control" id="parrafo2" name="parrafo2" rows="3" >{{$noticia->parrafo_2}}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Guardar">
                    </div>
                </form>
                <form action="/file-upload" class="dropzone" method="post" enctype="multipart/form-data" >
                    
                    {{ csrf_field() }}
                    <input type="hidden" id ="id_noticia" name="id_noticia" value="{{$noticia->id}}">
                    <div class="fallback">
                        <input type="file" name="file" id="file" multiple />
                      </div>
                    </form>
            </div>
        </div>
    </body>
@endsection
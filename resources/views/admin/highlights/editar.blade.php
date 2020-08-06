@extends('layouts.layout-admin')

@section('contenido')
    <body>
        <div class="container">
            <h1 class="mt-4">Editar Highlight:</h1>
            <div class="mt-5">
                <form action="{{url('admin/highlight/edit')}}" method="post" enctype="multipart/form-data">
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
                    <label for="exampleFormControlInput1">Nombre</label>
                    <input type="hidden" name="id" value="{{$highlight->id}}">
                    <input type="text" class="form-control" id="nombre" name="nombre" value="{{$highlight->nombre}}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Link</label>
                    <input type="text" class="form-control" id="link" name="link" value="{{$highlight->link}}">
                    </div>
                  
                    <div class="form-group">
                        <label for="imagen">Example file input</label>
                        <input type="file" class="form-control-file" id="imagen" name="imagen">
                      </div>
                    <div class="form-group">
                        <input type="submit" value="Guardar">
                    </div>
                </form>
            </div>
        </div>
    </body>
@endsection
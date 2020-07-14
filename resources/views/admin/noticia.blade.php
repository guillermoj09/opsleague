@extends('layouts.layout-admin')

@section('contenido')
    <body>


        <div class="container">
            
        <a class="btn btn-primary" href="{{url('admin/noticias/crear')}}">Añadir</a>
            <table id="example" class="table table-striped table-bordered toggle-arrow-tiny" style="width:100%">
                <thead>
                    <tr>
                      
                        <th data-toggle="true">Título:</th>
                        <th data-hide="phone">Subtitulo:</th>
                        <th data-hide="all">Categoria:</th>
                        <th data-hide="all">Descripción:</th>
                        <th data-hide="all">Acción:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticias as $item)
                        <tr>
                            <td>{{$item->titulo}}</td>
                            <td>{{$item->subtitulo}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->noticia}}</td>
                        <td><a href="{{url('admin/noticias/edit/'.$item->id)}}" class="btn btn-link">Editar</a>
                            <a href="{{url('admin/noticias/delete/'.$item->id)}}" class="btn btn-link">Eliminar</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
   
   
@endsection

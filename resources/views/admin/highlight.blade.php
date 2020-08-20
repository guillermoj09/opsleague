@extends('layouts.layout-admin')

@section('contenido')
    <body>
        <br>
        <div class="container">
            <div class="offset-sm-5">
            <a class="btn btn-primary" href="{{url('admin/highlight/crear')}}">Añadir Highlight</a>
            </div>
            <table id="example" class="table table-striped table-bordered toggle-arrow-tiny" style="width:100%">
                <thead>
                    <tr>
                        <th data-toggle="true">Nombre</th>
                        <th data-hide="phone">Link</th>
                        <th data-hide="phone">Juego</th>
                        <th data-hide="phone">Subido por</th>
                        <th data-hide="all">Acción</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($listadoHighlight as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->link}}</td>
                            <td>{{$item->juego->nombre}}</td>
                            <td>{{$item->administrador->email}}</td>
                        <td><a href="{{url('admin/highlight/edit/'.$item->id)}}">Editar</a>
                        <a href="{{url('admin/highlight/delete/'.$item->id)}}">Eliminar</a>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
@endsection
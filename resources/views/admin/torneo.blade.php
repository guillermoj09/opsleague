@extends('layouts.layout-admin')

@section('contenido')
    <body>
        <br>
        <div class="container">
            <div class="offset-sm-5">
                <a class="btn btn-primary" href="{{url('admin/torneos/crear')}}">Añadir Torneo</a>
            </div>
            <table id="example" class="table table-striped table-bordered toggle-arrow-tiny" style="width:100%">
                <thead>
                    <tr>
                        <th data-toggle="true">Nombre:</th>
                        <th data-hide="phone">Juego:</th>
                        <th data-hide="all">fecha comienzo:</th>
                        <th data-hide="all">Descripción:</th>
                        <th data-hide="all">Acción:</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($torneos as $item)
                        <tr>
                            <td>{{$item->nombre}}</td>
                            <td>{{$item->juego->nombre}}</td>
                            <td>{{Carbon\Carbon::parse($item->fecha_comienzo)->format('d/m/Y')}}</td>
                            <td>{{$item->descripcion}}</td>
                            <td><a href="{{url('admin/torneos/edit/'.$item->id)}}" class="btn btn-link">Editar</a>
                                <a href="{{url('admin/torneos/delete/'.$item->id)}}" class="btn btn-link">Eliminar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
   
   
@endsection

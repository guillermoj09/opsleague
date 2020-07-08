@extends('layouts.layout-admin')

@section('contenido')
    <body>


        <div class="container">
            
        <a class="btn btn-primary" href="{{url('admin/noticias/crear')}}">Añadir</a>
            <table id="example" class="table table-striped table-bordered toggle-arrow-tiny" style="width:100%">
                <thead>
                    <tr>
                      
                        <th data-toggle="true">Product Name</th>
                        <th data-hide="phone">Model</th>
                        <th data-hide="all">Description</th>
                     
                    </tr>
                </thead>
                <tbody>
                    @foreach ($noticias as $item)
                        <tr>
                            <td>{{$item->titulo}}</td>
                            <td>{{$item->categoria}}</td>
                            <td>{{$item->noticia}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </body>
   
   
@endsection

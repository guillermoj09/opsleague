@extends('layouts.layout')

@section('contenido')
<section class="inner-section">
    <div class="container">
        <div class="row gutters-40">
            <div class="col-xl-9 col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <img src="{{url('jugadorimages/'.$jugador->logo)}}" class="m-x-auto img-fluid img-circle" alt="avatar" style="width:300px; height:300px;">
                        
                    </div>
                    <div class="col-lg-6">
                       
                        <a class="btn btn-primary"  margin-top="5">Cambiar password</a>
                    </div>
                    
                </div>
            </div>
          
        </div>
    </div>
</section>

@endsection
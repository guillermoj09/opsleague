@extends('layouts.layout')

@section('li-torneos')
    @foreach ($torneos as $n)
        <li><a href="{{url('torneo/ver/'.$n->id)}}">{{$n->nombre}}</a></li>
    @endforeach
@endsection

@section('contenido')
<section class="inner-section">
    <div class="container">
        <div class="row gutters-40">
            <div class="col-xl-9 col-lg-8">
                <div class="contact-page">
                    
                    <div class="about-content">
                        <div class="heading-layout3">
                            <h3 class="heading-title">Sobre Nosotros</h3>
                        </div>
                        <p>Organizacion dedicada a la realizacion de torneos esports online/presencial con el objetivo de profesionalizar la escena gamer mediante la facilitacion de herramientas y equipo de trabajo enfocado en la transparencia y entrega de calidad para todos nuestros jugadores.</p>
                    </div>
                    <div class="contact-address">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="address-info">
                                    <div class="heading-layout3">
                                        <h3 class="heading-title-md">CEO - Administrador General</h3>
                                    </div>
                                    <ul>
                                        <li>
                                            <i class="fa fa-user-circle"></i>
                                            millen
                                            <li>
                                            <i class="far fa-envelope"></i>
                                            millen@opsleague.cl
                                        </li>
                                        </li>        
                                    </ul>

                                </div>
                               <div class="address-info">
                                    <div class="heading-layout3">
                                        <h3 class="heading-title-md">Administrador - Organizador CS:GO</h3>
                                    </div>
                                    <ul>
                                        <li>
                                            <i class="fa fa-user-circle"></i>
                                            mortlich
                                            <li>
                                            <i class="far fa-envelope"></i>
                                            mortlich@opsleague.cl
                                        </li>
                                        </li>        
                                    </ul>

                                </div>
                                
                                <div class="address-info">
                                    <div class="heading-layout3">
                                        <h3 class="heading-title-md">Organizador VALORANT</h3>
                                    </div>
                                    <ul>
                                        <li>
                                            <i class="fa fa-user-circle"></i>
                                            pendiente
                                            <li>
                                            <i class="far fa-envelope"></i>
                                            pendiente@opsleague.cl
                                        </li>
                                        </li>        
                                    </ul>

                                </div>

                                <div class="address-info">
                                    <div class="heading-layout3">
                                        <h3 class="heading-title-md">WEBMASTER</h3>
                                    </div>
                                    <ul>
                                        <li>
                                            <i class="fa fa-user-circle"></i>
                                            Guillermo Jimenez
                                            <li>
                                            <i class="far fa-envelope"></i>
                                            Desarrollador
                                            </li>
                                        </li>        
                                    </ul>
                                    <ul>
                                        <li>
                                            <i class="fa fa-user-circle"></i>
                                            Ricardo Diaz
                                            <li>
                                            <i class="far fa-envelope"></i>
                                            Desarrollador
                                            </li>
                                        </li>        
                                    </ul>

                                </div>
                            </div>
                            
                            

                        <div class="address-info">
                            <div class="heading-layout3">
                                <h3 class="heading-title-md">Diseñador - Organizador CS:GO</h3>
                            </div>
                                   
                                <ul>
                                    <li>
                                        <i class="fa fa-user-circle"></i>
                                        g0se
                                        <li><i class="far fa-envelope"></i>
                                            gose@opsleague.cl
                                        </li>
                                     </li>   
                                </ul>
                        <div class="address-info">
                                    <div class="heading-layout3">                                        
                                <br>

                                        <h3 class="heading-title-md">Organizador CS 1.6</h3>
                                    </div>
                                    <ul>
                                        <li>
                                            <i class="fa fa-user-circle"></i>
                                            TAZ
                                            <li>
                                            <i class="far fa-envelope"></i>
                                            taz@opsleague.cl
                                        </li>
                                        </li>        
                                    </ul>
                                     <ul>
                                          
                                    </ul>
                                       <ul>
                                        <li>
                                            <i class="fa fa-user-circle"></i>
                                            HATEFUL
                                            <li>
                                            <i class="far fa-envelope"></i>
                                            hateful@opsleague.cl
                                        </li>
                                        </li>        
                                    </ul>
                                  <ul>
                                        <li>
                                            <i class="fa fa-user-circle"></i>
                                            camilit4
                                            <li>
                                            <i class="far fa-envelope"></i>
                                            camilit4@opsleague.cl
                                        </li>
                                        </li>        
                                    </ul>


                                </div>

                                </div>

                            </div>


                    </div>

                </div>
            </div>
        </section>
@stop
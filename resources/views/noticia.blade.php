@extends('layouts.layout')

@section('li-torneos')
    @foreach ($torneos as $n)
        <li><a href="{{url('torneo/ver/'.$n->id)}}">{{$n->nombre}}</a></li>
    @endforeach
@endsection

@section('contenido')





<body class="sticky-header">
  
    <a href="#main-wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- Back To Top End Here -->
    <div id="main-wrapper" class="fh-main-wrapper">

        

        <section class="inner-section">
            <div class="container">
                <div class="row gutters-40">
                    <div class="col-xl-9 col-lg-8">
                        <div class="single-post-layout1">
                            <div class="post-details">
                                
                                
                                <h1 class="post-title">{{$noticia->titulo}} </h1>
                                <div class="entry-meta">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <div class="post-meta-dark">
                                                <ul>
                                                    <li class="post-author">
                                                        <div class="author-icon bg-green">
                                                            <i class="flaticon-user"></i>
                                                        </div>
                                                        <div class="author-content">
                                                            <div class="item-text">Posteado por:</div>
                                                        <div class="author-name"><a>{{$noticia->administrador->email}}</a></div>
                                                        </div>
                                                    </li>
                                                    <div class="post-date"><i class="flaticon-clock"></i> {{Carbon\Carbon::parse($noticia->created_at)->format('d/m/Y H:i:s')}}</div>
                                                </ul>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                            <p> {{$noticia->parrafo_1}}</p>
                                <p></p>
                                <blockquote>
                                    {{--viñeta--}}
                                    {{$noticia->subtitulo}}
                                </blockquote>
                                <div class="col-md-10 .img-responsive center-block">
                                    <img src="{{ url('noticiasimages/'.$noticia->imagen_2)}}" alt="Games" class="img-responsive"/>
                                    <div class="h-30"></div>
                                  </div>
                                <br>

                         
                                <p>{{$noticia->parrafo_2}}</p>
                                {{--CARRUSEL--}}
                                <div class="col-xl-12 ">
                                <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($noticia->noticiasImages as $noticiaImage)
                                            @if ($loop->first)
                                                <div class="carousel-item active">
                                                    <img src="{{ url('carrusel/'.$noticiaImage->url_imagen)}}" class="d-block w-100" alt="...">
                                                </div>
                                            @else
                                                <div class="carousel-item">
                                                    <img src="{{ url('carrusel/'.$noticiaImage->url_imagen)}}" class="d-block w-100" alt="...">
                                                </div>
                                            @endif
                                        @endforeach
                                    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
                                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Anterior</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
                                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                      <span class="sr-only">Siguiente</span>
                                    </a>
                                  </div>
                                </div>

                                  {{--@foreach ($noticia->noticiasImages as $noticiaImage)
                                  @if ($loop->first) First Item:
                                        {{$noticiaImage->url_imagen}}
                                       @else
                                       {{$noticiaImage->url_imagen}}
                                       @endif
                                        @endforeach --}}


                                {{--<ul class="related-tag">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Racing</a></li>
                                    <li><a href="#">Games</a></li>
                                </ul>
                            </div>
 
                            <div class="post-comments">
                                <div class="heading-layout3">
                                    <h3 class="heading-title-md">03 Comments</h3>
                                </div>
                                <div class="comment-box" >
                                    @foreach ($torneo->comments as $comment)

                                        <div class="media" style="margin-top:55px">
                                            <div class="item-img">
                                                <img src="{{ url('jugadorimages/'.$comment->jugador->logo)}}" style="height: 105px; width: 105px;" alt="logo">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title">{{$comment->jugador->nickname}}<span>September 29, 2019</span></h4>
                                                <p>{{$comment->comment}}</p>
                                                
                                            </div>
                                           
                                        </div>
                                        <div class="comment-box" >
                                            @foreach ($comment->comment_comments as $co_coment)
                                                
                                                    <div class="media" style="margin-left:55px">
                                                        <div class="item-img">
                                                            <img src="{{ url('jugadorimages/'.$co_coment->jugador->logo)}}" style="height: 105px; width: 105px;" alt="logo">

                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title">{{$co_coment->jugador->nickname}}<span>September 29, 2019</span></h4>
                                                            <p>{{$co_coment->comentario}}</p>
                                                        </div>  
                                                    </div>
                                            @endforeach--}}
                                        {{--}}    @if(Auth::guard('web')->check())
                                                <div class="media" style="margin-left:55px">
                                                    <div class="item-img">
                                                        <img src="{{ url('jugadorimages/'.auth("web")->user()->logo) }}" style="height: 105px; width: 105px;" alt="logo">
                                                    </div>
                                                    
                                                    <div class="media-body">
                                                        <form action="" method="post">
                                                            <div class="form-group">
                                                                <textarea class="form-control" placeholder="Write comment..." id="{{$comment->id}}"></textarea>
                                                                <a onclick="FuncResponder({{$comment->id}},{{auth('web')->user()->id}})"  class="reply-btn2">Responder</a>
                                                            </div>
                                                        </form>
                                                    </div>  
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach--}}
                                    <div id="comentario_nuevo"></div>
                                   {{--}} @if(Auth::guard('web')->check())
                                    <div class="media"  style="margin-top:55px">
                                        <div class="item-img">
                                            <img src="{{ url('jugadorimages/'.auth("web")->user()->logo) }}" style="height: 105px; width: 105px;" alt="logo">
                                        </div>
                                        <div class="media-body" >   
                                            <form action="" id="formulario-comentar"  method="POST">    
                                                {{ csrf_field() }}                                 
                                                <div class="form-group">
                                                    
                                                    <input type="hidden" value="{{$torneo->id}}" name="id_torneo" id="id_torneo" >
                                                    <input type="hidden" value="{{auth('web')->user()->id}}" name="id_jugador" id="id_jugador">
                                                    <textarea class="form-control" placeholder="Escribe commentario..." name="comment" id="comment"></textarea>
                                                </div>     
                                                <input type="button" id="btn-comentar"  value="comentar" > 
                                            </form>                                                                      
                                        </div>  
                                    </div>
                                     @endif--}}
                                </div>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>



    </div>
    @stop
@extends('layouts.layout')

@section('contenido')
<section class="inner-section">
    <div class="container">
        <div class="row gutters-40">
            <div class="col-xl-9 col-lg-8">
                <div class="row">
                    <div class="col-lg-6">
                        <form action="{{url('jugadores/perfil/actualizar')}}" method="post" enctype="multipart/form-data">
                        <img src="{{url('jugadorimages/'.$jugador->logo)}}" class="m-x-auto img-fluid img-circle" alt="avatar">
              
                        <label class="custom-file">
                            <input type="file" id="file" class="custom-file-input" id="imgPerfil" name="imgPerfil">
                            <span class="btn btn-primary">Cambiar foto de perfil</span>
                        </label>
                       
                    </div>
                    <div class="col-lg-4">
                    
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
                            <h6>Nickname</h6>
                            <p>
                            <input type="hidden" class="form-control" id="id" name ="id" value="{{$jugador->id}}">
                            <input type="text" class="form-control" id="nickname" name="nickname" value="{{$jugador->nickname}}">
                            </p>
                            <h6>Nombre Completo</h6>
                            <p>
                            <input type="text" class="form-control" id="nombre_completo" name="nombre_completo" value="{{$jugador->nombre_completo}}">
                            </p>
                            {{--<h6>Password</h6>
                            <p>
                            <input type="text" class="form-control" id="password" name="password" value="{{$jugador->password}}">
                            </p>--}}
                            <h6>Pais</h6>
                            <p>
                            <select type="text" class="form-control" id="pais" name="pais">
                                <option value="Chile">Chile</option>
                                <option value="Perú">Perú</option>
                                <option value="Bolivia">Bolivia</option>
                                <option value="Argentina">Argentina</option>
                            </select>
                            </p>
                            <button type="submit" class="btn btn-primary">Guardar</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 sidebar-widget">
                <div class="widget widget-search">
                    <div class="input-group stylish-input-group">
                        <input type="text" class="form-control" placeholder="Search Story . . .">
                        <span class="input-group-addon">
                            <button type="submit">
                                <span class="flaticon-search" aria-hidden="true"></span>
                            </button>
                        </span>
                    </div>
                </div>
                <div class="widget widget-archive">
                    <div class="heading-layout1">
                        <h3 class="heading-title">Categories</h3>
                    </div>
                    <ul class="archive-list">
                        <li>
                            <a href="#">Action<span>(12)</span></a>
                        </li>
                        <li>
                            <a href="#">Racing<span>(4)</span></a>
                        </li>
                        <li>
                            <a href="#">Football<span>(11)</span></a>
                        </li>
                        <li>
                            <a href="#">Fight<span>(79)</span></a>
                        </li>
                        <li>
                            <a href="#">Animation<span>(4)</span></a>
                        </li>
                        <li>
                            <a href="#">Boxing<span>(11)</span></a>
                        </li>
                    </ul>
                </div>
                <div class="widget widget-social">
                    <div class="heading-layout1">
                        <h2 class="heading-title">Follow Us On</h2>
                    </div>
                    <div class="social-box">
                        <div class="media">
                            <div class="item-icon bg-fb">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <div class="media-body bg-fb2">
                                <div class="item-title text-white">Followers</div>
                                <div class="follower-number text-white">10,555</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-icon bg-twitter">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <div class="media-body bg-twitter2">
                                <div class="item-title text-white">Followers</div>
                                <div class="follower-number text-white">19,555</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-icon bg-google-plus">
                                <i class="fab fa-google-plus-g"></i>
                            </div>
                            <div class="media-body bg-google-plus2">
                                <div class="item-title text-white">Followers</div>
                                <div class="follower-number text-white">9,369</div>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-icon bg-dribble">
                                <i class="fab fa-dribbble"></i>
                            </div>
                            <div class="media-body bg-dribble2">
                                <div class="item-title text-white">Followers</div>
                                <div class="follower-number text-white">11,599</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget-upcoming-post">
                    <div class="heading-layout1">
                        <h2 class="heading-title">Upcoming Games</h2>
                    </div>
                    <div class="post-list-layout2">
                        <div class="media">
                            <div class="item-img">
                                <img src="media/post/post7.jpg" alt="Post">
                            </div>
                            <div class="media-body">
                                <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                <h4 class="post-title"><a href="single-post1.html">Hitlist ast Computer ar in the market ...</a></h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <img src="media/post/post8.jpg" alt="Post">
                            </div>
                            <div class="media-body">
                                <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                <h4 class="post-title"><a href="single-post1.html">Hitlist ast Computer ar in the market ...</a></h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <img src="media/post/post9.jpg" alt="Post">
                            </div>
                            <div class="media-body">
                                <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                <h4 class="post-title"><a href="single-post1.html">Hitlist ast Computer ar in the market ...</a></h4>
                            </div>
                        </div>
                        <div class="media">
                            <div class="item-img">
                                <img src="media/post/post10.jpg" alt="Post">
                            </div>
                            <div class="media-body">
                                <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                <h4 class="post-title"><a href="single-post1.html">Hitlist ast Computer ar in the market ...</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget-tags">
                    <div class="heading-layout1">
                        <h2 class="heading-title">Popular Tags</h2>
                    </div>
                    <ul class="tag-list">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Racing</a></li>
                        <li><a href="#">Mission</a></li>
                        <li><a href="#">Wind</a></li>
                        <li><a href="#">Animation</a></li>
                        <li><a href="#">Cycling</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@extends('layouts.layout')

@section('li-torneos')
    @foreach ($torneos as $n)
        <li><a href="{{url('torneo/ver/'.$n->id)}}">{{$n->nombre}}</a></li>
    @endforeach
@endsection

@section('contenido')

<body class="sticky-header">
    <!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  	<![endif]-->
    <!-- Preloader Start Here -->
  
    <!-- Preloader End Here -->
    <!-- Back To Top Start Here -->
    <a href="#main-wrapper" data-type="section-switch" class="scrollup">
        <i class="fas fa-angle-double-up"></i>
    </a>
    <!-- Back To Top End Here -->
    <div id="main-wrapper" class="fh-main-wrapper">

        <!--=====================================-->
        <!--=           Header Menu Start      =-->
        <!--=====================================-->
       
        <!--=====================================-->
        <!--=           Inner Banner Start      =-->
        <!--=====================================-->
        <section class="inner-page-banner bg-common" data-bg-image="media/figure/banner1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>Single Post</h1>
                            <ul>
                                <li>
                                    <a href="index.html">Home</a>
                                </li>
                                <li>Post Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=         Single Post Start        	=-->
        <!--=====================================-->
        <section class="inner-section">
            <div class="container">
                <div class="row gutters-40">
                    <div class="col-xl-9 col-lg-8">
                        <div class="single-post-layout1">
                            <div class="post-details">
                                <div class="post-img">
                                    <img src="media/post/post69.jpg" alt="Post">
                                </div>
                                <div class="post-date"><i class="flaticon-clock"></i> 27 June, 2019</div>
                                <h2 class="post-title">{{$torneo->nombre}} </h2>
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
                                                            <div class="item-text">Posted by</div>
                                                        <div class="author-name"><a href="#">{{$torneo->administrador->email}}</a></div>
                                                        </div>
                                                    </li>
                                                    <li class="meta-action"><i class="flaticon-heart"></i>2,350</li>
                                                    <li class="meta-action"><i class="flaticon-comment-white-oval-bubble"></i>1,380</li>
                                                </ul>
                                            </div>
                                        </div>
                                    
                                    </div>
                                </div>
                                <p>Rimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>
                                <p>Rimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
                                <blockquote>
                                    Srem Ipsum is simply dummy text of the printing and typ esetting industry. Ipsum has been the industry's standard dummy text eorem Ipsum is simply the industry's standard .
                                </blockquote>
                                <p>Rimply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions</p>
                                <ul class="related-tag">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Racing</a></li>
                                    <li><a href="#">Games</a></li>
                                </ul>
                            </div>
 
                            <div class="post-comments">
                                <div class="heading-layout3">
                                    <h3 class="heading-title-md">03 Comments</h3>
                                </div>
                                <div class="comment-box">
                                    @foreach ($torneo->comments as $comment)

                                        <div class="media">
                                            <div class="item-img">
                                                <img src="media/post/author2.jpg" alt="logo">
                                            </div>
                                            <div class="media-body">
                                                <h4 class="item-title">{{$comment->jugador->nickname}}<span>September 29, 2019</span></h4>
                                                <p>{{$comment->comment}}</p>
                                                <a href="#" class="reply-btn">Responder</a>
                                            </div>
                                           
                                        </div>
                                        <div class="comment-box" style="margin-left:45px">
                                            @foreach ($comment->comment_comments as $co_coment)
                                                
                                                    <div class="media">
                                                        <div class="item-img">
                                                            <img src="media/post/author2.jpg" alt="logo">
                                                        </div>
                                                        <div class="media-body">
                                                            <h4 class="item-title">{{$co_coment->jugador->nickname}}<span>September 29, 2019</span></h4>
                                                            <p>{{$co_coment->comentario}}</p>
                                                        </div>  
                                                    </div>
                                                
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="comment-form">
                                <div class="heading-layout3">
                                    <h3 class="heading-title-md">Leave a Comment</h3>
                                </div>
                                <form action="#">
                                    <div class="row guuters-25">
                                        <div class="col-lg-4 form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name *">
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Email *">
                                        </div>
                                        <div class="col-lg-4 form-group">
                                            <input type="text" class="form-control" name="website" placeholder="Website *">
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <textarea placeholder="Message" class="textarea form-control" name="message" rows="7" cols="20"></textarea>
                                        </div>
                                        <div class="col-lg-12 form-group">
                                            <button type="submit" class="submit-btn disabled">SUBMIT NOW</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=           Social Start        	=-->
        <!--=====================================-->
       
        <!--=====================================-->
        <!--=            Footer Start           =-->
        <!--=====================================-->
        <!--=====================================-->
        <!--=            Sidebar Start          =-->
        <!--=====================================-->
        <div class="sidebar-nav-menu" id="sidebar-nav">
            <button class="close-btn sidebar-toggle"><i class="fas fa-times"></i></button>
            <div class="sidebar-logo">
                <a href="index.html">
                    <img src="media/logo.png" alt="Side Logo">
                </a>
            </div>
            <ul class="menu-list">
                <li><a href="index.html">Home</a></li>
                <li><a href="category1.html">Games</a></li>
                <li><a href="#">Video</a></li>
                <li><a href="#">Blog</a></li>
                <li><a href="#">Pages</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
            <ul class="item-social">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
            </ul>
        </div>

        <!--=====================================-->
        <!--=      Header Search Start          =-->
        <!--=====================================-->
        <div id="header-search" class="header-search">
            <button type="button" class="close">×</button>
            <form class="header-search-form">
                <input type="search" value="" placeholder="Search here..." />
                <button type="submit" class="search-btn">
                    <i class="flaticon-search"></i>
                </button>
            </form>
        </div>

    </div>
    @stop
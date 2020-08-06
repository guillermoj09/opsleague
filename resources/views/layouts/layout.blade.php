<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Meta Data -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>OPSLEAGUE | HOME</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="media/favicon.png">
    
        <!-- Dependencies CSS -->
        <link rel="stylesheet" href="{{asset('dependencies/bootstrap/css/bootstrap.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/fontawesome/css/all.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/flaticon/flaticon.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/animate.css/css/animate.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.carousel.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/owl.carousel/css/owl.theme.default.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/magnific-popup/css/magnific-popup.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/sal/css/sal.css')}}"  type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/select2/css/select2.min.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/nivo-slider/nivo-slider.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dependencies/meanmenu/meanmenu.min.css')}}" type="text/css">
    
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{{asset('assets/css/app.css')}}" type="text/css">
        <!-- Google Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,700&display=swap" rel="stylesheet">
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0" nonce="p5e0uipQ"></script>
</head>

    <header class="header">
        <div id="header-topbar" class="header-topbar">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-8 ">
                        <div class="header-topbar-layout1">
                            <div class="header-top-left">
                                <ul>
                                    @guest
                                <li><i class="far fa-user"></i><a onClick = "abrirlogin();">Iniciar sesión</a>&nbsp / &nbsp<a href="{{route('registro')}}"> Registrar</a></li>
                                    @else
                                    <li><a href="{{ url('jugadores/perfil/ver/'.auth("web")->user()->id) }}">{{ auth('web')->user()->nickname }}</a></li>

                                    @endauth
                                   
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex justify-content-end">
                        <div class="header-topbar-layout1">
                            <div class="header-top-right">
                                <ul class="social-icon">
                                    <li><a href="https://www.facebook.com/OPTIMUSLEAGUE"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/opsleague/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCztOgB0QyMXHKrkB92tbISA"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://www.twitch.tv/opsleagues"><i class="fab fa-twitch"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rt-sticky-placeholder"></div>
        <div id="header-menu" class="header-menu menu-layout1">
            <div class="container">
                <div class="row no-gutters align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-area">
                            <a href="{{url('/')}}" class="temp-logo">
                                <img src="{{asset('media/main-logo.png')}}" alt="logo" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex justify-content-end position-static">
                        <nav id="dropdown" class="template-main-menu">
                            <ul>
                                <li>
                                    <a href="/">INICIO</a>
                                
                                </li>
                                <li>
                                    <a href="#">TORNEOS</a>
                                    <ul class="dropdown-menu-col-1">
                                        @yield('li-torneos')
                                        <!--
                                        <li>
                                            <a href="single-post1.html">Flash #1 CSGO</a>
                                        </li>
                                        <li>
                                            <a href="single-post1.html">Flash #2 CSGO</a>
                                        </li>
                                        <li>
                                            <a href="single-post1.html">Lanzamiento CS 1.6</a>
                                        </li>
                                        <li>
                                            <a href="single-post1.html">Flash CS 1.6</a>
                                        </li>-->
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">EQUIPOS</a>
                                    <ul class="dropdown-menu-col-1">
                                        <li>
                                            <a href="single-post1.html">CS:GO</a>
                                        </li>
                                        <li>
                                            <a href="single-post1.html">CS 1.6</a>
                                        </li>
                            
                                    </ul>
                                </li>
                                    <li>
                                    <a href="#">JUGADORES</a>
                                    <ul class="dropdown-menu-col-1">
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">RANKING</a>
                                    <ul class="dropdown-menu-col-1">
                                        <li>
                                            <a href="#">PLAYERS</a>
                                        </li>
                                        <li>
                                            <a href="#">TEAMS</a>
                                        </li>
                                    </ul>
                                </li>
                                                        <li>
                                    <a href="#">BLACKLIST</a>
                                    <ul class="dropdown-menu-col-1">
                                    
                                        <li>
                                            <a href="http://www.bigamers.cl/blacklist.html">CS 1.6</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="contact.html">CONTACTO</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 d-flex justify-content-end">
                        <div class="header-action-layout1">
                            <ul>
                                <li class="search-btn">
                                    <a href="#header-search" title="Search">
                                        <i class="flaticon-search"></i>
                                    </a>
                                </li>
                                <li class="toggle-btn">
                                    <button class="btn-icon sidebar-toggle">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    @yield('contenido')

    <footer class="footer-wrap">
        <div class="footer-top-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="footer-box">
                            <h3 class="footer-box-title">
                                Accesos
                            </h3>
                            <div class="footer-link">
                                <ul>
            <li><a href="#">Torneos</a></li>
            <li><a href="#">Equipos</a></li>
            <li><a href="#">Jugadores</a></li>
                                </ul>
                                <ul>
            <li><a href="#">Ranking</a></li>
            <li><a href="#">Blacklist</a></li>
            <li><a href="#">Contacto</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="footer-box text-lg-center">
                            <div class="footer-logo">
                                <a href="index.html"><img src="{{asset('media/logo.png')}}" alt="logo"></a>
                            </div>
                            <p>Equipo de jugadores experimentados dedicados a los esports con el objetivo de gestionar torneos profesionales y transparentes para nuestros gamers.</p>
                            
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="footer-box">
                            <h3 class="footer-box-title">
                                Siguenos en :
                            </h3>
                            <div class="footer-social">
                                <ul class="social-icon">
                                    <li><a href="https://www.facebook.com/OPTIMUSLEAGUE"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://www.instagram.com/opsleague/"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UCztOgB0QyMXHKrkB92tbISA"><i class="fab fa-youtube"></i></a></li>
                                    <li><a href="https://www.twitch.tv/opsleagues"><i class="fab fa-twitch"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-wrap">
            <div class="container">
                <div class="footer-copyright">Copyright@2020 OPSLeague. Todos los derechos reservados</div>
            </div>
        </div>
    </footer>
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
    </div><div id="header-search" class="header-search">
        <button type="button" class="close">×</button>
        <form class="header-search-form">
            <input type="search" value="" placeholder="Search here..." />
            <button type="submit" class="search-btn">
                <i class="flaticon-search"></i>
            </button>
        </form>
    </div>
    @include('auth/login')
</div>
<!-- Dependencies Js -->
<script src="{{asset('dependencies/jquery/js/jquery.min.js')}}"></script>
<script src="{{asset('dependencies/popper.js/js/popper.min.js')}}"></script>
<script src="{{asset('dependencies/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dependencies/nivo-slider/jquery.nivo.slider.js')}}"></script>
<script src="{{asset('dependencies/nivo-slider/home.js')}}"></script>
<script src="{{asset('dependencies/owl.carousel/js/owl.carousel.min.js')}}"></script>
<script src="{{asset('dependencies/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('dependencies/sal/js/sal.js')}}"></script>
<script src="{{asset('dependencies/select2/js/select2.min.js')}}"></script>
<script src="{{asset('dependencies/isotope-layout/js/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('dependencies/imagesloaded/js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('dependencies/validator/validator.min.js')}}"></script>
<script src="{{asset('dependencies/meanmenu/jquery.meanmenu.min.js')}}"></script>

<style>
    .reply-btn2{
        color: #ffffff;
        border-radius: 0.25rem;
        padding: 0.5rem 1rem;
        background-color: #8b8b8b;
        font-size: 0.875rem;
        line-height: 1;
        position: absolute;
        /* top: 0; */
        right: 0;
    }



</style>
    <!-- Custom Js -->
<script src="{{asset('assets/js/app.js')}}"></script>
<script>

    function FuncResponder(idComment,idJugador){
        alert(idJugador);
        /*$.ajax({
            url: '/validacionLogin',
            method: 'POST',
            data: { coment_id : id},
            success: function(respuesta) {
                location.reload();
            }
        });*/
    }

    $("#btn-comentar").click(function(){
        let formu = $("#formulario-comentar").serialize();
        //console.log(formu);
        $.ajax({
            url: '/crearComentario',
            method: 'POST',
            data: formu,
            success: function(respuesta) {
                console.log(respuesta);
                $("#comentario_nuevo").html(respuesta);
            }
        });
    });

    function abrirlogin(){
        $('#exampleModal').modal('show');
    }

    $("#botonValidar").click(function(){

        let formulario = $("#formulario-login").serialize();
        //console.log(formulario);
        $.ajax({

            url: '/validacionLogin',
            method: 'POST',
            data: formulario,
            success: function(respuesta) {
                location.reload();
            },
            error: function(error) {

                let errores = error.responseJSON.errors;

                if(errores.hasOwnProperty('email')){
                    alert(errores.email[0]);
                }else if(errores.hasOwnProperty('password')){
                    alert(errores.password[0]); 
                }else{
                    alert(errores.login[0]);
                }
                
            }
        });
    });


</script>
</html>
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
    <link rel="stylesheet" href="{{asset('dependencies/dropzone/dist/dropzone.css')}}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
    <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
   
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" >Administrador:</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item active">
        <a class="nav-link" href="{{url('admin/home')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('admin/noticias')}}">Noticias</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('admin/torneos')}}">Torneos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{url('admin/highlight')}}">Highlights</a>
        </li>
      </ul>
    </div>
  </nav>

  @yield('contenido')


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
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('dependencies/dropzone/dist/dropzone.js')}}"></script>
    <!-- Custom Js -->
<script src="{{asset('assets/js/app.js')}}"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );

    $("#btnajax").click(function(){
      
      $.ajax({
            url: '/pruebaajax',
            method: 'GET',
            success: function(respuesta) {
                alert(respuesta);
                console.log(respuesta);
            }
        });


    });


    
</script>


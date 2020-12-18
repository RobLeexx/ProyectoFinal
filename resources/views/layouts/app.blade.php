<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MascotaPerdida</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="{{url('bootstrap/css/bootstrap.min.css')}}" />

    <link href="{{url('dist/css/main.css')}}" rel="stylesheet">
    <link href="{{url('dist/css/font-style.css')}}" rel="stylesheet">
    <link href="{{url('dist/css/flexslider.css')}}" rel="stylesheet">

    <script type="text/javascript" src="{{asset('dist/js/jquery.js')}}"></script>    
    <script type="text/javascript" src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>

	<script type="text/javascript" src="{{asset('dist/js/lineandbars.js')}}"></script>
    
	<script type="text/javascript" src="{{asset('dist/js/dash-charts.js')}}"></script>
	<script type="text/javascript" src="{{asset('dist/js/gauge.js')}}"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="{{asset('dist/js/noty/jquery.noty.js')}}"></script>
	<script type="text/javascript" src="{{asset('dist/js/noty/layouts/top.js')}}"></script>
	<script type="text/javascript" src="{{asset('dist/js/noty/layouts/topLeft.js')}}"></script>
	<script type="text/javascript" src="{{asset('dist/js/noty/layouts/topRight.js')}}"></script>
	<script type="text/javascript" src="{{asset('dist/js/noty/layouts/topCenter.js')}}"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="{{asset('dist/js/noty/themes/default.js')}}"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="{{asset('http://code.highcharts.com/highcharts.js')}}"></script>
	<script src="{{asset('')}}dist/js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="{{asset('')}}dist/js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>
	<link href="{{url('http://fonts.googleapis.com/css?family=Raleway:400,300')}}" rel="stylesheet" type="text/css">
  	<link href="{{url('http://fonts.googleapis.com/css?family=Open+Sans')}}" rel="stylesheet" type="text/css">

<script type="text/javascript">
    $(document).ready(function () {

        $("#btn-blog-next").click(function () {
            $('#blogCarousel').carousel('next')
        });
        $("#btn-blog-prev").click(function () {
            $('#blogCarousel').carousel('prev')
        });

        $("#btn-client-next").click(function () {
            $('#clientCarousel').carousel('next')
        });
        $("#btn-client-prev").click(function () {
            $('#clientCarousel').carousel('prev')
        });

    });

    $(window).load(function () {

        $('.flexslider').flexslider({
            animation: "slide",
            slideshow: true,
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });

</script>    
  </head>
  <body>
  
  	<!-- NAVIGATION MENU -->

    <div class="navbar-nav navbar-inverse navbar-fixed-top">
        <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{url('/')}}"><img src="images/logo30.png" alt=""> MascotaPerdida</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li><a href="{{url('/')}}"><i class="icon-home icon-white"></i> Inicio</a></li>                            
              <li><a href="{{url('usuarios')}}"
                    class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Usuarios
                        <?php use App\Models\User; $users_count = User::all()->count(); ?>
                        <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                    </p>
                    </a></li>
              <li><a href="{{url('perdidos')}}"><i class="icon-lock icon-white"></i> Perdidos</a></li>
              <li><a href="{{url('encontrados')}}"><i class="icon-user icon-white"></i> Encontrados</a></li>
				<li><form class="form-inline ml-3">
					<a>
						<div class="input-group input-group-sm">
						<input class="form-control form-control-navbar" name="search" type="search" size="70" placeholder="Buscar (especie, raza, sexo...)" aria-label="Search">
						<div class="input-group-append">
						<i class="fas fa-search"></i>
						</div>
					</a>
					</div>
				</form>
				</li>
              <li>
                @guest
                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                @else
                <a>{{ Auth::user()->name }}</a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                    Cerrar Sesión
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                    style="display: none;">
                    @csrf
                </form>
                </li>
                @endguest
            </li>
            </ul>
          </div>
        </div>
    </div></br></br>
</br></br><div class="container">
        <section class="content">
            @yield('content')
        </section>
	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

	<div id="footerwrap">
      	<footer class="clearfix"></footer>
      	<div class="container">
      		<div class="row">
      			<div class="col-sm-12 col-lg-12">
      			<p><img src="images/logo.png" alt=""></p>
      			<p>Roberto Millán_ProyectoMascotas 2020</p>
      			</div>

      		</div><!-- /row -->
      	</div><!-- /container -->		
	</div><!-- /footerwrap -->
          
</body></html>
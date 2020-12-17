<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"><head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Encuentra tu mascota</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />

    <link href="dist/css/main.css" rel="stylesheet">
    <link href="dist/css/font-style.css" rel="stylesheet">
    <link href="dist/css/flexslider.css" rel="stylesheet">

    <script type="text/javascript" src="dist/js/jquery.js"></script>    
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="dist/js/lineandbars.js"></script>
    
	<script type="text/javascript" src="dist/js/dash-charts.js"></script>
	<script type="text/javascript" src="dist/js/gauge.js"></script>
	
	<!-- NOTY JAVASCRIPT -->
	<script type="text/javascript" src="dist/js/noty/jquery.noty.js"></script>
	<script type="text/javascript" src="dist/js/noty/layouts/top.js"></script>
	<script type="text/javascript" src="dist/js/noty/layouts/topLeft.js"></script>
	<script type="text/javascript" src="dist/js/noty/layouts/topRight.js"></script>
	<script type="text/javascript" src="dist/js/noty/layouts/topCenter.js"></script>
	
	<!-- You can add more layouts if you want -->
	<script type="text/javascript" src="dist/js/noty/themes/default.js"></script>
    <!-- <script type="text/javascript" src="assets/js/dash-noty.js"></script> This is a Noty bubble when you init the theme-->
	<script type="text/javascript" src="http://code.highcharts.com/highcharts.js"></script>
	<script src="dist/js/jquery.flexslider.js" type="text/javascript"></script>

    <script type="text/javascript" src="dist/js/admin.js"></script>
      
    <style type="text/css">
      body {
        padding-top: 60px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
   

  	<!-- Google Fonts call. Font Used Open Sans & Raleway -->
	<link href="http://fonts.googleapis.com/css?family=Raleway:400,300" rel="stylesheet" type="text/css">
  	<link href="http://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet" type="text/css">

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
          <a class="navbar-brand" href="index.html"><img src="images/logo30.png" alt=""> Encuentra tu mascota</a>
        </div> 
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.html"><i class="icon-home icon-white"></i> Inicio</a></li>                            
              <li><a href="usuarios"
                    class="{{ Request::path() === 'usuarios' ? 'nav-link active' : 'nav-link' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>
                        Usuarios
                        <?php use App\Models\User; $users_count = User::all()->count(); ?>
                        <span class="right badge badge-danger">{{ $users_count ?? '0' }}</span>
                    </p>
                    </a></li>
              <li><a href="login.html"><i class="icon-lock icon-white"></i> Perdidos</a></li>
              <li><a href="user.html"><i class="icon-user icon-white"></i> Encontrados</a></li>
              <li><a><i class="icon-user icon-white"></i> &nbsp</a></li>
              <li><a><i class="icon-user icon-white"></i> &nbsp</a></li>
              <li><a><i class="icon-user icon-white"></i> &nbsp</a></li>
              <li><a><i class="icon-user icon-white"></i> &nbsp</a></li>
              <li><a><i class="icon-user icon-white"></i> &nbsp</a></li>
              <li><a><i class="icon-user icon-white"></i> &nbsp</a></li>
              <li><a><i class="icon-user icon-white"></i> &nbsp</a></li>
              <li><a><i class="icon-user icon-white"></i> &nbsp</a></li>
              <li><a><i class="icon-user icon-white"></i> &nbsp</a></li>
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
    </div>

    <div class="container">
        <section class="content">
            @yield('content')
        </section>
	  <!-- FIRST ROW OF BLOCKS -->     
      <div class="row">

      <!-- USER PROFILE BLOCK -->
        <div class="col-sm-3 col-lg-12">
      		<div class="dash-unit">
	      		<dtitle>Perfil</dtitle>
	      		<hr>
				<div class="info-user">
                @guest
                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                @else
                {{ Auth::user()->name }}</div>
                @endguest
				<br>
					<div class="info-user">
						<span aria-hidden="true" class="li_user fs2"></span>
						<span aria-hidden="true" class="li_settings fs2"></span>
						<span aria-hidden="true" class="li_mail fs2"></span>
						<span aria-hidden="true" class="li_key fs2"></span>
					</div>
				</div>
        </div> 
      
	  <!-- SECOND ROW OF BLOCKS -->     
      <div class="row">
        <div class="col-sm-12 col-lg-12">

    </div><!-- /span3 -->
        
	  <!-- 30 DAYS STATS - CAROUSEL FLEXSLIDER -->     
        <div class="col-sm-3 col-lg-6">
      		<div class="dash-unit">
	      		<dtitle>Recientes</dtitle>
	      		<hr>
	      		<br>
	      		<br>
	            <div class="flexslider">
					<ul class="slides">
						<li><img src="images/slide01.png" alt="slider"></li>
						<li><img src="images/slide02.png" alt="slider"></li>
					</ul>
            </div>
				<div class="cont">
					<p>Encontrados</p>
				</div>   
			</div>
        </div>
      <div class="col-sm-3 col-lg-6">
      		<div class="dash-unit">
	      		<dtitle>Recientes</dtitle>
	      		<hr>
	      		<br>
	      		<br>
	            <div class="flexslider">
					<ul class="slides">
						<li><img src="images/slide01.png" alt="slider"></li>
						<li><img src="images/slide02.png" alt="slider"></li>
					</ul>
            </div>
				<div class="cont">
					<p>Perdidos</p>
				</div>   
			</div>
        </div>
      </div><!-- /row -->


 
	  <!-- THIRD ROW OF BLOCKS -->     
      <div class="row">
      	<div class="col-sm-3 col-lg-3">

	  <!-- LIVE VISITORS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Live Visitors</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>388</bold></p>
      			<p><img src="images/up-small.png" alt=""> 412 Max. | <img src="images/down-small.png" alt=""> 89 Min.</p>
	      		</div>
      		</div>
      		
	  <!-- PAGE VIEWS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Page Views</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>145.0K</bold></p>
      			<p><img src="images/up-small.png" alt=""> 23.88%</p>
	      		</div>
      		</div>
      	</div>

      	<div class="col-sm-3 col-lg-3">
	  <!-- TOTAL SUBSCRIBERS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Total Subscribers</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>14.744</bold></p>
      			<p>98 Subscribed Today</p>
	      		</div>
      		</div>
      		
	  <!-- FOLLOWERS BLOCK -->     
      		<div class="half-unit">
	      		<dtitle>Twitter Followers</dtitle>
	      		<hr>
	      		<div class="cont">
      			<p><bold>17.833 Followers</bold></p>
      			<p>SomeUser</p>
	      		</div>
      		</div>
      	</div>

	  <!-- LATEST NEWS BLOCK -->     
      	<div class="col-sm-3 col-lg-3">
      		<div class="dash-unit">
	      		<dtitle>Latest News</dtitle>
	      		<hr>
				<div class="info-user">
					<span aria-hidden="true" class="li_news fs2"></span>
				</div>
				<br>
      			<div class="text">
      				<p><b>Alvarez.is:</b> A beautiful new Dashboard theme has been realised by Carlos Alvarez. Please, visit <a href="http://alvarez.is">Alvarez.is</a> for more details.</p>
      				<p><grey>Last Update: 5 minutes ago.</grey></p>
      			</div>
      		</div>
      	</div>

	  <!-- NOTIFICATIONS BLOCK -->     
		<div class="col-sm-3 col-lg-3">
			<div class="dash-unit">
	      		<dtitle>Notifications</dtitle>
	      		<hr>
	      		<div class="info-user">
					<span aria-hidden="true" class="li_bubble fs2"></span>
				</div>
	      		<div class="cont">
	      			<p><button class="btnnew noty" data-noty-options="{&quot;text&quot;:&quot;This is a success notification&quot;,&quot;layout&quot;:&quot;topRight&quot;,&quot;type&quot;:&quot;success&quot;}">Top Right</button></p>
	      			<p><button class="btnnew noty" data-noty-options="{&quot;text&quot;:&quot;This is an informaton notification&quot;,&quot;layout&quot;:&quot;topLeft&quot;,&quot;type&quot;:&quot;information&quot;}">Top Left</button></p>
	      			<p><button class="btnnew noty" data-noty-options="{&quot;text&quot;:&quot;This is an alert notification with fade effect.&quot;,&quot;layout&quot;:&quot;topCenter&quot;,&quot;type&quot;:&quot;alert&quot;,&quot;animateOpen&quot;: {&quot;opacity&quot;: &quot;show&quot;}}">Top Center (fade)</button></p>
	      		</div>
			</div>
		</div>
	</div><!--/row -->     
      
 	  <!-- FOURTH ROW OF BLOCKS -->     
		<div class="row">

 	  <!-- ACCORDION BLOCK -->     
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
	      		<dtitle>Accordion</dtitle>
	      		<hr>
					<div class="accordion" id="accordion2">
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
		                        Collapsible Group Item #1
		                        </a>
		                    </div>
		                    <div id="collapseOne" class="accordion-body collapse in">
		                        <div class="accordion-inner">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem.                        
								</div>
		                    </div>
		                </div>
		
		                <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
		                        Collapsible Group Item #2
		                        </a>
		                    </div>
		                    <div id="collapseTwo" class="accordion-body collapse">
		                        <div class="accordion-inner">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem.                      
								</div>
		                    </div>
		                </div>
		
		                 <div class="accordion-group">
		                    <div class="accordion-heading">
		                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
		                        Collapsible Group Item #3
		                        </a>
		                    </div>
		                    <div id="collapseThree" class="accordion-body collapse">
		                        <div class="accordion-inner">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem.                        
		                        </div>
		                    </div>
		                </div>
		            </div><!--/accordion -->
				</div>
			</div>
			
			<div class="col-sm-3 col-lg-3">

 	  		<!-- LAST USER BLOCK -->     
				<div class="half-unit">
	      		<dtitle>Last Registered User</dtitle>
	      		<hr>
	      			<div class="cont2">
	      				<img src="images/user-avatar.jpg" alt="">
	      				<br>
	      				<br>
	      				<p>Paul Smith</p>
	      				<p><bold>Liverpool, England</bold></p>
	      			</div>
				</div>
				
 	  		<!-- MODAL BLOCK -->     
				<div class="half-unit">
	      		<dtitle>Modal</dtitle>
	      		<hr>
		            <div class="cont">
		                <a href="#myModal" role="button" class="btnnew" data-toggle="modal">Example Modal Window</a>
		            </div>
				</div>
			</div>
			<!-- Modal -->
			  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			          <h4 class="modal-title">Modal title</h4>
			        </div>
			        <div class="modal-body">
			          ...
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			          <button type="button" class="btn btn-primary">Save changes</button>
			        </div>
			      </div><!-- /.modal-content -->
			    </div><!-- /.modal-dialog -->
			  </div><!-- /.modal -->
 	  		<!-- FAST CONTACT BLOCK -->     
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
	      		<dtitle>Fast Contact</dtitle>
	      		<hr>
	      		<div class="cont">
                	<form action="#get-in-touch" method="POST" id="contact">
                    	<input type="text" id="contactname" name="contactname" placeholder="Name">
                    	<input type="text" id="email" name="email" placeholder="Email">
                    	<div class="textarea-container"><textarea id="message" name="message" placeholder="Message"></textarea></div>
                    	<input type="submit" id="submit" name="submit" value="Send">
                    </form>
				</div>
				</div>
			</div>

 	  		<!-- INFORMATION BLOCK -->     
			<div class="col-sm-3 col-lg-3">
				<div class="dash-unit">
	      		<dtitle>Block Dashboard</dtitle>
	      		<hr>
	      		<div class="info-user">
					<span aria-hidden="true" class="li_display fs2"></span>
				</div>
				<br>
				<div class="text">
				<p>Block Dashboard created by Basicoh.</p>
				<p>Special Thanks to Highcharts, Linecons and Bootstrap for their amazing tools.</p>
				</div>

				</div>
			</div>

		</div><!--/row -->
     
      
      
	</div> <!-- /container -->
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
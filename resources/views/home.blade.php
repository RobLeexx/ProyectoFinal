@extends('layouts.app')

@section('content')

     <!-- USER PROFILE BLOCK -->
     <div class="col-sm-3 col-lg-12">
      		<div class="dash-unit">
	      		<dtitle>Perfil</dtitle>
	      		<hr>
				<div class="info-user">
                @guest
				<a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
				<a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
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
	  
	<div class="row" style="color:#ffffff";>
		<h3>Sobre nosotros</h3>
		<p>Lorem ipsum dolor sit Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium quis incidunt sunt quaerat quisquam voluptas libero fuga, magni velit? Impedit, amet sapiente asperiores enim provident voluptatum maxime harum esse eius. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo culpa natus deserunt voluptatibus consectetur fugit, assumenda quisquam voluptate, minima non quos rerum velit asperiores nemo illum quasi aspernatur omnis ipsam. amet consectetur adipisicing elit. Animi vero eaque ad provident perferendis? Cum dolore non aspernatur ullam deleniti magnam. Maxime quo reprehenderit libero rem minima voluptas tenetur ullam.</p>
		<div class="row">
		<div class="col-sm-6">
		<h2>Misión</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi vero eaque ad provident perferendis? Cum dolore non aspernatur ullam deleniti magnam. Maxime quo reprehenderit libero rem minima voluptas tenetur ullam.</p>
		</div>
		<div class="col-sm-6">
		<h2>Visión</h2>
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi vero eaque ad provident perferendis? Cum dolore non aspernatur ullam deleniti magnam. Maxime quo reprehenderit libero rem minima voluptas tenetur ullam.</p>
		</div>
		</div>
	</div>
	<br>
	</div> <!-- /container -->

@endsection

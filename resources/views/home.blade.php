@extends('app')

@section('main-content')

<style>

	.nav-link {
		font-size: 18px !important;
		text-shadow: 0px 0px 8px rgba(109,227,29); 
	}

	.carousel-caption {
		-webkit-text-stroke: 0.2px black;
		text-stroke: 0.2px black;
		text-shadow: 0px 0px 4px rgba(0,0,0); 
	}
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">
			<img src="{{ url('/images/logo_light.svg'); }}" width="350" height="120">
		</a>

		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="{{ route('session') }}" class="nav-link active" aria-current="page" href="#">Iniciar sesión</a>
				</li>
				<li class="nav-item">
					<a href="{{ route('plans') }}" class="nav-link active" aria-current="page" href="#">Planes</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Más información
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="{{ route('faq') }}">FAQ</a></li>
						<li><a class="dropdown-item" href="#">¿Cómo funciona?</a></li>
						<li><a class="dropdown-item" href="#">Acerca de nosotros</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>

<div class="container-sm">
	<div id="carouselExampleCaptions" class="carousel slide">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{ url('/images/home_carousel/1.png'); }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Componentes de calidad</h5>
					<p>Usamos las marcas más prestigiosas del mercado como Asus y Gigabyte.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ url('/images/home_carousel/2.png'); }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Hecho con cuidado y cariño ❤️</h5>
					<p>Nuestras builds están garantizadas y mantienen una compatibilidad insuperable.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ url('/images/home_carousel/3.png'); }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>❤️ Cuida tu planeta 🌎</h5>
					<p>Opta por este sistema basado en la reutilización de componentes.</p>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>
</div>

@endsection
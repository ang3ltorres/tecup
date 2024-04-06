@extends('app')

@section('main-content')

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
					<a class="nav-link active" aria-current="page" href="#">Iniciar sesión</a>
				</li>
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="#">Planes</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
						Más información
					</a>
					<ul class="dropdown-menu">
						<li><a class="dropdown-item" href="#">FAQ</a></li>
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
					<h5>First slide label</h5>
					<p>Some representative placeholder content for the first slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ url('/images/home_carousel/2.png'); }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5>
					<p>Some representative placeholder content for the second slide.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{ url('/images/home_carousel/3.png'); }}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5 style="color: blue;">Third slide label</h5>
					<p>Some representative placeholder content for the third slide.</p>
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

text

@endsection
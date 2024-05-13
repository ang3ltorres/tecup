<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECUP</title>
    <link rel="icon" href="{{ url('/images/logo_light.svg') }}" type="image/svg">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        /* Estilos para hacer que el contenedor de partículas ocupe toda la pantalla */
        #particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1; /* Asegura que esté por delante de todo el contenido */
        }
		.navbar {
        z-index: 2; /* Asegura que esté por delante del contenedor de partículas */
    }
	.carousel-container {
            position: relative;
            z-index: 0; /* Asegura que esté detrás del contenido */
        }
    </style>
</head>
<body>
<!-- particles.js container -->
<div id="particles-js"></div>

<!-- stats - count particles -->
<div class="count-particles">
    <span class="js-count-particles"></span>
</div>

<!-- stats.js lib -->
<script src="http://threejs.org/examples/js/libs/stats.min.js"></script>

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

    .nav-link {
    text-decoration: none;
    color: #0a0a0a; /* Cambia el color del texto según tus preferencias */
    transition: opacity 0.3s; /* Transición suave de la opacidad */
    }

    .nav-link:hover {
        opacity: 0.7; /* Opacidad reducida al pasar el mouse sobre el enlace */
    }
    
</style>

<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand">
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

<!-- Agregar el código JavaScript -->
<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Agregamos jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script> <!-- Agregamos Bootstrap JavaScript -->
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 100,
                "density": {
                    "enable": true,
                    "value_area": 400.8530152163807
                }
            },
            "color": {
                "value": "#1eff45"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#000000"
                },
                "polygon": {
                    "nb_sides": 5
                },
                "image": {
                    "src": "img/github.svg",
                    "width": 100,
                    "height": 100
                }
            },
            "opacity": {
                "value": 1,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 1,
                    "opacity_min": 0,
                    "sync": false
                }
            },
            "size": {
                "value": 4,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 4,
                    "size_min": 0.3,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
            },
            "move": {
                "enable": true,
                "speed": 1,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 600
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "bubble"
                },
                "onclick": {
                    "enable": true,
                    "mode": "repulse"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 400,
                    "line_linked": {
                        "opacity": 1
                    }
                },
                "bubble": {
                    "distance": 250,
                    "size": 0,
                    "duration": 2,
                    "opacity": 0,
                    "speed": 3
                },
                "repulse": {
                    "distance": 400,
                    "duration": 0.4
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });
</script>
<script>
    $(document).ready(function() {
        // Código para hacer que el carrusel se mueva cada 10 segundos
        var carouselInterval = setInterval(function() {
            $('.carousel').carousel('next');
        }, 10000);

        // Detener el intervalo cuando el mouse entra al carrusel
        $('.carousel').on('mouseenter', function() {
            clearInterval(carouselInterval);
        });

        // Reanudar el intervalo cuando el mouse sale del carrusel
        $('.carousel').on('mouseleave', function() {
            carouselInterval = setInterval(function() {
                $('.carousel').carousel('next');
            }, 10000);
        });
    });
</script>
</body>
</html>

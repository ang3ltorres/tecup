<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faq</title>
    <link rel="icon" href="{{ url('/images/logo_light.svg') }}" type="image/svg">
	<style>
		#particles-js {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Asegura que esté por delante de todo el contenido */
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
	.col-md-8 {
		margin: 8px;
	}
    body {
		background-image: url('/images/background-plans.jpg');
	}
</style>

<div class="container-fluid plain-text text-center">
    <nav class="navbar navbar-expand-lg" data-bs-theme="dark">
		<div class="container-fluid">
			<a class="navbar-brand">
				<img src="{{ url('/images/logo_light.svg'); }}" width="350" height="120">
			</a>
		</div>
	</nav>
	<a href="{{ route('home') }}" type="button" class="btn btn-close btn-close-white btn-lg" aria-label="Close"></a>
</div>

<div class="container">
	<div class="row justify-content-center">

		<div class="col-md-8">
			<div class="card question">
				<div class="card-header bg-success text-white">¿Cuáles son los beneficios de suscribirse a uno de sus planes?</div>
				<div class="card-body">Los beneficios de suscribirse a nuestros planes son diversos y dependen del tipo de uso que desees darle a tu sistema. Desde un rendimiento optimizado para tareas diarias hasta potencia de juego de última generación, nuestros planes están diseñados para adaptarse a tus necesidades específicas. Además, garantizamos que siempre tendrás acceso a hardware actualizado y de alta calidad, lo que te brinda una experiencia informática excepcional en todo momento.</div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="card question">
				<div class="card-header bg-success text-white">¿Cómo funciona el proceso de suscripción?</div>
				<div class="card-body">El proceso de suscripción es rápido y sencillo. Simplemente selecciona el plan que mejor se adapte a tus necesidades, completa el formulario de suscripción con tus datos y realiza el pago correspondiente. Una vez completado, nuestro equipo se encargará de configurar y enviar tu sistema en el plazo acordado.</div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="card question">
				<div class="card-header bg-success text-white">¿Qué pasa si quiero cambiar de plan?</div>
				<div class="card-body">Si deseas cambiar de plan, simplemente ponte en contacto con nuestro equipo de atención al cliente y estaremos encantados de ayudarte a realizar la transición. No hay ningún cargo adicional por cambiar de plan, y nos esforzaremos por hacer que el proceso sea lo más fácil posible para ti.</div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="card question">
				<div class="card-header bg-success text-white">¿Qué sucede si tengo un problema técnico con mi sistema?</div>
				<div class="card-body">Si experimentas algún problema técnico con tu sistema, nuestro equipo de soporte técnico está disponible para ayudarte. Puedes ponerte en contacto con nosotros a través de nuestro servicio de chat en vivo, por correo electrónico o por teléfono, y haremos todo lo posible para resolver tu problema de manera rápida y eficiente.</div>
			</div>
		</div>

		<div class="col-md-8">
			<div class="card question">
				<div class="card-header bg-success text-white">¿Qué sucede si quiero cancelar mi suscripción?</div>
				<div class="card-body">Si decides cancelar tu suscripción, puedes hacerlo en cualquier momento sin ningún cargo adicional. Solo tienes que ponerte en contacto con nuestro equipo de atención al cliente y te guiaremos a través del proceso de cancelación. Si es necesario, también te proporcionaremos instrucciones sobre cómo devolver el equipo.</div>
			</div>
		</div>
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
</body>
</html>

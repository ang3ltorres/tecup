<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Sesion</title>
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
        .container {
            display: flex;
            justify-content: flex-end; /* Alinea el contenido a la derecha */
            margin-right: 20px; /* Ajusta el margen derecho según sea necesario */
        }

        #btn-message {
            --text-color: rgb(255, 255, 255);
            --bg-color-sup: #5e5e5e;
            --bg-color: #2b2b2b;
            --bg-hover-color: #161616;
            --online-status: #00da00;
            --font-size: 16px;
            --btn-transition: all 0.2s ease-out;
        }

        .button-message {
            display: flex;
            align-items: center;
            font: 400 var(--font-size) Helvetica Neue, sans-serif;
            box-shadow: 0 0 2.17382px rgba(0,0,0,.049),0 1.75px 6.01034px rgba(0,0,0,.07),0 3.63px 14.4706px rgba(0,0,0,.091),0 22px 48px rgba(0,0,0,.14);
            background-color: var(--bg-color);
            border-radius: 68px;
            cursor: pointer;
            padding: 6px 10px 6px 6px;
            width: fit-content;
            height: 40px;
            border: 0;
            overflow: hidden;
            position: relative;
            transition: var(--btn-transition);
        }

        .button-message:hover {
            height: 56px;
            padding: 8px 20px 8px 8px;
            background-color: var(--bg-hover-color);
            transition: var(--btn-transition);
        }

        .button-message:active {
            transform: scale(0.99);
        }

        .content-avatar {
            width: 30px;
            height: 30px;
            margin: 0;
            transition: var(--btn-transition);
            position: relative;
        }

        .button-message:hover .content-avatar {
            width: 40px;
            height: 40px;
        }

        .avatar {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            overflow: hidden;
            background-color: var(--bg-color-sup);
        }

        .user-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .status-user {
            position: absolute;
            width: 6px;
            height: 6px;
            right: 1px;
            bottom: 1px;
            border-radius: 50%;
            outline: solid 2px var(--bg-color);
            background-color: var(--online-status);
            transition: var(--btn-transition);
            animation: active-status 2s ease-in-out infinite;
        }

        .button-message:hover .status-user {
            width: 10px;
            height: 10px;
            right: 1px;
            bottom: 1px;
            outline: solid 3px var(--bg-hover-color);
        }

        .notice-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            padding-left: 8px;
            text-align: initial;
            color: var(--text-color);
        }

        .username {
            letter-spacing: -6px;
            height: 0;
            opacity: 0;
            transform: translateY(-20px);
            transition: var(--btn-transition);
        }

        .user-id {
            font-size: 12px;
            letter-spacing: -6px;
            height: 0;
            opacity: 0;
            transform: translateY(10px);
            transition: var(--btn-transition);
        }

        .lable-message {
            display: flex;
            align-items: center;
            opacity: 1;
            transform: scaleY(1);
            transition: var(--btn-transition);
        }

        .button-message:hover .username {
            height: auto;
            letter-spacing: normal;
            opacity: 1;
            transform: translateY(0);
            transition: var(--btn-transition);
        }

        .button-message:hover .user-id {
            height: auto;
            letter-spacing: normal;
            opacity: 1;
            transform: translateY(0);
            transition: var(--btn-transition);
        }

        .button-message:hover .lable-message {
            height: 0;
            transform: scaleY(0);
            transition: var(--btn-transition);
        }

        .lable-message, .username {
            font-weight: 600;
        }

        .number-message {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            margin-left: 8px;
            font-size: 12px;
            width: 16px;
            height: 16px;
            background-color: var(--bg-color-sup);
            border-radius: 20px;
        }

        /*==============================================*/
        @keyframes active-status {
            0% {
                background-color: var(--online-status);
            }

            33.33% {
                background-color: #93e200;
            }

            66.33% {
                background-color: #93e200;
            }

            100% {
                background-color: var(--online-status);
            }
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
            <div class="container">
        <button id="btn-message" class="button-message">
            <div class="content-avatar">
                <div class="status-user"></div>
                <div class="avatar">
                    <svg class="user-img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12,12.5c-3.04,0-5.5,1.73-5.5,3.5s2.46,3.5,5.5,3.5,5.5-1.73,5.5-3.5-2.46-3.5-5.5-3.5Zm0-.5c1.66,0,3-1.34,3-3s-1.34-3-3-3-3,1.34-3,3,1.34,3,3,3Z"></path></svg>
                </div>
            </div>
            <div class="notice-content">
                <div class="username">{{ $user->name }}</div>
                <div class="lable-message">Message<span class="number-message">3</span></div>
                <div class="user-id">{{ $user->email }}</div>
            </div>
        </button>
    </div>
		</div>
	</nav>
	<a href="{{ route('session') }}" type="button" class="btn btn-close btn-close-white btn-lg" aria-label="Close"></a>
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

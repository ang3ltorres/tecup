<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
	body {
		background-image: url('/images/background-plans.jpg');
	}

	#register-form, #header-register {
		display: none;
	}

	.container {
		margin: 24px auto auto auto;
	}

	.btn-close {
		width: 64px;
		background-color: white !important;
		margin: 32px 0px 0px 0px;
		
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
		<div class="col-md-6">
			<div class="card">

				<div id="header-login" class="card-header">Iniciar sesión</div>
				<div id="header-register" class="card-header">Cerrar sesión</div>

				<div class="card-body" id="auth-form">
					<!-- Formulario de registro -->
					<form method="POST" action="{{ route('session') }}" id="register-form">
						@csrf

						<div class="form-group">
							<label for="name">Nombre</label>
							<input id="name" type="text" class="form-control" name="name">

							<label for="lastname">Apellidos</label>
							<input id="lastname" type="text" class="form-control" name="lastname">

							<label for="city">Ciudad</label>
							<input id="city" type="text" class="form-control" name="city">

							<label for="state">Estado</label>
							<input id="state" type="text" class="form-control" name="state">

							<div class="card-header">

								<label for="emailregister">Correo Electrónico</label>
								<input id="emailregister" type="email" class="form-control" name="email" placeholder="Ingresar correo">

								<label for="registerpassword">Contraseña</label>
								<input id="registerpassword" type="password" class="form-control" name="password">

								<label for="registerpasswordconfirm">Confirmar contraseña</label>
								<input id="registerpasswordconfirm" type="password" class="form-control" name="password_confirmation">

							</div>


						</div>

						<!-- Otros campos de registro -->

						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								{{ __('Registrar') }}
							</button>
							<button type="button" class="btn btn-link" id="show-login-form">¿Ya tienes una cuenta? Inicia Sesión</button>
						</div>
					</form>

					<!-- Formulario de inicio de sesión -->
					<form method="POST" action="{{ route('iniciar_sesion') }}" id="login-form">
						@csrf

						<div class="form-group">
							<label for="email">Correo Electrónico</label>
							<input id="email" type="email" class="form-control" name="email" placeholder="Ingresar correo">

							<label for="password">Contraseña</label>
							<input id="password" type="password" class="form-control" name="password" placeholder="Ingresar contraseña">
						</div>

						<!-- Otros campos de inicio de sesión -->
						<div class="form-group">
							<button type="submit" class="btn btn-primary">
								{{ __('Iniciar Sesión') }}
							</button>
							<button type="button" class="btn btn-link" id="show-register-form">¿No tienes una cuenta? Regístrate</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	document.addEventListener("DOMContentLoaded", function() {
		const registerForm = document.getElementById("register-form");
		const loginForm = document.getElementById("login-form");
		const showRegisterBtn = document.getElementById("show-register-form");
		const showLoginBtn = document.getElementById("show-login-form");

		// Función para mostrar el formulario de registro y ocultar el de inicio de sesión
		function showRegister() {
			registerForm.style.display = "block";
			loginForm.style.display = "none";
		}

		// Función para mostrar el formulario de inicio de sesión y ocultar el de registro
		function showLogin() {
			registerForm.style.display = "none";
			loginForm.style.display = "block";
		}

		// Evento al hacer clic en el botón para mostrar el formulario de inicio de sesión
		showLoginBtn.addEventListener("click", function() {
			showLogin();
		});

		// Evento al hacer clic en el botón para mostrar el formulario de registro
		showRegisterBtn.addEventListener("click", function() {
			showRegister();
		});
	});
</script>

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
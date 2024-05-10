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
					<form method="POST" id="register-form">
						@csrf

						<div class="form-group">
							<label for="name">Nombre</label>
							<input id="name" type="text" class="form-control" name="name">

							<label for="lastname">Apellido</label>
							<input id="lastname" type="text" class="form-control" name="lastname">

							<label for="street">Calle</label>
							<input id="street" type="text" class="form-control" name="street">

							<label for="postalcode">Código postal</label>
							<input id="postalcode" type="text" class="form-control" name="postalcode">

							<label for="city">Ciudad</label>
							<input id="city" type="text" class="form-control" name="city">

							<label for="state">Estado</label>
							<input id="state" type="text" class="form-control" name="state">

							<div class="card-header">

								<label for="registerpassword">Contraseña</label>
								<input id="registerpassword" type="password" class="form-control" name="registerpassword">

								<label for="registerpasswordconfirm">Confirmar contraseña</label>
								<input id="registerpasswordconfirm" type="password" class="form-control" name="registerpasswordconfirm">

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
					<form method="POST" id="login-form">
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

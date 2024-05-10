@extends('app')

@section('main-content')

<style>

	body {
		background-image: url('/images/background-plans.jpg');
	}

	.col-md-8 {
		margin: 8px;
	}

</style>

<div class="container-fluid plain-text text-center">
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

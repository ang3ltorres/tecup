@extends('app')

@section('main-content')

<style>

	body {
		background-image: url('/images/background-plans.jpg');
	}

	.text-center {
		font-size: 32px !important;
		text-shadow: 0px 0px 4px rgba(155, 255, 155);
		color: rgba(0, 255, 0)
	}

	.plain-text {
		font-size: 24px !important;
		color: white
	}

	.container {
		font-size: 12px !important;
	}

	.button {

		width: 64px !important;
		height: 64px !important;
		background-color: white !important;
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

<div class="container mt-5">
	<h2 class="text-center mb-4">Comparación</h2>
	<div class="table-responsive">
	  <table class="table table-bordered">
		<thead>
		  <tr>
			<th scope="col">Plan</th>
			<th scope="col">Básico</th>
			<th scope="col">Comfort</th>
			<th scope="col">Pro</th>
		  </tr>
		</thead>
		<tbody>
		  <tr>
			<th scope="row">Costo mensual</th>
			<td>$30 USD</td>
			<td>$60 USD</td>
			<td>$90 USD</td>
		  </tr>
		  <tr>
			<th scope="row">Storage</th>
			<td>512GB SSD</td>
			<td>1TB SSD</td>
			<td>2TB SSD</td>
		  </tr>
		  <tr>
			<th scope="row">CPU</th>
			<td>Intel Core I3-13100</td>
			<td>Intel Core I5-13400f</td>
			<td>Intel Core I9-14900K</td>
		  </tr>
		  <tr>
			<th scope="row">GPU</th>
			<td>Integrada</td>
			<td>Nvidia GTX 1650</td>
			<td>Nvidia RTX 3060</td>
		  </tr>
		  </tr>
		  <tr>
			<th scope="row">RAM</th>
			<td>16GB 3200Mhz DDR4 DC</td>
			<td>32GB 3200Mhz DDR4 DC</td>
			<td>64GB 3200Mhz DDR4 DC</td>
		  </tr>
		</tbody>
	  </table>
	</div>
</div>

<div class="container-fluid plain-text" >

	<div class="container-fluid plain-text text-center">
		¿Qué puedo hacer con mi PC? 🤔
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Plan Básico: Potencia para tus Tareas Diarias</h5>
						<p class="card-text">Sumérgete en la eficiencia sin esfuerzo con nuestro plan base. Equipado con un Intel Core i3-13100 y 16GB de RAM, este sistema está diseñado para manejar tus tareas diarias con facilidad. Desde navegar por la web hasta realizar múltiples tareas, experimenta un rendimiento fluido y receptivo. Con un SSD de 512GB, tus programas se cargarán al instante, mientras que la GPU integrada te permite disfrutar de contenido multimedia con claridad y detalle. Este plan es tu compañero perfecto para la productividad sin complicaciones y la diversión sin interrupciones.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Plan Comfort: Potencia Gaming Optimizada</h5>
						<p class="card-text">¡Prepárate para una inmersión total en el mundo del gaming! Nuestro segundo plan eleva tu experiencia con un Intel Core i5-13400F y una poderosa Nvidia GTX 1650. Experimenta juegos fluidos y gráficos impresionantes mientras te sumerges en mundos virtuales llenos de acción. Con 32GB de RAM y un SSD de 1TB, nunca tendrás que preocuparte por la velocidad o el espacio de almacenamiento. Este sistema está diseñado para ofrecerte un rendimiento excepcional en tus juegos favoritos, permitiéndote alcanzar nuevos niveles de entretenimiento y competencia.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
					<div class="card-body">
						<h5 class="card-title">Plan Pro: El Epítome del Poder de Procesamiento</h5>
						<p class="card-text">Haz que tus sueños se vuelvan realidad con nuestro plan de élite. Equipado con un Intel Core i9-14900K y una Nvidia RTX 3060, este sistema es la definición de potencia pura. Con 64GB de RAM y un SSD de 2TB, estarás listo para enfrentar cualquier desafío, desde tareas intensivas en recursos hasta juegos de última generación con la máxima fidelidad visual. Experimenta una velocidad sin igual, gráficos impresionantes y un rendimiento inigualable con este plan diseñado para los exigentes. Domina cualquier tarea y conquista cualquier juego con esta máquina de alto rendimiento.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
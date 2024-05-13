<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
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
       /* ---- plan cards ---- */
    .card-container {
    display: flex; /* Alinear los elementos en una fila */
    justify-content: space-between; /* Espacio uniforme entre los elementos */
    }
   .e-card1 {
    margin: 100px auto;
    background: transparent;
    box-shadow: 0px 8px 28px -9px rgba(0,0,0,0.45);
    position: relative;
    width: 240px;
    height: 330px;
    border-radius: 16px;
    overflow: hidden;
    margin-left: 100px;
    transform-style: preserve-3d;
    transition: transform 0.5s;
  }
  .e-card1:hover {
    transform: rotateY(180deg);
  }
  .e-card1-face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }
  .e-card1-front {
  }
  .e-card-back {
    background: transparent; /* Fondo transparente para mostrar solo las ondas */
    transform: rotateY(180deg);
    display: flex;
    justify-content: center;
    align-items: center;
    transition: transform 0.5s, height 0.5s;
  }
  .e-card1:hover .e-card-back {
    transform: rotateY(0deg);
  }
  .e-card1 .pricing {
  position: absolute;
  top: 0;
  right: 0;
  background-color: #1e8603;
  border-radius: 99em 0 0 99em;
  display: flex;
  align-items: center;
  padding: 0.625em 0.75em;
  font-size: 1.25rem;
  font-weight: 600;
  color: #ffffff;
}
  .e-card2 {
    margin: 100px auto;
    background: transparent;
    box-shadow: 0px 8px 28px -9px rgba(0,0,0,0.45);
    position: relative;
    width: 240px;
    height: 330px;
    border-radius: 16px;
    overflow: hidden;
    transform-style: preserve-3d;
    transition: transform 0.5s;
  }
  .e-card2:hover {
    transform: rotateY(180deg);
  }
  .e-card2-face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }
  .e-card2-front {
  }
  .e-card2:hover .e-card-back {
    transform: rotateY(0deg);
  }
  .e-card2 .pricing {
  position: absolute;
  top: 0;
  right: 0;
  background-color: #1e8603;
  border-radius: 99em 0 0 99em;
  display: flex;
  align-items: center;
  padding: 0.625em 0.75em;
  font-size: 1.25rem;
  font-weight: 600;
  color: #ffffff;
}
  .e-card3 {
    margin: 100px auto;
    background: transparent;
    box-shadow: 0px 8px 28px -9px rgba(0,0,0,0.45);
    position: relative;
    width: 240px;
    height: 330px;
    border-radius: 16px;
    overflow: hidden;
    margin-right: 100px;
    transform-style: preserve-3d;
    transition: transform 0.5s;
  }
  .e-card3:hover {
    transform: rotateY(180deg);
  }
  .e-card3-face {
    position: absolute;
    width: 100%;
    height: 100%;
    backface-visibility: hidden;
  }
  .e-card3-front {
  }
  .e-card3:hover .e-card-back {
    transform: rotateY(0deg);
  }
  .e-card3 .pricing {
  position: absolute;
  top: 0;
  right: 0;
  background-color: #1e8603;
  border-radius: 99em 0 0 99em;
  display: flex;
  align-items: center;
  padding: 0.625em 0.75em;
  font-size: 1.25rem;
  font-weight: 600;
  color: #ffffff;
}
  .wave {
    position: absolute;
    width: 540px;
    height: 700px;
    opacity: 0.6;
    left: 0;
    top: 0;
    margin-left: -50%;
    margin-top: -70%;
    background: linear-gradient(744deg,#48df2a,#62d17e 60%,#00ddeb);
  }
  .icon {
    width: 3em;
    margin-top: -1em;
    padding-bottom: 1em;
  }
  .infotop {
    text-align: center;
    font-size: 20px;
    position: absolute;
    top: 50%; /* Alinea verticalmente en el centro */
    left: 0;
    right: 0;
    transform: translateY(-50%); /* Ajusta la posición verticalmente */
    color: rgb(255, 255, 255);
    font-weight: 600;
}
  .wave:nth-child(2),
  .wave:nth-child(3) {
    top: 210px;
  }
  .playing .wave {
    border-radius: 40%;
    animation: wave 3000ms infinite linear;
  }
  .wave {
    border-radius: 40%;
    animation: wave 55s infinite linear;
  }
  .playing .wave:nth-child(2) {
    animation-duration: 4000ms;
  }
  .wave:nth-child(2) {
    animation-duration: 50s;
  }
  .playing .wave:nth-child(3) {
    animation-duration: 5000ms;
  }
  .wave:nth-child(3) {
    animation-duration: 45s;
  }
  @keyframes wave {
    0% {
      transform: rotate(0deg);
    }
    100% {
      transform: rotate(360deg);
    }
  }
  button {
    position: relative;
    display: inline-block;
    cursor: pointer;
    outline: none;
    border: 0;
    vertical-align: middle;
    text-decoration: none;
    font-family: inherit;
    font-size: 15px;
   }
   
   button.learn-more {
    font-weight: 600;
    color: #382b22;
    text-transform: uppercase;
    padding: 1.25em 2em;
    background: #99e78a;
    border: 2px solid #008b00;
    border-radius: 0.75em;
    -webkit-transform-style: preserve-3d;
    transform-style: preserve-3d;
    -webkit-transition: background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
    transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), background 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1);
   }
   
   button.learn-more::before {
    position: absolute;
    content: '';
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: #99e78a;
    border-radius: inherit;
    -webkit-box-shadow: 0 0 0 2px #008b00, 0 0.625em 0 0 #b6f5bb;
    box-shadow: 0 0 0 2px #008b00, 0 0.625em 0 0 #e2ffe4;
    -webkit-transform: translate3d(0, 0.75em, -1em);
    transform: translate3d(0, 0.75em, -1em);
    transition: transform 150ms cubic-bezier(0, 0, 0.58, 1), box-shadow 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-transform 150ms cubic-bezier(0, 0, 0.58, 1), -webkit-box-shadow 150ms cubic-bezier(0, 0, 0.58, 1);
   }
   
   button.learn-more:hover {
    background: #6cdf85;
    -webkit-transform: translate(0, 0.25em);
    transform: translate(0, 0.25em);
   }
   
   button.learn-more:hover::before {
    -webkit-box-shadow: 0 0 0 2px #008b00, 0 0.5em 0 0 #b6f5bb;
    box-shadow: 0 0 0 2px #008b00, 0 0.5em 0 0 #b6f5bb;
    -webkit-transform: translate3d(0, 0.5em, -1em);
    transform: translate3d(0, 0.5em, -1em);
   }
   
   button.learn-more:active {
    background: #6cdf85;
    -webkit-transform: translate(0em, 0.75em);
    transform: translate(0em, 0.75em);
   }
   
   button.learn-more:active::before {
    -webkit-box-shadow: 0 0 0 2px #008b00, 0 0 #6cdf85;
    box-shadow: 0 0 0 2px #008b00, 0 0 #6cdf85;
    -webkit-transform: translate3d(0, 0, -1em);
    transform: translate3d(0, 0, -1em);
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
<div class="card-container">
    <div class="e-card1 playing">
        <span class="pricing">
            <span>
                $30 USD
            </span>
        </span>
        <div class="e-card1-face e-card1-front">
            <div class="image"></div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="infotop">
                <img src="{{ url('/images/logo_light.svg'); }}" width="260" height="60"><br>BASICO<br>
            </div>
        </div>
        <div class="e-card1-face e-card-back"></div>
    </div>
    <div class="e-card2 playing">
        <span class="pricing">
            <span>
                $60 USD
            </span>
        </span>
        <div class="e-card2-face e-card2-front">
            <div class="image"></div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="infotop">
                <img src="{{ url('/images/logo_light.svg'); }}" width="260" height="60"><br>COMFORT<br>
            </div>
        </div>
        <div class="e-card2-face e-card-back"></div>
    </div>
    <div class="e-card3 playing">
        <span class="pricing">
            <span>
                $90 USD
            </span>
        </span>
        <div class="e-card3-face e-card3-front">
            <div class="image"></div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="wave"></div>
            <div class="infotop">
                <img src="{{ url('/images/logo_light.svg'); }}" width="260" height="60"><br>PRO<br>
            </div>
        </div>
        <div class="e-card3-face e-card-back"></div>
    </div>
</div>
<div class="card-container">
    <div style="padding-left: 150px;">
        <button class="learn-more" id="button1">Comprar</button>
    </div>
<button class="learn-more" id="button2">Comprar</button>
<div style="padding-right: 150px;">
    <button class="learn-more" id="button3">Comprar</button>
</div>
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

<script>
    // Obtener los botones por su id
    var button1 = document.getElementById('button1');
    var button2 = document.getElementById('button2');
    var button3 = document.getElementById('button3');

    // Agregar un event listener para cada botón
    button1.addEventListener('click', redirectToLogin);
    button2.addEventListener('click', redirectToLogin);
    button3.addEventListener('click', redirectToLogin);

    // Función para redireccionar a la vista de inicio de sesión
    function redirectToLogin() {
        window.location.href = 'session'; // Reemplaza 'ruta_de_inicio_de_sesion' por la URL de tu vista de inicio de sesión
    }
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
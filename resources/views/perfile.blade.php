<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
    <link rel="icon" href="{{ url('/images/logo_light.svg') }}" type="image/svg+xml">
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
    .card {
            width: 280px;
            height: 280px;
            background: black;
            border-radius: 32px;
            padding: 3px;
            position: relative;
            box-shadow: #604b4a30 0px 70px 30px -50px;
            transition: all 0.5s ease-in-out;
            }

            .card .mail {
            position: absolute;
            right: 2rem;
            top: 1.4rem;
            background: transparent;
            border: none;
            }

            .card .mail svg {
            stroke: #49e656;
            stroke-width: 3px;
            }

            .card .mail svg:hover {
            stroke: #03b839;
            }

            .card .profile-pic {
            position: absolute;
            width: calc(100% - 6px);
            height: calc(100% - 6px);
            top: 3px;
            left: 3px;
            border-radius: 29px;
            z-index: 1;
            border: 0px solid #49e656;
            overflow: hidden;
            transition: all 0.5s ease-in-out 0.2s, z-index 0.5s ease-in-out 0.2s;
            }

            .card .profile-pic img {
            -o-object-fit: cover;
            object-fit: cover;
            width: 80%;
            height: 80%;
            -o-object-position: 0px 0px;
            object-position: 0px 0px;
            transition: all 0.5s ease-in-out 0s;
            }

            .card .profile-pic svg {
            width: 80%;
            height: 80%;
            -o-object-fit: cover;
            object-fit: cover;
            -o-object-position: 0px 0px;
            object-position: 0px 0px;
            transform-origin: 45% 20%;
            transition: all 0.5s ease-in-out 0s;
            }

            .card .bottom {
            position: absolute;
            bottom: 3px;
            left: 3px;
            right: 3px;
            background: #49e656;
            top: 80%;
            border-radius: 29px;
            z-index: 2;
            box-shadow: rgba(96, 75, 74, 0.1882352941) 0px 5px 5px 0px inset;
            overflow: hidden;
            transition: all 0.5s cubic-bezier(0.645, 0.045, 0.355, 1) 0s;
            }

            .card .bottom .content {
            position: absolute;
            bottom: 0;
            left: 1.5rem;
            right: 1.5rem;
            height: 160px;
            }

            .card .bottom .content .name {
            display: block;
            font-size: 1.2rem;
            color: white;
            font-weight: bold;
            }

            .card .bottom .content .about-me {
            display: block;
            font-size: 0.9rem;
            color: white;
            margin-top: 1rem;
            }

            .card .bottom .bottom-bottom {
            position: absolute;
            bottom: 1rem;
            left: 1.5rem;
            right: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            }

            .card .bottom .bottom-bottom .social-links-container {
            display: flex;
            gap: 1rem;
            }

            .card .bottom .bottom-bottom .social-links-container svg {
            height: 20px;
            fill: white;
            filter: drop-shadow(0 5px 5px rgba(165, 132, 130, 0.1333333333));
            }

            .card .bottom .bottom-bottom .social-links-container svg:hover {
            fill: #03b839;
            transform: scale(1.2);
            }

            .card .bottom .bottom-bottom .button {
            background: white;
            color: #49e656;
            border: none;
            border-radius: 20px;
            font-size: 0.6rem;
            padding: 0.4rem 0.6rem;
            box-shadow: rgba(165, 132, 130, 0.1333333333) 0px 5px 5px 0px;
            }

            .card .bottom .bottom-bottom .button:hover {
            background: #03b839;
            color: white;
            }

            .card:hover {
            border-top-left-radius: 55px;
            }

            .card:hover .bottom {
            top: 20%;
            border-radius: 80px 29px 29px 29px;
            transition: all 0.5s cubic-bezier(0.645, 0.045, 0.355, 1) 0.2s;
            }

            .card:hover .profile-pic {
            width: 100px;
            height: 100px;
            aspect-ratio: 1;
            top: 10px;
            left: 10px;
            border-radius: 50%;
            z-index: 3;
            border: 7px solid #49e656;
            box-shadow: rgba(96, 75, 74, 0.1882352941) 0px 5px 5px 0px;
            transition: all 0.5s ease-in-out, z-index 0.5s ease-in-out 0.1s;
            }

            .card:hover .profile-pic:hover {
            transform: scale(1.3);
            border-radius: 0px;
            }

            .card:hover .profile-pic img {
            transform: scale(2.5);
            -o-object-position: 0px 25px;
            object-position: 0px 25px;
            transition: all 0.5s ease-in-out 0.5s;
            }

            .card:hover .profile-pic svg {
            transform: scale(2.5);
            transition: all 0.5s ease-in-out 0.5s;
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
	<a href="{{ route('homeapp') }}" type="button" class="btn btn-close btn-close-white btn-lg" aria-label="Close"></a>
</div>

<div class="card-container" style="display: flex; justify-content: center; align-items: center; height: 100vh;">
<div class="card">  
    <div class="profile-pic">
        
        <svg height="200px" width="200px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="-47.39 -47.39 568.72 568.72" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <circle style="fill:#337180;" cx="236.967" cy="236.967" r="236.967"></circle> <path style="fill:#448A96;" d="M236.952,473.935c78.533,0,148.115-38.222,191.232-97.058c-8.011-11.48-39.525-45.025-145.593-70.548 c0-24.082-2.398-38.507-2.398-38.507s31.289-43.337,33.691-103.513c0-9.568,4.7-77.436-77.017-80.508c0-0.03,0-0.079,0-0.101 c-0.202,0-0.382,0.045-0.602,0.045c-0.21,0-0.385-0.045-0.595-0.045c0,0.022,0,0.075,0,0.101 c-81.702,3.068-77.017,70.941-77.017,80.505c2.398,60.175,33.691,103.513,33.691,103.513s-2.417,14.425-2.417,38.507 C86.664,331.174,54.08,363.623,45.044,375.908C88.104,435.286,157.997,473.935,236.952,473.935z"></path> </g></svg>
    </div>
    <div class="bottom">
        <div class="content">
            <span class="name">{{ auth()->user()->name }}</span>
            <span style="color: white;">{{ auth()->user()->email }}</span><br>
            <span class="state" style="color: white;">{{ auth()->user()->state }}</span><br>
            <span class="city" style="color: white;">{{ auth()->user()->city }}</span>
        </div>        
       <div class="bottom-bottom">
        <div class="social-links-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15.999" viewBox="0 0 16 15.999">
                <path id="Subtraction_4" data-name="Subtraction 4" d="M6-582H-2a4,4,0,0,1-4-4v-8a4,4,0,0,1,4-4H6a4,4,0,0,1,4,4v8A4,4,0,0,1,6-582ZM2-594a4,4,0,0,0-4,4,4,4,0,0,0,4,4,4,4,0,0,0,4-4A4.005,4.005,0,0,0,2-594Zm4.5-2a1,1,0,0,0-1,1,1,1,0,0,0,1,1,1,1,0,0,0,1-1A1,1,0,0,0,6.5-596ZM2-587.5A2.5,2.5,0,0,1-.5-590,2.5,2.5,0,0,1,2-592.5,2.5,2.5,0,0,1,4.5-590,2.5,2.5,0,0,1,2-587.5Z" transform="translate(6 598)"></path>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
              
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"></path></svg>
        </div>
        <button class="button">Contact Me</button>
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

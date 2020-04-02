<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
		<title>SmartLearning</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
			  <div class="content">
			    <h1>Smart-Learning</h1>
					<p>Aprende dinámicamente con esta aplicación de <br>realidad aumentada
			    by <a href="#">:re</a></p>
					<ul class="actions">
						<li><a href="#" class="button primary icon solid fa-download">Descarga</a></li>
						<li><a href="#one" class="button icon solid fa-chevron-down scrolly">Leer más</a></li>
					</ul>
				</div>
				<!-- Funcionamiento de la página, al hacer clicl sobre la imagen la página redirige hacia una prueba del sistema-->
				<div><div class="inner"><img src="images/copia.png" width="450" height="428" alt="" style="width:100%;" ></a></div></div>
		</header>

		<!-- Principal -->
			<section id="one" class="wrapper style2 special">
				<header class="major">
					<h2>Sabemos de Tecnología</h2>
				</header>
				<ul class="icons major">
					<li><span class="icon solid fa-camera-retro"><span class="label">Shoot</span></span></li>
					<li><span class="icon solid fa-sync"><span class="label">Process</span></span></li>
					<li><span class="icon solid fa-cloud"><span class="label">Upload</span></span></li>
				</ul>
	</section>

		<!-- Secundario -->
			<section id="two" class="wrapper">
				<div class="inner alt">
					<section class="spotlight">
						<div class="image"><img src="images/computo.jpg" alt="" /></div>
						<div class="content">
							<h3>Laboratorio de cómputo.</h3>
							<p style="text-align: justify">El laboratorio de computación (también llamado laboratorio de informática o centro de cómputo) es el lugar donde se prestan servicios de cómputo a los miembros de una comunidad o institución educativa. En el contexto educativo, el laboratorio de cómputo se ubica dentro de una institución académica; y tiene como objetivo proporcionar a los usuarios del recinto (estudiantes y personal docente) el servicio de préstamo de equipos de cómputo, para la enseñanza o el aprendizaje de la informática.</p>
						</div>
					</section>
					<section class="spotlight">
						<div class="image"><img src="images/meca.png" alt="" /></div>
						<div class="content">
							<h3>Laboratorio de mecatrónica.</h3>
							<p style="text-align: justify">El laboratorio de mecatrónica permite al estudiante un mejor entendimiento de los conocimientos de los fenómenos eléctricos, mecánicos y neumáticos así como también de los procesos productivos, al realizar prácticas; montajes y pruebas; ya sea por medio de componentes físicos o programas de computadora.
							Le brinda la oportunidad al estudiante de ensamblar, desensamblar y programar con componentes reales tales como pistones neumáticos, válvulas, sensores y PLC.
							De esta manera el Estudiante puede aplicar los cálculos teóricos a situaciones reales de trabajo.</p>
						</div>
					</section>
					<section class="spotlight">
					  <div class="content">
						  <h3>Laboratorio de gastronomía.</h3>
							<p style="text-align: justify">Laboratorio es un espacio en donde el talento culinario y el amor por la gastronomía se encuentran y renuevan constantemente.</p>
							<div class="image"><img src="images/gastro.jpg" alt="" /></div>
						</div>
					</section>
				</div>
			</section>
		<!-- Footer -->
			<footer id="footer">
				<ul class="icons">
					<li><a href="https://www.facebook.com/JulianBardalesM" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li>
					<li><a href="https://twitter.com/aless_kyc" class="icon brands fa-twitter"><span class="label">Twitter</span></a></li>
					<li><a href="#" class="icon brands fa-instagram"><span class="label">Instagram</span></a></li>
				</ul>
				<!-- Acceso al Login del administrador -->
				<p><a href="{{ route('login') }}"><img src="images/LOGO.png" width="105" height="105" alt="" title="login" /></a></p>
					<p><a href="http://www.utchetumal.edu.mx/index/"><img src="images/logo_UT.png" width="" height="" alt="" title="UT Chetumal" style="width: 10%;" /></a></p>
			</footer>

	<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
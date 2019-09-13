<!DOCTYPE html>
<html lang="es">
<head>
	@include('web.head.head_portafolio')
</head>
<body>
  <!--Start Header-->
    @include('web.header.header')
  <!--End Header-->
	<div class="contenedor" id="contenedor">
		<section class="tarjeta">
			<div class="slider_banner">
				<div class="banner" id="banner">
					<img class="slide active" src="img/portafolio/banner.jpg" alt="">
					<img class="slide" src="img/portafolio/banner2.jpg" alt="">
					<img class="slide" src="img/portafolio/banner3.jpg" alt="">
					<img class="slide" src="img/portafolio/banner4.jpg" alt="">
				</div>

				<!-- Flechas del Banner -->
				<a href="#" id="banner-prev" class="flecha-banner anterior"><span class="fa icon-circle-left"></span></a>
				<a href="#" id="banner-next" class="flecha-banner siguiente"><span class="fa icon-circle-right"></span></a>
			</div>

			<section class="slider_info">
				<!-- Flechas del Slider -->
				<a href="#" id="info-prev" class="flecha-info anterior" ><span class="fa icon-circle-left"></span></a>
				<a href="#" id="info-next" class="flecha-info siguiente"><span class="fa icon-circle-right"></span></a>

				<section class="informacion" id="informacion">
					<article id="info">
						<div class="slide active">
							<h1 class="nombre">Jose Beltrán</h1>
							<p class="trabajo">Desarrollador de Software</p>
							<p class="pais"><img src="img/portafolio/bandera.png" alt="">Colombia</p>
						</div>

						<div class="slide">
							<h2 class="subtitulo">Cursos Realizados</h2>
							<p class="texto">Programación Orientada a objetos<br>Programacion Orientada a Componentes <br>
                Estructura de Datos <br>Analisis y Diseño de Software Vertical</p>
						</div>

						<div class="slide">
							<h2 class="subtitulo">Proyectos Realizados</h2>
							<p class="texto">Tricar (POO)<br>Nomina (POC) <br>
                Videojuego Batallas de Libertad (Estructura de Datos) <br> Control de horarios de empleados</p>
						</div>
					</article>
					<div class="botones" id="botones"></div>
				</section>
			</section>
	</div>

  <!--Start Social Bar-->
  @include('web.social_bar.socialbar')
  <!--End Social Bar-->
  <!--Start Footer-->
  @include('web.footer.footer')
  <!--End Footer-->

	<script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>
	<script src="js/portafolio.js"></script>
</body>
</html>

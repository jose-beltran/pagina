<!DOCTYPE HTML>
<html lang="es">
  <head>
    @include('web.head.head_home')
  </head>
  <body>
    <!--Start Header-->
      @include('web.header.header')
    <!--End Header-->
    <main class="main">
      <div class="container-main">
        <h1>Bienvenidos a mi Pagina Web</h1>
      </div>
      <div class="desc">
        <div class="text-desc">
          <h2>Algunas cosas sobre mi</h2>
          <p>Soy estudiante de Ingenieria de Software de 6 semestre, de la Fundación Universitaria Panamericana,
            me gusta realizar cursos de programación para tener mayor concimiento sobre los diferentes tipos de
            lenguajes de programación.</p>
        </div>
        <div class="img-desc">
        	<img src="img/home/codigo.jpg">
        </div>
      </div>
    </main>
    <!--Start Social Bar-->
    @include('web.social_bar.socialbar')
    <!--End Social Bar-->
    <!--Start Footer-->
    @include('web.footer.footer')
    <!--End Footer-->
  </body>
</html>

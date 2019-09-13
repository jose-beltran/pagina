<!DOCTYPE html>
<html>
  <head>
    @include('web.head.head_contact')
  </head>
  <body>
      @include('web.header.header')
      @include('web.social_bar.socialbar')
  <section id="form">
    <h1>CONTACTAME</h1>
    <div class="container">
      <div class="container form-box">
        <div class="row">
          <div class="col-lg-6">
            <div class="form-ara">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group name">
                  <input type="text " class="form-control name-text" id="usr" placeholder="Nombre" name="username">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group name">
                  <input type="text" class="form-control" id="usr" placeholder="Apellido" name="username">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="form-group phone">
                  <input type="text" class="form-control" id="usr" placeholder="Correo"name="username">
                </div>
              </div>
              <div class="row">
                <div class="form-group phone">
                  <input type="text" class="form-control" id="usr" placeholder="Numero de Telefono"name="username">
                </div>
              </div>
              <div class="row">
                <div class="form-group massge">
                  <textarea class="form-control" rows="5"placeholder="Mensaje" id="comment"></textarea>
                </div>
              </div>
              <div class="row buton-form">
                <div class="form-check captha">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input" id="check" value="">
                    <span class="checkmark"></span>
                    <p>No soy un robot</p>
                    <img class="capcta" src="https://pbs.twimg.com/profile_images/566388455265931264/dVHQiE0t.png">
                  </label>
                </div>
                <div class="buton-form">
                  <a href="#">Enviar</a>   </div></div>
                </div> </div>
                <div class="col-lg-1 empty-div-form"></div>
                <div class="col-lg-5">

                  <div class="map-area">
                    <iframe src="https://www.google.com/maps/place/Compensar+Unipanamericana+Fundaci%C3%B3n+Universitaria+Sede+K/@4.620748,-74.0744497,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9983ebf3f921:0xee1cc7081f0062c!8m2!3d4.620748!4d-74.072261" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
              </div>
            </div>
          </section>
          @include('web.footer.footer')
  </body>
</html>

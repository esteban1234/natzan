<!DOCTYPE html>
<?php include 'encabezado2.php' ?>
<body>

   <header id="header4">

  <div class="menu">
    <figure class="logo pull-left">
      <img src="../img/natzan.png" alt="NATZAN" class="img-responsive">
    </figure>
    <nav class="pull-right">
      <ul>
        <a class="selector" href="../index.php">INICIO</a>
        <a class="selector" href="nosotros.php">NOSOTROS</a>
        <a class="selector" href="servicios.php">PRODUCTOS</a>
        <a class="selector" id="select" href="contacto.php">CONTACTO</a>
      </ul>
    </nav>
  </div>

  <div class="textoh">
    <p>Cotiza el equipo que requieras</p>
  </div>
  
</header>

<div class="tit">
  <h1>CONTACTANOS</h1>
</div>

<div class="container bootstrap snippets" style="padding:5%;">
      <div class="row text-center">
        <div class="col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-th fa-3x text-colored"></i>
            <h4>Teléfono</h4>
             PENDIENTE<br>
            
          </div>
        </div>

        <div class="col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-map-marker fa-3x text-colored"></i>
            <h4>Dirección</h4>

            <address>
            BLVD. Arcoiris #442<br> por Av. Indigo y Av. Beige.
            Col. Monte Real, Tuxtla Gutierrez, Chiapas. C.P. 29023.<br>
          </address>
          </div>
        </div>

        <div class="col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-book fa-3x text-colored"></i>
            <h4>Correo</h4>

           <a href="mailto:info@maquinariasnatzan.com" class="text-muted">info@maquinariasnatzan.com</a>
          </div>
        </div>

        <div class="col-md-3">
          <div class="contact-detail-box">
            <i class="fa fa-clock fa-3x text-colored"></i>
            <h4>Horario</h4>

            Lunes a Viernes de 9 am a 6 pm
          </div>
        </div>

      </div> <br><br>


      <div class="row">
        <div class="col-md-6">
          <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3820.179218843245!2d-93.14850498575655!3d16.767756824793906!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85ecd9184bfc93ed%3A0xa8c68497e0aab135!2sBlvd.+Arco+Iris+442%2C+Monterreal%2C+29026+Tuxtla+Guti%C3%A9rrez%2C+Chis.!5e0!3m2!1ses-419!2smx!4v1523644145461" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>

        
        <div class="col-md-6">
          <form role="form" name="ajax-form" id="ajax-form" action="" method="post" class="form-main">

            <div class="form-group">
              <label for="name2">Nombre</label>
              <input class="form-control" id="name2" name="name" type="text" value="Nombre">
            </div>

            <div class="form-group">
              <label for="name2">Teléfono</label>
              <input class="form-control" id="name2" name="name" type="text" value="Teléfono">
            </div>

            <div class="form-group">
              <label for="email2">Correo</label>
              <input class="form-control" id="email2" name="email" type="text" value="Correo">              
            </div>

            <div class="form-group">
              <label for="message2">Comentario</label>
              <textarea class="form-control" id="message2" name="message" rows="5">Comentario</textarea>
            </div>

            <div class="row">            
              <div class="col-xs-12">
                <button type="submit" class="btn btn-4  btn-rounded " id="send">ENVIAR</button>
              </div>
            </div>

          </form>
        </div>

      </div> 
          
    </div>

<span class="ir-arriba"><i class="fa fa-chevron-up" aria-hidden="true"></i></span>
<?php include 'pie.php' ?>
<script src="../js/jquery.js"></script>
<script src="../js/menu.js"></script>
<script src="../js/sendCORREO.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/botonarriba.js"></script>
</body>
</html>

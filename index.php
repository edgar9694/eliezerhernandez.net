<!DOCTYPE html>
<html>
  <head><meta http-equiv="Content-Type" content="text/html; charset=big5">

      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Eliezer Hern&aacute;ndez Photography</title>
    <link rel="icon" href="imagenes/icono.png" charset="utf-8">
		<link rel="stylesheet" href="css/normalize.css">
    <!--estilos principales-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--estilo redes sociales-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!--estilo general de la pagina-->
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
    <link rel="stylesheet" href="css/style.css" charset="utf-8">
    <link rel="stylesheet" href="css/carousel.css" charset="utf-8">

  </head>
  <body>
    <div class="container-fluid" >
      <div class="container-fluid">
        <div >
            <img src="administrador/imagenes/fondo2.png" class="img-responsive" width="50%" style="margin:10px auto;float:center"/>
        </div>
        <div id="nave" class="blend"><a href="login.php">Entrar</a></div>
      </div>
    </div>
      <!-- barra de navegacion-->
    <div class="site">
      <nav class="blend">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="bio.php">Bio</a></li>
          <li><a href="galeria.php">Portafolio</a></li>
          <li><a href="videos.php">videos</a></li>
          <li><a href="contacto.php">Contacto</a></li>
        </ul>
      </nav>
    </div>
    <div id="myCarousel" class="carousel slide carousel-fade">

    <div class="carousel-inner" role="listbox">

      <?php
      require 'conectardb.php';
      $sql = mysqli_query($conn,"SELECT * FROM imagenes WHERE categoria='inicio'");
      if ($sql == FALSE) {
          echo "Ha ocurrido un error en la conexi��n. Por favor revise su configuraci��n o la consulta que ha enviado a conectardb.php";
      } else {
        // funcion de repetir para cada imagen en la tabla
          $Rows = mysqli_num_rows($sql);
          for ($i=0; $i<$Rows; $i++) {
              $Auto = mysqli_fetch_assoc($sql);
              if ($i == 0) {
                  echo '<div class="item active">';
              } else {
                  echo '<div class="item">';
              }
          ?>
            <div class="fill" style="background-image:url('http://placehold.it/1024x980/673ab7/000000');"></div>
            <?php
              echo '</div>';
          }
        }
             ?>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev"  style="background:transparent">
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next"  style="background:transparent">
    </a>

</div>


      <!-- botones de redes sociales-->
    <div class="container" style="margin:50px auto">
      <ul class="social-buttons" id="demo1" style="margin:0 auto">
      <li>
        <a href="https://es-la.facebook.com/pages/Eliezer-Hernandez-Photography/277825548907479" class="facebook" title="Dale Me Gusta a mi pagina">
        <i class="fa fa-facebook"></i>
      </a>
      </li>
      <li>
        <a href="http://instagram.com/eliezerhe" class="instagram" title="Mira mi trabajo">
        <i class="fa fa-instagram"></i>
      </a>
      </li>
      <li>
        <a href="https://twitter.com/eliezerhe" class="twitter" title="Siguenos en Twitter">
        <i class="fa fa-twitter"></i>
      </a>
      </li>
      <li>
        <a href="www.vimeo.com/eliezerhe" class="vimeo" title="Siguenos en Twitter">
        <i class="fa fa-vimeo"></i>
      </a>
      </li>
  </ul>

    </div>
    <script src="jquery/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/function.js"></script>
    <script>
    $('.carousel').carousel()
    </script>
    <script src="js/galeria.js"></script>
  </body>
</html>

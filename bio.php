<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Eliezer Hern&aacute;ndez Photography</title>
    <link rel="icon" href="administrador/imagenes/icono.png" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">

  </head>
  <body>
    <div class="container-fluid" >
      <div class="container-fluid">
        <div>
            <img src="administrador/imagenes/fondo2.png" class="img-responsive" width="50%" style="margin:10px auto;float:center"/>
        </div>
        <div id="nave" class="blend"><a href="login.php">Entrar</a></div>
      </div>
    </div>
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


      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-7" >
                  <?php
                  require 'conectardb.php';
                  $images = mysqli_query($conn ,"SELECT * FROM imagenes WHERE categoria='bio'");
                  if ($images == FALSE) {
                      echo "Ha ocurrido un error en la conexión. Por favor revise su configuración o la consulta que ha enviado a DBAccess.php";
                  } else {
                      $Rows = mysqli_num_rows($images);
                      for ($i=0; $i<$Rows; $i++) {
                          $Auto = mysqli_fetch_assoc($images);

                    echo "<img src='administrador/".$Auto['imagen']."' class='img-responsive' >";

                    }
                  }
                       ?>

          </div>
          <div class="col-sm-12 col-md-12 col-lg-4">
            <h3 style="text-align:center; text-decoration:underline">Biografía</h3>
            <br />
            <p style="text-align:justify">
              Eliezer Hernández, es un fotógrafo y publicista venezolano, apasionado por la fotografía y las artes audiovisuales. Su característica fundamental es la búsqueda continúa de la excelencia en todo el servicio fotográfico y de video que ofrece en cada una de sus ramas.
              <br />
              <br />

        Eliezer Hernández Photography, nace en 2012 como una empresa orientada a la fotografía de eventos sociales y publicitaria, posterior a más de 5 años de trabajo y experiencia en el medio audiovisual.
        <br />
        <br />
        Principalmente, Eliezer Hernández Photography representada en Eliezer Hernández y todo su equipo, persigue en cada evento social la combinación de 3 factores: la aplicación de amplias y reconocidas técnicas fotográficas, un concepto artístico definido según la personalidad de los clientes y la locación y el disfrute de todo el servicio por parte de sus clientes, ya que más que nada sabe que es un día "único" e inolvidable.
        <br />
        <br />
        Cada producto final entregado, conlleva en sí mismo la garantía de un material audiovisual de altísima calidad artística.
            </p>

          </div>

        </div>
    </div>


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
    <script type="text/javascript">
    $('#carouselHacked').carousel();
    </script>
    <script src="js/prefixfree.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='jquery/jquery.magnific-popup.js'></script>
    <script src="js/galeria.js"></script>

  </body>
</html>

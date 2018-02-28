<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Eliezer Hern&aacute;ndez Photography</title>
    <link rel="icon" href="imagenes/icono.png" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="css/normalize.css">
      <link rel="stylesheet" href="css/style.css" charset="utf-8">
      <link rel="stylesheet" type="text/css" href="css/galeriadef.css" />
      <link rel="stylesheet" type="text/css" href="css/galeriagen.css" />
      <link rel="stylesheet" type="text/css" href="css/galeria.css" />
    <link rel="stylesheet" href="css/venobox.css" type="text/css" media="screen" />
  </head>
  <body>
    <div class="container-fluid" >
      <div class="container-fluid">
        <div>
            <img src="imagenes/fondo2.png" class="img-responsive" width="50%" style="margin:10px auto;float:center"/>
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
<div class="container" style="margin:0 auto">
        <section id="pattern" class="pattern">
          <ul class="grid">
                  <?php
                  extract($_GET);
                  require("conectardb.php");
                  $images = mysql_query("SELECT * FROM imagenes WHERE categoria='$id'");
                  while ($image=mysql_fetch_assoc($images))
                  {
                  ?>
                    <li>
                      <div class="image-wrapper">
                        <a class="venobox" data-gall="myGallery" href="<?=$image["imagen"] ?>">
                          <img src="<?=$image["imagen"] ?>"/>
                        </a>
                      </div>
                   </li>
                  <?php
                  }
                  ?>
                </ul>
                </section>
              </div>
  <footer>
    <ul class="social-buttons" id="demo1" >
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
    </h5>
  </footer>
    <script src="jquery/jquery-2.2.2.min.js"></script>
    <script src="js/prefixfree.min.js">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/venobox.min.js"></script>
    <script src="js/function.js"></script>

  </body>
</html>

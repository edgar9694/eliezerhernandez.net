<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Eliezer Hern&aacute;ndez Photography</title>
    <link rel="icon" href="imagenes/icono.png" charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/galeriadef.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/style.css" charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel='stylesheet' href='css/magnific-popup.css'>
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


      <div class="container">
        <div class="row">
        <?php
        require 'conectardb.php';
        $images = mysqli_query($conn, "SELECT * FROM videos");
        while ($image=mysqli_fetch_assoc($images))
        {
        if($image["categoria"] == "videos")
        {
          ?>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="cajav">
              <a class="venobox" data-type="iframe" data-gall="myGallery" href="<?=$image["video"] ?>">
            <video src="<?=$image["video"] ?>" controls id="imagen"/>
              </a>
            </div>
        <?php
      } else {
        ?>

        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" id="cajav">
          <iframe src="<?=$image["url"] ?>" width="550" height="350" frameborder="50" webkitAllowFullScreen mozallowfullscreen allowFullScreen id="imagen"></iframe>
        </div>

        <?php
      }
    }
        ?>
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
    <script src="js/prefixfree.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <link rel="stylesheet" href="css/venobox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="js/venobox.min.js"></script>
  </body>
</html>

<!DOCTYPE html>
<html>  <head>    <meta charset="utf-8">    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">    <title>Eliezer Hern&aacute;ndez Photography</title>    <link rel="icon" href="imagenes/icono.png" charset="utf-8">    <link rel="stylesheet" href="css/bootstrap02.min.css" charset="utf-8">    <link rel="stylesheet" href="css/style.css" charset="utf-8">  </head>  <body>    <div class="site" style="height:50px">
        <a id="administrador" href="index.php" class="button" style="position:absolute;z-index:1;margin-top:20px; margin-left:20px">Regresar</a>
    </div>
    <div class="row" style="margin:50px auto;">
      <img src="imagenes/fondo2.png" class="img-responsive" width="25%" style="margin:0px auto"/>
      <div class="col-sm-4 col-md-6 col-lg-4 col-sm-offset-4 col-md-offset-3 col-lg-offset-4">
        <form class="form-signin" action="validar.php" method="post">
            <h2 class="form-signin-heading">Entrar</h2>
          <input type="email" id="inputEmail" name="correo" class="form-control" placeholder="Email address" required autofocus>
          <input type="password" id="inputPassword" name="clave" class="form-control" placeholder="Password" required>
        <br>
          <input id="registro" type="submit" class="button" name="submit" value="Entrar"/>
      </form>
      </div>
    </div>
  </body>
</html>
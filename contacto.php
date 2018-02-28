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
    <link rel='stylesheet' href='css/magnific-popup.css' charset="utf-8">
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


    <section id="contacto">
            <div class="container-fluid">
                <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6" style="margin-top:25px">
                      <div class="row">
                        <div class="col-sm-4 col-md-4 col-lg-4"style="height:35px;">
                          <div class="dropdown" style="display:block;position:absolute;top:-20px">
                            <button class="btn btn-default dropdown-toggle" style="background:rgb(153, 153, 153)" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            <span class="glyphicon glyphicon-list"></span> Tipo de Evento
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="background:rgba(153, 153, 153, 0.7)">
                            <li><a href="#bodas1">Evento Social</a></li>
                            <li><a href="#sesiones1">Sesion Fotografica</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12">
                          <h2 style="text-align:center; border-bottom-style:solid;padding:4px 20px 0px 20px">
                          Contacto
                        </div>
                      </div>
                                <br>
<!--////////////////////////////formulario de bodas/////////////////////////////////////////////////////-->
                      <form id="bodas1" class="form-horizontal" role="form" action="correo.php" method="post">
                        <input type="hidden" name="formu" value="boda">
                                    <div class="form-group" style="margin-top:20px">
                                      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1">
                                        <input type="text" class="form-control" name="nombre" placeholder="  Nombre:" style="border-radius: 3px;"  required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1">
                                        <input type="text" class="form-control" name="apellido" placeholder="  Apellido:" style="border-radius: 3px;"  required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1">
                                        <input type="email" class="form-control" name="correo" placeholder="  E-mail:" style="border-radius: 3px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1">
                                        <input type="text" class="form-control" name="numero" placeholder="  numero de contacto:" style="border-radius: 3px;" required pattern="[0-9]{11}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-1">
                                        <label for="fecha" style="margin: 5px auto">Fecha del evento:</label>
                                      </div>
                                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                        <input type="text" class="form-control" name="fecha" style="border-radius: 3px;" />
                                      </div>
                                      </div>
                                      <div class="form-group">
                                        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-1">
                                          <label for="invitados" style="margin: 5px auto">Cant. de invitados:</label>
                                        </div>
                                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                         <input type="text" class="form-control" name="invitados"  style="border-radius: 3px;" pattern="[0-9]{2,4}"  required>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-1 ">
                                      <label for="evento" style="margin: 5px auto">Tipo de Evento:</label>
                                    </div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                                      <input type="text" class="form-control" name="evento" style="border-radius: 3px;"  required>
                                      </div>
                                    </div>
                        <div class="form-group">
                                      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1">
                                        <input type="text" class="form-control" name="lugar" placeholder="  locacion del evento" style="border-radius: 3px;">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 col-xs-offset-1">
                                        <textarea name="mensaje" placeholder="  Mensaje:"  style="min-width:100%;max-width:100%;min-height:175px;max-height:175px;border-radius: 3px;"></textarea>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-1 ">
                                    <label for="codigo" style="margin: 5px auto">Ingrese codigo:</label>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img src="captcha.php" /></label>
                                    </div>
                                  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <input type="text" class="form-control" name="codigo" style="border-radius: 3px;"  required>
                                    </div>
                                  </div>
                                    <br>
                                    <div class="form-group">
                                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xs-offset-4">
                                        <button id="registro" type="submit" class="button" name="enviar">Enviar</button>
                                      </div>
                                    </div>
                                  </form>

<!--////////////////////////////formulario de sesiones//////////////////////////////////////////////////-->
                      <form id="sesiones1" class="form-horizontal" role="form" action="correo.php" method="post">
                            <input type="hidden" name="formu" value="sesiones">
                                    <div class="form-group" style="margin-top:20px">
                                      <div class="col-sm-10 col-xs-offset-1">
                                        <input type="text" class="form-control" name="nombre" placeholder="  Nombre:" style="border-radius: 3px;"  required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-10 col-xs-offset-1">
                                        <input type="text" class="form-control" name="apellido" placeholder="  Apellido:" style="border-radius: 3px;"  required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-10 col-xs-offset-1">
                                        <input type="email" class="form-control" name="correo" placeholder="  E-mail:" style="border-radius: 3px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  required>
                                      </div>
                                    </div>
                        <div class="form-group">
                                      <div class="col-sm-10 col-xs-offset-1">
                                        <input type="text" class="form-control" name="tipo" placeholder="  Tipo de sesion:" style="border-radius: 3px;"  required>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-sm-10 col-xs-offset-1">
                                        <textarea name="mensaje" placeholder="  Mensaje:"  style="min-width:100%;max-width:100%;min-height:175px;max-height:175px;border-radius: 3px;height:175px"></textarea>
                                      </div>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xs-offset-1 ">
                                    <label for="codigo" style="margin: 5px auto">Ingrese codigo:</label>
                                    </div>
                                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <img src="captcha.php" /></label>
                                    </div>
                                  <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                                    <input type="text" class="form-control" name="codigo" style="border-radius: 3px;"  required>
                                    </div>
                                  </div>
                                    <br>
                                    <div class="form-group">
                                      <div class="col-sm-4 col-xs-offset-4">
                                        <button id="registro" type="submit" name="enviar" class="button">Enviar</button>
                                      </div>
                                    </div>
                                  </form>
                            <div id="elige">
                                  <h2 style="text-align:center">
                                    <span class="glyphicon glyphicon-chevron-up" aria-hidden="true">
                                    </span>
                                    Elige un tipo de Evento
                                  </h2>
                            </div>
                    </div>

<!--/////////////////////////////otra columna///////////////////////////////////////////////////////////-->
                    <div class="col-sm-12 col-md-6 col-lg-6" style="margin-top:25px;border-radius: 5px;">
                      <h2 style="text-align:center; border-bottom-style:solid;padding:20px">informaci&oacute;n de contacto</h2>
                      <br>
                      <h4 style="text-align:justify; float: left; height:80px">N&uacute;meros:</h4>
                      <h4>
                      <ul style="list-style-type:none;margin:0 0 0 100px">
                        <li style="margin:10px auto"> +58 (416) 832-5749</li>
                        <li style="margin:10px auto"> +58 (412) 205-0328</li>
                        <li style="margin:10px auto"> +58 (412) 019-0328 </li>
                      </ul>
                    </h4>
                    <br>
                    <h4>Correo: contacto@eliezerhernandez.net</h4>
                      <h4 style="text-align:justify">Direcci&oacute;n: Centro Comercial Los Chaguaramos, piso 20. Oficina 20-12. Caracas, Venezuela </h4>
                      <br>
                      <h4 style="text-align:justify; text-decoration:underline">Con previa Cita  </h4>
                      <div style="margin-top:50px">
                        <ul class="social-buttons" id="demo1" style="margin: 0;padding: 0;">
                        <li>
                          <a style="width:45px;height:45px;font-size:27px;line-height:45px" href="https://es-la.facebook.com/pages/Eliezer-Hernandez-Photography/277825548907479" class="facebook" title="Dale Me Gusta a mi pagina">
                          <i class="fa fa-facebook"></i>
                        </a>
                        </li>
                        <li>
                          <a style="width:45px;height:45px;font-size:27px;line-height:45px" href="http://instagram.com/eliezerhe" class="instagram" title="Mira mi trabajo">
                          <i class="fa fa-instagram"></i>
                        </a>
                        </li>
                        <li>
                          <a style="width:45px;height:45px;font-size:27px;line-height:45px" href="https://twitter.com/eliezerhe" class="twitter" title="Siguenos en Twitter">
                          <i class="fa fa-twitter"></i>
                        </a>
                        </li>
                        <li>
                          <a style="width:45px;height:45px;font-size:27px;line-height:45px" href="www.vimeo.com/eliezerhe" class="vimeo" title="Mira nuestros videos">
                          <i class="fa fa-vimeo"></i>
                        </a>
                        </li>
                    </ul>
                      </div>
                      <br>
                      <br>
                  </div>
                </div>
              </div>
            </div>

    </section>
    <script src="jquery/jquery-2.2.2.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="js/function.js"></script>
    <script src="js/prefixfree.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='jquery/jquery.magnific-popup.js'></script>
    <script src="js/galeria.js"></script>

  </body>
</html>

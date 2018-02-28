<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:login.php");
}
?>
<html>
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Eliezer Hern&aacute;ndez Photography</title>
		<link rel="icon" href="imagenes/icono.png" charset="utf-8">
    <link rel="stylesheet" href="../css/bootstrap02.min.css" charset="utf-8">
    <link rel="stylesheet" href="../css/style.css" charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="../js/function.js"></script>
  </head>
  <body>
    <a id="administrador" href="index_admin.php" class="button" style="margin-top:20px; margin-left:20px">Regresar</a>
<div class="container">
	<div class="row">
		<div id="formulario1" class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-4 col-md-offset-4 col-lg-offset-4">
	<form class="form-signin" name="form1" action="" method="post">
				<h2 class="form-signin-heading" style="color:rgb(115, 140, 140)">Registrar</h2>
			<label class="sr-only">Usuario</label>
				<input type="text" id="nombre" name="nombre"class="form-control" placeholder="Name" required autofocus>
			<label  class="sr-only">Usuario</label>
				<input type="email" id="correo" name="correo" class="form-control" placeholder="Email address" required autofocus>
			<label  class="sr-only">Contraseña</label>
				<input type="password" id="clave" name="clave" class="form-control" placeholder="Password" required>
			<label class="sr-only">Contraseña</label>
				<input type="password" id="clave2" name="clave2" class="form-control" placeholder="Repeat Password" required>
		<br>
		<input id="registro" class="button" type="submit" name="submit" value="Registrar"/>
	</form>
	<br>
</div>

	</div>

</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
      //require("enviarcorreo.php");
		}

 ?>



  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script src="../js/docs.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="../js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
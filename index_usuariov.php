<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:login.php");
}
$nombre = $_SESSION['nombre'];
?>
<html>
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width:device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Eliezer Hern&aacute;ndez Photography</title>
		<link rel="icon" href="imagenes/icono.png" charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css" charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel='stylesheet' href='css/magnific-popup.css'>
    <script src="jquery/jquery-2.2.2.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
			<script src="js/prefixfree.min.js"></script>
			<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
			<link rel="stylesheet" href="css/venobox.css" type="text/css" media="screen" />
			<script type="text/javascript" src="js/venobox.min.js"></script>
    <script src="js/function.js"></script>
  </head>
  <body>
		<div class="container-fluid" >
			<div class="container-fluid">
				<div class="page-header">
						<img src="imagenes/fondo2.png" class="img-responsive" width="50%" style="margin:0 auto;float:center"/>
							<h3>Bienvenido/a <strong><?php echo "$nombre";?></strong></h3>
				</div>
			</div>
		</div>
		<div class="site">
			<nav class="blend">
				<ul>
					<li><a href="index_usuario.php">Portafolio</a></li>
					<li><a href="index_usuariov.php" style="text-decoration:underline">videos</a></li>
					<li><a href="desconectar.php">salir</a></li>
				</ul>
			</nav>
		</div>


		<div class="container-fluid">
			<div class="container-fluid">
				<div class="row">
					<?php
					require 'conectardb.php';
					$videos = mysql_query("SELECT * FROM vid_user where user='$nombre'");
					while ($video=mysql_fetch_assoc($videos))
					{
					?>
			<div class="col-sm-4" id="caja">
				<a class="venobox" data-type="iframe" data-gall="myGallery" href="<?=$video["vid"] ?>">
					<video src="<?=$video["vid"] ?>" controls id="imagen"/>
				</a>
			</div>
			<?php
			}
			?>
		</div>
  </body>
</html>

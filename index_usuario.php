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
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Eliezer Hern&aacute;ndez Photography</title>
		<link rel="icon" href="imagenes/icono.png" charset="utf-8">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/normalize.css" charset="utf-8">
		<link rel="stylesheet" href="css/galeriadef.css" charset="utf-8">
		<link rel="stylesheet" href="css/galeriagen.css" charset="utf-8">
		<link rel="stylesheet" href="css/galeria.css" charset="utf-8">
		<link rel="stylesheet" href="css/style.css" charset="utf-8">
		<link rel="stylesheet" href="css/venobox.css" type="text/css" media="screen" />

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
					<li><a href="index_usuario.php" style="text-decoration:underline">Portafolio</a></li>
					<li><a href="index_usuariov.php">videos</a></li>
					<li><a href="desconectar.php">salir</a></li>
				</ul>
			</nav>
		</div>
		<div class="container">
			<div class="row" id="tabla">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="text-align:center">Nombre</th>
										<th style="text-align:center">Descargar</th>
									</tr>
								</thead>
								<tbody>
					 <?php
						 require 'conectardb.php';
						 $sql=("SELECT * FROM text_user where user='$nombre'");
						 $query=mysql_query($conn, $sql);
							while($arreglo=mysqli_fetch_array($query)){
								$name= explode("/$nombre", $arreglo[1]);
								$name2=utf8_decode(end($name));
					 ?>
					 <tr>
						 <td align="center" >
							 <?php echo "$name2";?>
						 </td>
						 <td align="center">
							  <a href="<?php echo $arreglo[1];?>"><span class='glyphicon glyphicon-save' aria-hidden='true'></span></a>
						 </td>
					 </tr>
					 <?php
				 }
					 ?>
								 </tbody>
								 <thead>
									 <tr>
										 <th style="text-align:center">Archivo</th>
										 <th style="text-align:center">Descargar</th>
									 </tr>
								 </thead>
								 <tbody>
 					 <?php
 						 require 'conectardb.php';
 						 $sql=("SELECT * FROM zip_user where user='$nombre'");
 						 $query=mysqli_query($conn,$sql);
 							while($arreglo=mysqli_fetch_array($query)){
 								$name= explode("$nombre/", $arreglo[1]);
 								$name2=utf8_decode(end($name));
 					 ?>
 					 <tr>
 						 <td align="center" >
 							 <?php echo "$name2";?>
 						 </td>
 						 <td align="center">
 							  <a href="<?php echo $arreglo[1];?>"><span class='glyphicon glyphicon-save' aria-hidden='true'></span></a>
 						 </td>
 					 </tr>
 					 <?php
 				 }
 					 ?>
 								 </tbody>
							</table>
				</div>
		</div>

			<section id="pattern" class="pattern">
					<ul class="grid" style="margin:0px auto">
						<?php
						require 'conectardb.php';
						$images = mysqli_query($conn,"SELECT * FROM img_user WHERE user='$nombre'");
						while ($image=mysqli_fetch_assoc($images))
						{
						?>
						<li>
							<div id="caja" >
								<?php
								echo "<a class='venobox' data-gall='myGallery' href='".$image['img'].">";
								echo "<img src="<?=$image['cover'] ?>" id='imagen' />";

								 ?>

								</a>
							</div>
						</li>
						<?php
						}
						?>
					</ul>
			</section>




	<script src="jquery/jquery-2.2.2.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script src="js/prefixfree.min.js"></script>
		<script type="text/javascript" src="js/venobox.min.js"></script>
	<script src="js/function.js"></script>
  </body>
</html>

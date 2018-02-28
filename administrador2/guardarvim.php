<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:login.php");
}

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width:device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>Eliezer Hern&aacute;ndez Photography</title>
		<link rel="icon" href="../imagenes/icono.png" charset="utf-8">
		<link rel="stylesheet" href="../css/bootstrap.min.css" charset="utf-8">
		<link href="../css/dashboard.css" rel="stylesheet">
    <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' type='text/javascript'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.js' type='text/javascript'></script>
    <script src="../js/function.js"></script>
	</head>
	<body>

		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index_admin.php">INICIO</a>
				</div>
				<div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="index_admin.php">Usuarios</a></li>
								<li><a href="registrou.php">Agregar</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Imagenes y video<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="guardarimg.php">Imagen</a></li>
								<li><a href="guardarvid.php">Video</a></li>
								<li><a href="guardarvim.php">Vimeo</a></li>
							</ul>
						</li>
						<li><a href="desconectar.php">Cerrar Sesion</a></li>
					</ul>
				</div>
			</div>
		</nav>

		<br>
		<br>
		<br>

		<div class="container">
			<div class="alert alert-info" role="alert">
				<ul>
					<li>Para los videos de <strong>Vimeo</strong> usar el ultimo formulario y es obligatorio que <strong>tenga una imagen de portada</strong>.</li>
					<li><?php
					$max_upload = (int)(ini_get('upload_max_filesize'));
					$max_post = (int)(ini_get('post_max_size'));
					$memory_limit = (int)(ini_get('memory_limit'));
					$upload_mb = min($max_upload, $max_post, $memory_limit);

					echo "Tamaño maximo permitido <strong>$upload_mb Mb</strong><br>";
					?></li>
				</ul>
			</div>

			<div class="row" id="editvim" style="margin:0px auto" >
				<form action="eliminarimg.php" method="post">
					<input type="hidden" name="tipo" value="5">
				<table class="table table-bordered">
				<thead>
					<tr>

						<th style="text-align:center">URL</th>
						<th style="text-align:center"><input type="checkbox" name="checktodos"></th>
					</tr>
				</thead>
				<tbody>
				 <?php
					 require '../conectardb.php';
					 $sql=("SELECT * FROM videos where categoria='vimeo'");
					 $query=mysqli_query($conn,$sql);
						while($arreglo4=mysqli_fetch_array($query)){
				 ?>
						 <tr>
					 <td align="center" >
						 <?php echo "$arreglo4[2]";?>
					 </td>
					 <td align="center">
						 <?php echo "<input type='checkbox' name='seleccion[]' class='checklote' value='".$arreglo4[0]."'>";?>
					 </td>
				 </tr>
					 <?php
					}
					?>
				 </tbody>
			</table>
			<button class="btn btn-default btn-success" type="submit" value="enviar" style="text-align:center;float:right">Eliminar selecci&oacute;n</button>
	 </form>

			</div>
	</div>
	<br>
	<br>
	<br>
	<div class="container" style="border-style:solid; padding:20px">
		<div class="container">
			<h1 style="text-align:center">subir videos vimeo</h1>
		</div>
			<form method="post" action="subir_videoP.php">
				<br/>
				<div class="form-group">
				  <div class="input-group">
				    <span class="input-group-addon">https://player.vimeo.com/video/</span>
				    	<input type="text" id="txt_descripcion" name="url" class="form-control" placeholder="Colocar codigo del video" required autofocus style="background:#cccccc;">
							<input type="hidden" name="url2" value="https://player.vimeo.com/video/">
				  </div>
				</div>
				<input type="hidden" name="categoria" value="vimeo">
				<br>
				<input type="submit" value="Guardar Video">
			</form>
	</div>
	<br>
	<br>
	<br>
	</body>
</html>
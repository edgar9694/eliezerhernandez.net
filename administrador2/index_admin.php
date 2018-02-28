<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:../login.php");
}
?>
<html>
  <head>		<meta charset="utf-8">		<meta http-equiv="X-UA-Compatible" content="IE=edge">		<meta name="viewport" content="width=device-width, initial-scale=1">    <title>Eliezer Hern&aacute;ndez Photography</title>    <link rel="icon" href="imagenes/icono.png" charset="utf-8">		<link rel="stylesheet" href="../css/bootstrap.min.css" charset="utf-8">  </head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">		<div class="container-fluid">			<div class="navbar-header">				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">					<span class="sr-only">Toggle navigation</span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>					<span class="icon-bar"></span>				</button>				<a class="navbar-brand" href="index_admin.php">INICIO</a>			</div>			<div id="navbar" class="navbar-collapse collapse">				<ul class="nav navbar-nav navbar-right">					<li class="dropdown">						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>						<ul class="dropdown-menu">							<li><a href="index_admin.php">Usuarios</a></li>							<li><a href="registrou.php">Agregar</a></li>						</ul>					</li>					<li class="dropdown">						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Imagenes y video<span class="caret"></span></a>						<ul class="dropdown-menu">							<li><a href="guardarimg.php">Imagen</a></li>							<li><a href="guardarvid.php">Video</a></li>							<li><a href="guardarvim.php">Vimeo</a></li>						</ul>					</li>					<li><a href="desconectar.php">Cerrar Sesion</a></li>				</ul>			</div>		</div>	</nav>	<br>
	<br>
	<br>	<div class="container">	<div class="container-fluid">		<h2 class="page-header" style="text-decoration:underline">Bienvenido <strong><?php// echo $_SESSION['nombre'];?></strong></h2>	</div>	<h2 class="sub-header"> Administración de usuarios</h2>
			 <div class="row" id="tabla">
				 <form action="eliminaru.php" method="post">		           <table class="table table-striped">		             <thead>		               <tr>		                 <th style="text-align:center">Nombre</th>										 <th style="text-align:center">Editar</th>										 <th style="text-align:center"><input type="checkbox" name="checktodos"></th>		               </tr>		             </thead>		             <tbody>								 		<?php											require '../conectardb.php';							 				$query=mysqli_query($conn,"SELECT * FROM clientes");											 while($arreglo=mysqli_fetch_array($query)){							 			?>						 				<tr>						 					<td align="center" >						 						<?php echo "$arreglo[1]";?>						 					</td>						 					<td align="center">						 					<?php echo "<a href='actualizar.php?id=$arreglo[1]'><span class='glyphicon glyphicon-th-list' aria-hidden='true'></span></a>"?>						 					</td>											<td align="center">												<?php						 					 	echo "<input type='checkbox' name='seleccion[]' class='checklote' value='".$arreglo[0]."'>";						 					  ?>											</td>						 				</tr>										<?php										}										?>
		      				</tbody>		           </table>							 <button class="btn btn-default btn-success" type="submit" value="enviar" style="text-align:center;float:right">Eliminar selecci&oacute;n</button>					  </form>		     </div>		</div><!-- /container -->    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' type='text/javascript'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.js'></script>
		<script src="js/function.js"></script>

	</body>
</html>
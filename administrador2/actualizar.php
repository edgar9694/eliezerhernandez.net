<!DOCTYPE html>
<?php
if (@!$_SESSION['nombre']) {
	header("Location:../login.php");
}
//conseguir la informacion del usuario
extract($_GET);
require("../conectardb.php");
$ressql=mysqli_query($conn,"SELECT * FROM clientes WHERE nombre='$id'");
while ($row=mysqli_fetch_row ($ressql)){
?>
  <body style=" background:#cccccc;">
    <div class="container">
  		<div class="page-header">
  			<h1 style="text-align:center; font-family: 'Titillium Web', sans-serif;">ADMINISTRADOR</h1>
  		</div>
  		<div id="barranavegacion" class="container-fluid" style="height:100px; margin-top:50px;">
  			<div class="row">
  				<div class="col-xs-4">
  				<a id="administrador" href="index_admin.php" class="button">Administrador del sitio</a>
  				</div>
  				<div class="col-xs-3 col-md-offset-2">
  					<h2 style="text-decoration:underline">Edici&oacute;n de <strong><?php echo $user?></strong></h2>
  				</div>
  				<div class="col-xs-3">
  					<a id="administrador" href="desconectar.php" class="button">Cerrar Sesion</a>
  				</div>
  			</div>
  		</div>
  	</div>
									echo "<input type='password' class='form-control' name='pasadmin' style='text-align: center; border-radius: 3px;' value='$pasadmin'>";
									echo "<input type='hidden' class='form-control' name='pasadmin3' style='text-align: center; border-radius: 3px;' value='$pasadmin'>";
								}else{
								 	echo "<input type='password' class='form-control' name='pasadmin' style='text-align: center; border-radius: 3px;' value='$pasadmin' readonly>";
									echo "<input type='hidden' class='form-control' name='pasadmin3' style='text-align: center; border-radius: 3px;' value='$pasadmin'>";
								}
                ?>
	<script src="jquery/jquery-2.2.2.min.js"></script>
<!DOCTYPE html>
<?phpsession_start();
if (@!$_SESSION['nombre']) {
	header("Location:../login.php");
}
//conseguir la informacion del usuario
extract($_GET);
require("../conectardb.php");
$ressql=mysqli_query($conn,"SELECT * FROM clientes WHERE nombre='$id'");
while ($row=mysqli_fetch_row ($ressql)){			$id2=$row[0];			$user=$row[1];			$email=$row[2];			$pass=$row[3];			$pasadmin=$row[4];		}
?><html>  <head>		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />    <meta name="viewport" content="width:device-width, initial-scale=1, maximum-scale=1, user-scalable=no">    <title>Eliezer Hern&aacute;ndez Photography</title>		<link rel="icon" href="imagenes/icono.png" charset="utf-8">		<link rel="stylesheet" href="css/bootstrap.min.css" charset="utf-8">		<link rel="stylesheet" href="css/bootstrap02.min.css" charset="utf-8">		<link rel="stylesheet" href="css/style.css" charset="utf-8">		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/css/bootstrap.css">		<link href='https://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css'>		<link rel="stylesheet" href="css/carrusel.css" >  </head>
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
  	</div>		<div class="container">			<div class="alert alert-info" role="alert">				<ul>					<li>Se puede usar cualquier tamaño de imagen dado que la pagina las ajustara, pero <strong>en el zoom se veran en su tamaño original</strong>.</li>					<li>Para los videos: <strong>usar solamente formato mp4</strong> dado que es el unico que no genera problemas.</li>					<li>Cree el archivo zip <strong>SOLO</strong> cuando haya subido todas los archivos</li>					<li><?php					$max_upload = (int)(ini_get('upload_max_filesize'));					$max_post = (int)(ini_get('post_max_size'));					$memory_limit = (int)(ini_get('memory_limit'));					$upload_mb = min($max_upload, $max_post, $memory_limit);					echo "Tamaño maximo permitido de uno o varios archivos: <strong>$upload_mb Mb</strong><br>";					?></li>				</ul>			</div>			<div class="row">				<form action="eliminarimg.php" method="post">					<input type="hidden" name="form" value="<?php echo $user?>">					<input type="hidden" name="tipo" value="1">				<table class="table table-bordered" id="imguser">				<thead>					<tr>						<!--th style="text-align:center">ID</th-->						<th style="text-align:center">imagen</th>						<th style="text-align:center">Eliminar <input type="checkbox" name="checktodos"></th>					</tr>				</thead>				<tbody>				 <?php					 $query=mysqli_query($conn ,"SELECT * FROM img_user where user='$user'");						while($arreglo2=mysqli_fetch_array($query)){				 ?>				 		 <tr>					 <td align="center" >						 <?php echo "$arreglo2[1]";?>					 </td>					 <td align="center">						<?php						echo "<input type='checkbox' class='checklote' name='seleccion[]' value='".$arreglo2[0]."'>";						?>						</td>				 </tr>					 <?php					}					?>				 </tbody>			</table>			<button class="btn btn-default btn-success" type="submit" value="enviar" style="text-align:center;float:right">Eliminar-IMG</button>	 </form>			</div>		</div> <br /> <br />		<div class="container">			<div class="row" >				<form action="eliminarimg.php" method="post">					<input type="hidden" name="form" value="<?php echo $user?>">					<input type="hidden" name="tipo" value="2">				<table class="table table-bordered" id="imguser">				<thead>					<tr>						<th style="text-align:center">ID</th>						<th style="text-align:center">video</th>						<th style="text-align:center">Eliminar <input type="checkbox" name="checktodos1"></th>					</tr>				</thead>				<tbody>				 <?php				 	extract($_GET);					 $query=mysqli_query($conn,"SELECT * FROM vid_user where user='$user'");						while($arreglo3=mysqli_fetch_array($query)){				 ?>				 		 <tr>					 <td align="center" >						 <input type="number" name="id" value='<?php echo "$arreglo3[0]";?>' readonly style="text-align:center; width:20px;background:#cccccc;">					 </td>					 <td align="center" >						 <?php echo "$arreglo3[1]";?>					 </td>					 <td align="center">						 <?php 						echo "<input type='checkbox' name='seleccion[]' class='checklote1' value='".$arreglo3[0]."'>"; 						?>						</td>				 </tr>					 <?php					}					?>				 </tbody>			</table>			<button class="btn btn-default btn-success" type="submit" value="enviar" style="text-align:center;float:right">Eliminar-VID</button>	 </form>			</div>		</div>		<br />		<br />		<div class="container">			<div class="row" >				<form action="eliminarimg.php" method="post">					<input type="hidden" name="form" value="<?php echo $user?>">					<input type="hidden" name="tipo" value="6">				<table class="table table-bordered" id="imguser">				<thead>					<tr>						<th style="text-align:center">ID</th>						<th style="text-align:center">Archivo</th>						<th style="text-align:center">Eliminar <input type="checkbox" name="checktodos2"></th>					</tr>				</thead>				<tbody>				 <?php					extract($_GET);					 $query=mysqli_query($conn,"SELECT * FROM text_user where user='$user'");						while($arreglo4=mysqli_fetch_array($query)){				 ?>						 <tr>					 <td align="center" >						 <input type="number" name="id" value='<?php echo "$arreglo4[0]";?>' readonly style="text-align:center; width:20px;background:#cccccc;">					 </td>					 <td align="center" >						 <?php echo utf8_decode($arreglo4[1]);?>					 </td>					 <td align="center">						 <?php						echo "<input type='checkbox' name='seleccion[]' class='checklote2' value='".$arreglo4[0]."'>";						?>						</td>				 </tr>					 <?php					}					?>				 </tbody>			</table>			<button class="btn btn-default btn-success" type="submit" value="enviar" style="text-align:center;float:right">Eliminar-txt</button>	 </form>			</div>			<br />			<br />			<div class="container">				<table class="table table-bordered">					<form action="zip.php" method="post">						<input type="hidden" name="name" value="<?php echo $user ?>">						<thead>							<tr>								<th style="text-align:center;"><h3>Crear Archivo Zip</h3></th>								<td align="center" >									<button class="btn btn-default btn-success" type="submit" value="enviar" style="text-align:center;float:center; margin: 10px auto">CREAR</button>								</td>							</tr>						</thead>					</table>						<table class="table table-bordered">						<thead>							<?php	 					$zipquery=mysqli_query($conn,"SELECT * FROM zip_user where user='$user'");						while ($zipArray = mysqli_fetch_array($zipquery)){						 ?>						 <tr>								<td align="center">									<?php echo "$zipArray[1]"; ?>								</td>						 </tr>							<?php						}							 ?>						</thead>					</form>				</table>			</div>		</div>		<div class="container">		<div class="row">    	<div class="span12">				<div class="caption">    		<h2> Administración de usuarios registrados</h2>    		<div class="container" style="border-style:solid; border-radius:20px ;background-color:rgba(0,0,0,0.3)">				<div class="row-fluids">					<br>					<br>					<!--Empieza form de registro-->					<form class="form-horizontal" action="ejecutaactualizar.php" method="post" >						  <input type="hidden" name="id" value="<?php echo $id2?>">						<div class="form-group">	            <label class="control-label col-sm-2" for="email">Nombre</label>	            <div class="col-sm-7">	              <input  type="text" name="nombre" value="<?php echo $user?>" class="form-control" style="text-align: center; border-radius: 3px;">	            </div>	          </div>	          <div class="form-group">	            <label class="control-label col-sm-2" for="email">Correo</label>	            <div class="col-sm-7">	              <input type="text" name="correo" value="<?php echo $email?>" class="form-control" style="text-align: center; border-radius: 3px;">	            </div>	          </div>						<div class="form-group">	            <label class="control-label col-sm-2" for="pwd">Contraseña</label>	            <div class="col-sm-7">	              <input type="password" name="pwd" value="<?php echo $pass?>" class="form-control" style="text-align: center; border-radius: 3px;">								<input type="hidden" name="pwd3" value="<?php echo $pass?>" class="form-control" style="text-align: center; border-radius: 3px;">	            </div>	          </div>						<div class="form-group">	            <label class="control-label col-sm-2">Contraseña Admin</label>	            <div class="col-sm-7">								<?php if ($id2 == 1)								{
									echo "<input type='password' class='form-control' name='pasadmin' style='text-align: center; border-radius: 3px;' value='$pasadmin'>";
									echo "<input type='hidden' class='form-control' name='pasadmin3' style='text-align: center; border-radius: 3px;' value='$pasadmin'>";
								}else{
								 	echo "<input type='password' class='form-control' name='pasadmin' style='text-align: center; border-radius: 3px;' value='$pasadmin' readonly>";
									echo "<input type='hidden' class='form-control' name='pasadmin3' style='text-align: center; border-radius: 3px;' value='$pasadmin'>";
								}
                ?>	            </div>	          </div>	          <br>	          <br>	          <div class="form-group">	            <div class="col-sm-offset-2 col-sm-10">	              <input type="submit" value="Guardar" class="btn btn-success btn-primary">	            </div>	          </div>	        </form>					<br>					<br>					<br>					<hr>    		<div class="span8">					<div style="align:center" class="row">						<div class="col-xs-7 col-sm-offset-2 ">							<h3>Subir Imagenes y Videos</h3>							<!--Empieza form de subir imagenes-->							<form method="post" enctype="multipart/form-data" action="subir_archivo_usuario.php">								<input type="text" class="form-control" name="nombre" style="text-align: center; border-radius: 3px;" value="<?php echo $user ?>" readonly="readonly">								<br>								<br>								<p style="margin-right:20px; float:left"><input type="radio" name="categoria" value="imagen">Fotos</p>								<p style="margin-right:20px; float:left"><input type="radio" name="categoria" value="video">Videos</p>								<br>								<br>								<input type="file" name="user[]" multiple="multiple">								<br>								<br/>								<input type="submit" value="Guardar Archivos">							</form>						</div>					</div>    		</div>				<br>				<br>				<br>				<br>				<hr>									<div class="span8">										<div style="align:center" class="row">											<div class="col-xs-7 col-sm-offset-2 ">												<h3>Subir Archivo de Texto y PDF</h3>												<!--Empieza form de subir imagenes-->												<form method="post" enctype="multipart/form-data" action="subir_archivo_usuario.php">													<input type="text" class="form-control" name="nombre" style="text-align: center; border-radius: 3px;" value="<?php echo $user ?>" readonly="readonly">													<br>													<input type="hidden" name="categoria" value="texto">PDF</p>													<br>													<input type="file" name="user[]" multiple="multiple">													<br/>													<input type="submit" value="Guardar Archivos">												</form>											</div>										</div>					    		</div>    		</div>    		<br/>       </div>    </div>    	</div>    </div>	</div>
	<script src="jquery/jquery-2.2.2.min.js"></script>	<script type="text/javascript" src="js/bootstrap.min.js"></script>	<script src="js/function.js"></script>  </body></html>
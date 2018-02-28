<!DOCTYPE html>

<?php

session_start();

if (@!$_SESSION['nombre']) {

	header("Location:../login.php");

}

//conseguir la informacion del usuario

extract($_GET);

require("../conectardb.php");

$ressql=mysqli_query($conn,"SELECT * FROM clientes WHERE nombre='$id'");

while ($row=mysqli_fetch_row ($ressql)){
			$id2=$row[0];
			$user=$row[1];
			$email=$row[2];
			$pass=$row[3];
			$pasadmin=$row[4];
		}

?>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eliezer Hern&aacute;ndez Photography</title>
  <link rel="icon" href="imagenes/icono.png" charset="utf-8">
 <!-- Tell the browser to be responsive to screen width -->
 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
 <!-- Bootstrap 3.3.6 -->
 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="plugins/iCheck/all.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.bootstrap.min.css">
	<!--file input style-->
	<link href="resources/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
	<!-- Lightbox -->
	<link href="plugins/lightbox/dist/ekko-lightbox.css" rel="stylesheet">
 <!-- Theme style -->
 <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
 <!-- AdminLTE Skins. Choose a skin from the css/skins
      folder instead of downloading all of them to reduce the load. -->
	 <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-purple sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

	<?php include("header.php"); ?>

 <!-- =============================================== -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
     Administraci&oacute;n de Usuarios
     </h1>
     <ol class="breadcrumb">
				<li><a href="index_admin.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
       <li><a href="users.php">Usuarios</a></li>
       <li class="active">Edici&oacute;n de <?php echo "$user"; ?></li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

	<div class="row">
		<div class="col-md-12">
     <!-- Default box -->
     <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title"><?php echo "$user"; ?></h3>
       </div>
       <div class="box-body">
						 <form class="form-horizontal" action="ejecutaactualizar.php" method="post" >
						  <input type="hidden" name="id" value="<?php echo $id2?>">
						<div class="form-group">
	            <label class="control-label col-sm-2" for="email">Nombre</label>
	            <div class="col-sm-7">
	              <input  type="text" name="nombre" value="<?php echo $user?>" class="form-control" style="text-align: center; border-radius: 3px;">
	            </div>
	          </div>
	          <div class="form-group">
	            <label class="control-label col-sm-2" for="email">Correo</label>
	            <div class="col-sm-7">
	              <input type="text" name="correo" value="<?php echo $email?>" class="form-control" style="text-align: center; border-radius: 3px;">
	            </div>
	          </div>
						<div class="form-group">
	            <label class="control-label col-sm-2" for="pwd">Contraseña</label>
	            <div class="col-sm-7">
	              <input type="password" name="pwd" value="<?php echo $pass?>" class="form-control" style="text-align: center; border-radius: 3px;">
								<input type="hidden" name="pwd3" value="<?php echo $pass?>" class="form-control" style="text-align: center; border-radius: 3px;">
	            </div>
	          </div>
						<div class="form-group">
	            <label class="control-label col-sm-2">Contraseña Admin</label>
	            <div class="col-sm-7">
								<?php if ($id2 == 1)
								{

										 echo "<input type='password' class='form-control' name='pasadmin' style='text-align: center; border-radius: 3px;' value='$pasadmin'>";

										 echo "<input type='hidden' class='form-control' name='pasadmin3' style='text-align: center; border-radius: 3px;' value='$pasadmin'>";

									 }else{

										 echo "<input type='password' class='form-control' name='pasadmin' style='text-align: center; border-radius: 3px;' value='$pasadmin' readonly>";

										 echo "<input type='hidden' class='form-control' name='pasadmin3' style='text-align: center; border-radius: 3px;' value='$pasadmin'>";

									 }

										?>
	            </div>
	          </div>
	          <br>
	          <br>
	          <div class="form-group">
	            <div class="col-sm-offset-2 col-sm-10">
	              <input type="submit" value="Guardar" class="btn btn-success btn-primary">
	            </div>
	          </div>
	        </form>
       </div>
     </div>
	 </div>
     <!-- /.box -->
			<div class="col-md-6">
				<div class="box">
					<div class="box-header with-border">
					<h3 class="box-title">Subir Im&aacute;genes y Videos</h3>
					</div>
					<div class="box-body">
						<form id="formfileuser" method="post" enctype="multipart/form-data" action="subir_archivo_usuario.php">
							<input type="hidden" name="nombre" value="<?php echo $user ?>" readonly="readonly">
							<div class="form-group">
								<div class="row">
									<div class="col-xs-3">
										<label>
											<input type="radio" name="categoria" class="minimal" value="imagen">Fotos
										</label>
									</div>
									<div class="col-xs-3">
										<label>
											<input type="radio" name="categoria" class="minimal" value="video">Videos
										</label>
									</div>
								</div>
							</div>
							<div class="kv-main">
								<div class="form-group">
									<label>Archivo</label>
									<input id="file-3" type="file" name="user[]" multiple="multiple">
								</div>
							</div>
					</div>
					<div class="box-footer">
						<input class="btn btn-danger" onclick="formfileuser.submit()" type="button" name="enviar" value="Guardar Archivos">
						</form>
					</div>
				</div>
			</div>
		 <div class="col-md-6" >
			 <div class="box" style="height:230px">
				 <div class="box-header with-border">
					 <h3 class="box-title">Subir Archivos de Texto y PDFs</h3>
				 </div>
				 <div class="box-body">
					 <form id="formpdf" method="post" enctype="multipart/form-data" action="subir_archivo_usuario.php">
						<input type="hidden" name="nombre" value="<?php echo $user ?>" readonly="readonly">
						<input type="hidden" name="categoria" value="texto">
						<div class="kv-main">
							<div class="form-group">
									<label>Archivo</label>
									<input id="file-4" type="file" name="user[]" multiple="multiple">
							</div>
						</div>
				 </div>
				 <div class="box-footer">
					<input class="btn btn-danger" onclick="formpdfuser.submit()" type="button" name="enviar" value="Guardar Archivos">
				 </form>
				 </div>
			 </div>
		 </div>
	 </div>

	 <div class="box">
		 <div class="box-header with-border">
			 <div class="row">
			 	<div class="col-md-4">
					<form action="zip.php" method="post">
						<input type="hidden" name="name" value="<?php echo $user ?>">
						<h3>Crear Archivo Zip</h3>
						<button class="btn btn-lg btn-info" type="submit" value="enviar" >CREAR</button>
					</form>
			 	</div>
				<div class="col-md-8">
					<table class="table table-bordered">
						<tbody>
							<?php
								$zipquery=mysqli_query($conn,"SELECT * FROM zip_user where user='$user'");
								while ($zipArray = mysqli_fetch_array($zipquery)){
							?>
								<tr>
									<td align="center">
										<?php echo "$zipArray[1]"; ?>
									</td>
								</tr>
							<?php
								}
							?>
						</tbody>
					</table>
				</div>
			 </div>
		 </div>
		 <div class="box-body">
		<form action="eliminarimg.php" method="post">
					<input type="hidden" name="form" value="<?php echo $user?>">
					<input type="hidden" name="tipo" value="1">
				<table class="table table-bordered" id="imguser">
				<thead>
					<tr>
						<!--th style="text-align:center">ID</th-->
						<th style="text-align:center">imagen</th>
						<th style="text-align:center">Eliminar <input type="checkbox" class='minimal check' name="checktodos"></th>
					</tr>
				</thead>
				<tbody>
				 <?php
					 $query=mysqli_query($conn ,"SELECT * FROM img_user where user='$user'");
						while($arreglo2=mysqli_fetch_array($query)){
				 ?>
				 		 <tr>
					 <td align="center" >
						 <?php echo "$arreglo2[1]";?>
					 </td>
					 <td align="center">
						<?php
						echo "<input type='checkbox' class='minimal check checklote' name='seleccion[]' value='".$arreglo2[0]."'>";
						?>
						</td>
				 </tr>
					 <?php
					}
					?>
				 </tbody>
			</table>
			<div class="pull-right">
				<button class="btn btn-lg btn-danger" type="submit" value="enviar" >Eliminar-IMG</button>
			</div>
	 </form>
 </div>
 <div class="box-body ">
	 <form action="eliminarimg.php" method="post">
					<input type="hidden" name="form" value="<?php echo $user?>">
					<input type="hidden" name="tipo" value="2">
				<table class="table table-bordered" id="imguser">
				<thead>
					<tr>
						<th style="text-align:center">video</th>
						<th style="text-align:center">Eliminar <input type="checkbox" class="minimal check" name="checktodos1"></th>
					</tr>
				</thead>
				<tbody>
				 <?php
				 	extract($_GET);
					 $query=mysqli_query($conn,"SELECT * FROM vid_user where user='$user'");
						while($arreglo3=mysqli_fetch_array($query)){
				 ?>
				 		 <tr>
						 <input type="hidden" name="id" value='<?php echo "$arreglo3[0]";?>'>
					 <td align="center" >
						 <?php echo "$arreglo3[1]";?>
					 </td>
					 <td align="center">
						 <?php
 						echo "<input type='checkbox' name='seleccion[]' class='minimal check checklote1' value='".$arreglo3[0]."'>";
 						?>
						</td>
				 </tr>
					 <?php
					}
					?>
				 </tbody>
			</table>
			<div class="pull-right">
			<button class="btn btn-lg btn-danger" type="submit" value="enviar">Eliminar-VID</button>
			</div>
	 </form>
 </div>
 <div class="box-body">
	 				<form action="eliminarimg.php" method="post">
					<input type="hidden" name="form" value="<?php echo $user?>">
					<input type="hidden" name="tipo" value="6">
				<table class="table table-bordered" id="imguser">
				<thead>
					<tr>
						<th style="text-align:center">Archivo</th>
						<th style="text-align:center">Eliminar <input type="checkbox" class="minimal check" name="checktodos2"></th>
					</tr>
				</thead>
				<tbody>
				 <?php
					extract($_GET);
					 $query=mysqli_query($conn,"SELECT * FROM text_user where user='$user'");
						while($arreglo4=mysqli_fetch_array($query)){
				 ?>
						 <tr>
						 <input type="hidden" name="id" value='<?php echo "$arreglo4[0]";?>'>
					 <td align="center" >
						 <?php echo utf8_decode($arreglo4[1]);?>
					 </td>
					 <td align="center">
						 <?php
						echo "<input type='checkbox' name='seleccion[]' class='minimal check checklote2' value='".$arreglo4[0]."'>";
						?>
						</td>
				 </tr>
					 <?php
					}
					?>
				 </tbody>
			</table>
			<div class="pull-right">
				<button class="btn btn-lg btn-danger" type="submit" value="enviar">Eliminar-txt</button>
			</div>
	 </form>

 </div>

		 </div>
	 </div>


   </section>
   <!-- /.content -->

		<?php include("menu_admin.php"); ?>


 </div>
 <!-- /.content-wrapper -->

 <footer class="main-footer">

 </footer>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
<!-- Lightbox -->
<script src="plugins/lightbox/dist/ekko-lightbox.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!--fileinput-->
<script src="resources/fileinput/js/fileinput.js" type="text/javascript"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- page script -->
<script>
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
   event.preventDefault();
   $(this).ekkoLightbox();
});
 $(function () {
   $("#imgTable").DataTable({
     "paging": false,
     "lengthChange": false,
     "searching": false,
     "info": true,
     "autoWidth": false,
			"pageLength": 25,
			"columnDefs": [
   { "orderable": false, "targets": [1,2] }]
   });

		var checkAll = $('input[type="checkbox"].all');
   var checkboxes = $('input[type="checkbox"].minimal');

		$('input[type="checkbox"].minimal').iCheck({
     checkboxClass: 'icheckbox_minimal-blue'
   });

   checkAll.on('ifChecked ifUnchecked', function(event) {
       if (event.type == 'ifChecked') {
           checkboxes.iCheck('check');
						$("#delBtn").removeClass('disabled');
       } else {
           checkboxes.iCheck('uncheck');
       }
   });

   checkboxes.on('ifChanged', function(event){
       if(checkboxes.filter(':checked').length == checkboxes.length  ) {
           checkAll.prop('checked', 'checked');
       } else if  (checkboxes.filter(':checked').length > 0){
					 $("#delBtn").removeClass('disabled');
				 } else {
           checkAll.removeProp('checked');
						$("#delBtn").addClass('disabled');
       }
       checkAll.iCheck('update');
   });



	 		//iCheck for checkbox and radio inputs
	 	$('input[type="radio"].minimal').iCheck({
	 		checkboxClass: 'icheckbox_minimal-blue',
	 		radioClass: 'iradio_minimal-blue'
	 	});


 });
</script>
<script>
		$("#file-3").fileinput({
			showUpload: false,
			showCaption: false,
			browseClass: "btn btn-primary btn-sm",
			fileType: "any",
			validateInitialCount: true,
			overwriteInitial: false,
					previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
		});
		$("#file-4").fileinput({
			showUpload: false,
			showCaption: false,
			browseClass: "btn btn-primary btn-sm",
			fileType: "any",
			validateInitialCount: true,
			overwriteInitial: false,
					previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
		});
		</script>
</body>
</html>

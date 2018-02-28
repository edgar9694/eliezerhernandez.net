<?php
session_start();

if (@!$_SESSION['nombre']) {header("Location:../login.php");}

require('../conectardb.php');

?>
<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eliezer Hern&aacute;ndez Photography</title>
	<link rel="icon" href="../imagenes/icono.png" charset="utf-8">
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
     Blog Administrador
     </h1>
     <ol class="breadcrumb">
				<li><a href="index_admin.php"><i class="fa fa-dashboard"></i>Inicio</a></li>
       <li><a href="blog_admin.php">Blog</a></li>
       <li class="active">Administrar Entradas</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">

     <!-- Default box -->
     <div class="box">
       <div class="box-header with-border">
         <h3 class="box-title">Lista de Videos</h3>
       </div>
       <div class="box-body">
					<form role="form" action="eliminarimg.php" method="post">
							<input type="hidden" name="tipo" value="4">
					<table id="vidTable" class="table table-bordered table-striped">
						<thead>
						<tr>
							<th style="text-align:center">Categoria</th>
		          <th style="text-align:center">Vista Previa</th>
		          <th style="text-align:center;padding:8px">Selecci&oacute;n
								<label>
									<input type="checkbox" class="minimal all" >
								</label>
							</th>
						</tr>
						</thead>
						<?php
									$sql = mysqli_query($conn, "SELECT * FROM videos");
									while ($arreglo=mysqli_fetch_assoc($sql))
									{
									 ?>
								<tbody>
									<td align="center">

										<?php echo $arreglo["categoria"]; ?>
									</td>
									<td align="center">
									<?php

									if ($arreglo["categoria"] == "vimeo") {
										 echo "<a href=".$arreglo['url']." data-remote=".$arreglo['url']."  data-toggle=lightbox ><button type='button' class='btn btn-info'>Vista</button></a>";
									} else {
										 echo "<a href=".$arreglo['video']."  data-toggle=lightbox ><button type='button' class='btn btn-info'>Vista</button></a>";
									}
									 ?>
									</td>
									<td align="center">
										<?php
										echo "<input type='checkbox' class='minimal check' name='seleccion[]' value='".$arreglo['id']."'>";
										?>
									</td>
								</tbody>
								<?php

							}
								 ?>
					</table>
					<div class="pull-right">
						<input type="submit" value="Eliminar Seleccionados" class="btn btn-danger disabled" id="delBtn">
					</div>
					</form>
       </div>
     </div>
     <!-- /.box -->
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
   $("#vidTable").DataTable({
     "paging": false,
     "lengthChange": false,
     "searching": false,
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

 });
</script>
</body>
</html>

<?php
session_start();

if (@!$_SESSION['nombre']) {header("Location:../login.php");}

require('../conectardb.php');

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
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
	<!--file input style-->
	<link href="resources/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
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
<div class="wrapper">

	<?php include("header.php"); ?>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Perfil
      </h1>
      <ol class="breadcrumb">
        <li><a href="index_admin.php"><i class="fa fa-dashboard"></i> inicio</a></li>
        <li class="active">Usuarios</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
          <div class="box">
						<div class="box-header with-border" style="text-align:center">
		          <h3  class="box-title">Listas de usuarios</h3>
		        </div>
            <div class="box-body">
							<div class="row">

								<?php
										$stmt = mysqli_query($conn, 'SELECT * FROM clientes ORDER BY id DESC');
										while($row = mysqli_fetch_assoc($stmt)){
											?>
											<div class="col-md-4">
												<!-- Widget: user widget style 1 -->
												<div class="box box-widget widget-user bg-purple-active">
													<div class="row">
														<div class="col-md-6">
															<!-- Add the bg color to the header using any of the bg-* classes -->
															<div class="widget-user-header">
																<h3 class="widget-user-username"><a href="actualizar.php?id=<?php echo $row['nombre'];?>"> <?php echo $row['nombre'];?></a></h3>
																<h5 class="widget-user-desc"><?php echo $row['correo'];?></h5>
															</div>
														</div>
														<div class="col-md-6">
															<img class="img-responsive" src="../imagenes/icono2.png" alt="User Avatar">
														</div>
													</div>

												</div>
											</div>
											<!-- /.col -->
											<?php
										}
								?>

							</div>
							<!-- /.row -->
          	</div>
          <!-- /.nav-tabs-custom -->
					<div class="box-footer">
						<div class="pull-right">
							<a href="registrou.php"><button type="button" class="btn btn-lg btn-danger">Agregar Usuarios</button></a>
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
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!--fileinput-->
<script src="resources/fileinput/js/fileinput.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script>
		$("#file-7").fileinput({
			showUpload: false,
			showCaption: false,
			browseClass: "btn btn-primary btn-sm",
			fileType: "any",
			maxFileCount: 1,
			validateInitialCount: true,
			overwriteInitial: false,
					previewFileIcon: "<i class='glyphicon glyphicon-king'></i>"
		});
</script>
</body>
</html>

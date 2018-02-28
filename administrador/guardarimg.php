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
	<!--tags style-->
  <link href="resources/tags/css/bootstrap-tagsinput.css" rel="stylesheet">
	<!--file input style-->
	<link href="resources/fileinput/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
	<!-- bootstrap wysihtml5 - text editor -->
	<link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
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
        Formulario de Im&aacute;genes
      </h1>
      <ol class="breadcrumb">
        <li><a href="index_admin.php"><i class="fa fa-book"></i>Inicio</a></li>
        <li><a href="blog_admin.php">Galer&iacute;a</a></li>
        <li class="active">Agregar Imagen</li>
      </ol>
    </section>


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Subir Im&aacute;genes</h3>
        </div>
							<form id="formimage" role="form" action="subi_imagen.php" enctype="multipart/form-data" method="post">
								<div class="box-body">
									<div class="form-group">
										<div class="row">
											<div class="col-xs-3">
												<label>
													<input type="radio" name="categoria" class="minimal" value="novias">Novias
												</label>
											</div>
											<div class="col-xs-3">
												<label>
													<input type="radio" name="categoria" class="minimal" value="novios">Novios
												</label>
											</div>
											<div class="col-xs-3">
												<label>
													<input type="radio" name="categoria" class="minimal" value="reportaje">Reportaje
												</label>
											</div>
											<div class="col-xs-3">
												<label>
													<input type="radio" name="categoria" class="minimal" value="trash_the_dress">Trash the Dress
												</label>
											</div>
											<div class="col-xs-3">
												<label>
													<input type="radio" name="categoria" class="minimal" value="inicio">inicio
												</label>
											</div>
											<div class="col-xs-3">
												<label>
													<input type="radio" name="categoria" class="minimal" value="bio">Biografia
												</label>
											</div>
										</div>
									</div>
									<div class="kv-main">
										<div class="form-group">
												<label>Im&aacute;genes</label>
												<input id="file-3" type="file" name="img[]" multiple=true>
										</div>
									</div>
								</div>
								<!-- /.box-body -->
								<div class="box-footer">
									  <input class="btn btn-success" onclick="formimage.submit()" type="button" name="enviar" value="Subir imagenes">
								</div>
							</form>
        <!-- /.box-footer-->
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
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!--tags-->
<script src="resources/tags/js/bootstrap-tagsinput.js"></script>
<!--fileinput-->
<script src="resources/fileinput/js/fileinput.js" type="text/javascript"></script>
<!-- iCheck 1.0.1 -->
<script src="plugins/iCheck/icheck.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<script>
  $(function () {
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
		</script>
</body>
</html>

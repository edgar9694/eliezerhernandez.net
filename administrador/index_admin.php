<!DOCTYPE html>
<?php
session_start();

if (@!$_SESSION['nombre']) {header("Location:../login.php");}

require('../conectardb.php');

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
      Adminitraci&oacute;n
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
			<!-- Small boxes (Stat box) -->
			<div class="row">
				<?php

					$video = mysqli_query($conn,"SELECT * FROM videos");
					$numVideo = mysqli_num_rows($video);
					$img = mysqli_query($conn,"SELECT * FROM imagenes");
					$numImg = mysqli_num_rows($img);
					$client = mysqli_query($conn, "SELECT * FROM clientes ");
					$numClient = mysqli_num_rows($client);

				?>
				<!-- Imagenes -->
				<div class="col-lg-4 col-xs-6">
					<div class="small-box bg-aqua">
						<div class="inner">
							<h3><?php printf($numImg); ?></h3>

							<p>im&aacute;genes</p>
						</div>
						<div class="icon">
							<i class="ion ion-images"></i>
						</div>
						<a href="img_admin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- /Imagenes -->
				<!-- Videos -->
				<div class="col-lg-4 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-green">
						<div class="inner">
							<h3><?php printf($numVideo); ?></sup></h3>
							<p>Videos</p>
						</div>
						<div class="icon">
							<i class="ion ion-ios-videocam"></i>
						</div>
						<a href="video_admin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- /Videos -->
				<!-- Clientes -->
				<div class="col-lg-4 col-xs-6">
					<!-- small box -->
					<div class="small-box bg-yellow">
						<div class="inner">
							<h3><?php printf($numClient); ?></h3>
							<p>Cantidad de Clientes (incluyendo admin)</p>
						</div>
						<div class="icon">
							<i class="ion ion-person"></i>
						</div>
						<a href="blog_admin.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
				<!-- /Clientes -->
			</div>
			<!-- /.row -->



      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Informaci&oacute;n</h3>
        </div>
        <div class="box-body">
					<!-------------------------- Imagenes Box ----------------------------------->
					<h3 >Ultimas Imagenes Añadidas</h3>
					<table id="example2" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th style="text-align:center">Vista previa</th>
							<th style="text-align:center">Categoria</th>
						</tr>
						</thead>
						<tbody>
							<?php
								$listImg = mysqli_query($conn,"SELECT * FROM imagenes ORDER BY id DESC LIMIT 5");
								while ($nameImg = mysqli_fetch_assoc($listImg))
								{
								?>
									<tr>
										<?php
											echo "<td style='text-align:center'>". $nameImg["imagen"] ."</td>";
											echo "<td style='text-align:center'>". $nameImg["categoria"] ."</td>";
										 ?>
									</tr>
							 <?php
							 }
								?>

						</tbody>
					</table>
					<!------------------------------------ End Imagenes Box --------------------->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
					<!-------------------------- Videos Box ----------------------------------->
					<h3 >Ultimas Videos Añadidos</h3>
					<table id="example2" class="table table-bordered table-hover">
						<thead>
						<tr>
							<th style="text-align:center">Vista previa</th>
							<th style="text-align:center">Categoria</th>
						</tr>
						</thead>
						<tbody>
							<?php
								$listVid = mysqli_query($conn,"SELECT * FROM videos ORDER BY id DESC LIMIT 5");
								while ($nameVid = mysqli_fetch_assoc($listVid))
								{
								?>
									<tr>
										<?php
										if ($nameVid["categoria"] == "vimeo") {
											echo "<td style='text-align:center'>". $nameVid["url"] ."</td>";
											echo "<td style='text-align:center'>". $nameVid["categoria"] ."</td>";
										} else {
											echo "<td style='text-align:center'>". $nameVid["video"] ."</td>";
											echo "<td style='text-align:center'>". $nameVid["categoria"] ."</td>";
										}

										 ?>
									</tr>
							 <?php
							 }
								?>

						</tbody>
					</table>
					<!------------------------------------ End Videos Box --------------------->
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">

  </footer>

	<?php include("menu_admin.php"); ?>

</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
</body>
</html>

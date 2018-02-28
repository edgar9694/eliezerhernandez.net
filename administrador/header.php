
	<header class="main-header">
		<!-- Logo -->
		<a href="index_admin.php" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><b>EH</b></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><b>Eliezer Hern&aacute;ndez</b></span>
		</a>
		<!-- Header Navbar: style can be found in header.less -->
		<nav class="navbar navbar-static-top">
			<!-- Sidebar toggle button-->
			<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
				<span class="sr-only">Toggle navigation</span>
			</a>

			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">

<!---------------------------- User Account: style can be found in dropdown.less ---------------------->
					<li class="dropdown user user-menu">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img src="../imagenes/icono2.png" class="user-image" alt="User Image">
							<span class="hidden-xs"><?php echo $_SESSION['nombre'];?></span>
						</a>
						<ul class="dropdown-menu">
							<!-- User image -->
							<li class="user-header">
								<img class="img-circle" src="../imagenes/icono2.png" alt="User Image">
								<p>
									<?php echo $_SESSION['nombre'];?>
								</p>
							</li>
							<!-- Menu Footer-->
							<li class="user-footer">
								<div class="pull-left">
									<a href="users.php" class="btn btn-default btn-flat">Usuarios</a>
								</div>
								<div class="pull-right">
									<a href="Logout.php" class="btn btn-default btn-flat">Desconectarse</a>
								</div>
							</li>
						</ul>
					</li>
<!---------------------------- End User Account -------------------------------------------------------->
				</ul>
			</div>
		</nav>
	</header>
<!----------------------------------- End nav  -------------------------------------------------------->

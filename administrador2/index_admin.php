<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['nombre']) {
	header("Location:../login.php");
}
?>
<html>
  <head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	<br>
	<br>
			 <div class="row" id="tabla">
				 <form action="eliminaru.php" method="post">
		      				</tbody>
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
		<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js' type='text/javascript'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.js'></script>
		<script src="js/function.js"></script>

	</body>
</html>

<?php
session_start();
	require("conectardb.php");
//extrae la informacion del login
	$username=$_POST['correo'];
	$pass=$_POST['clave'];
// compara las contraseñas con las de la db para ver si son iguales
	$sql2=mysqli_query($conn, "SELECT * FROM clientes WHERE correo='$username'");
	if($f2=mysqli_fetch_array($sql2)){
		if(password_verify($pass, $f2['pasadmin'])){
			$_SESSION['id']=$f2['id'];
			$_SESSION['nombre']=$f2['nombre'];
			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='administrador/index_admin.php'</script>";

		}
	}


	$sql=mysqli_query($conn, "SELECT * FROM clientes WHERE correo='$username'");
	if($f=mysqli_fetch_array($sql)){
		if(password_verify($pass, $f['pwd'])){
			$_SESSION['id']=$f['id'];
			$_SESSION['nombre']=$f['nombre'];
			header("Location: index_usuario.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

			echo "<script>location.href='login.php'</script>";
		}
	}else{

		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';

		echo "<script>location.href='login.php'</script>";

	}

?>
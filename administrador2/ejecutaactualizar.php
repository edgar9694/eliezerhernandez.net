<?php
		extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
		require("../conectardb.php");
		//encriptar las contraseñas verificando que no esten vacias
		if (empty($pasadmin)) {
			$pasadmin="";
	} else {
		if ($pasadmin == $pasadmin3)
		{
			$pasadmin2= $pasadmin;
		} else {
			$pasadmin2=password_hash($pasadmin, PASSWORD_DEFAULT,array('cost' => 14 ));
		}
	}

		if (empty($pwd)) {
			$pwd2="";
	} else {
				if ($pwd == $pwd3)
				{
				$pwd2 = $pwd;
				}else {
				$pwd2=password_hash($pwd, PASSWORD_DEFAULT);
				}
	}
		//guardar en la base de datos
		$sentencia="update clientes set nombre='$nombre', correo='$correo',pwd='$pwd2', pasadmin='$pasadmin2' where id='$id'";
		$resent=mysqli_query($conn,$sentencia);
		if ($resent==null) {
			echo "Error de procesamieno no se han actuaizado los datos";
			echo '<script>alert("ERROR EN PROCESAMIENTO NO SE ACTUALIZARON LOS DATOS")</script> ';
			header("location: index_admin.php");

			echo "<script>location.href='index_admin.php'</script>";
		}else {
			echo '<script>alert("REGISTRO ACTUALIZADO")</script> ';

			echo "<script>location.href='actualizar.php?id=$nombre'</script>";

		}
?>
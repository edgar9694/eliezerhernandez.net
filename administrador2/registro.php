<?php
// extrae la informacion del form
	$realname=$_POST['nombre'];
	$mail=$_POST['correo'];
	$nombre_carpeta =	$_POST['nombre'];
	$clave=password_hash($_POST['clave'], PASSWORD_DEFAULT,array('cost' => 14 ));
	$clave2=$_POST['clave2'];

// lo revisa con la db
	require("conectardb.php");
	$checkemail=mysqli_query($conn,"SELECT * FROM clientes WHERE correo='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if(password_verify($clave2, $clave)){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				//require("connectardb.php");
				mysqli_query("INSERT INTO clientes VALUES('','$realname','$mail','$clave','')");

				//creo una carpeta con su nombre
				$nombre_carpeta="imagenes/usuarios/$realname";
				if(!is_dir($nombre_carpeta)){
				@mkdir($nombre_carpeta, 0755);
				}
				$nombre_carpeta="imagenes/usuarios/cover/$realname";
				if(!is_dir($nombre_carpeta)){
				@mkdir($nombre_carpeta, 0755);
				}

				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';



				mysql_close($link);
			}

		}else{
			echo 'Las contraseñas son incorrectas';
		}
?>
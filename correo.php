<?php
//iniciamos sesion
session_start();
// encripto el codigo y lo comparo con la imagen
if( md5($_POST['codigo']) != $_SESSION['captcha'] ) {
  echo '<script>alert("captcha incorrecto")</script> ';
}else{
if ($_POST['formu'] == "boda")
 {
   //el mensaje que se enviara al correo
	$mensaje= "\nNombre: ". $_POST['nombre']." ".$_POST['apellido'];
	$mensaje.= "\nEmail: ".$_POST['correo'];
	$mensaje.="\nNumero de Contacto: ".$_POST['numero'];
	$mensaje.="\nFecha del Evento: ".$_POST['fecha'];
	$mensaje.="\nNumero invitados: ".$_POST['invitados'];
	$mensaje.="\nTipo de Evento: ".$_POST['evento'];
	$mensaje.="\nLocacion del Evento: ".$_POST['lugar'];
	$mensaje.= "\nMensaje: \n".$_POST['mensaje'];
	$destino= "eliezerhernandezfotografia@hotmail.com";
  $destino2="contacto@eliezerhernandez.net";
	$remitente = $_POST['correo'];
	$asunto = "Mensaje enviado por: ".$_POST['nombre']." a través de tu pagina";
	//mail($destino,$asunto,$mensaje,"FROM: $remitente");
  mail("$destino,$destino2",$asunto,$mensaje,"FROM: $remitente");
  echo '<script>alert("se ha enviado su correo")</script> ';
} else if ($_POST['formu'] == "sesiones") {
  //el mensaje que se enviara al correo
	$mensaje= "\nNombre: ". $_POST['nombre']." ".$_POST['apellido'];
	$mensaje.= "\nEmail: ".$_POST['correo'];
	$mensaje.= "\nTipo de Sesion: \n".$_POST['tipo'];
	$mensaje.= "\nMensaje: \n".$_POST['mensaje'];
  $destino= "eliezerhernandezfotografia@hotmail.com";
  $destino2="contacto@eliezerhernandez.net";
	$remitente = $_POST['correo'];
	$asunto = "Mensaje enviado por: ".$_POST['nombre']." a través de tu pagina";
  //mail($destino,$asunto,$mensaje,"FROM: $remitente");
  mail("$destino,$destino2",$asunto,$mensaje,"FROM: $remitente");
  echo '<script>alert("se ha enviado su correo")</script> ';
}
}

	echo "<script>location.href='contacto.php'</script>";

 ?>

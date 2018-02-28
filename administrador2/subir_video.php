<?php
require ("conectardb.php");
$categoria=$_POST['categoria'];

if ($categoria == "vimeo")
{
  $url=$_POST['url'];
  $target_dir2="imagenes/muestra/VIDEOS/vimeo/";
  $target_file2 = $target_dir2 . basename($_FILES["imagen"]["name"]);
  $uploadOk1 = 1;
  $imageFileType2 = strtolower(pathinfo($target_file2,PATHINFO_EXTENSION));


  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["imagen"]["tmp_name"]);
      if($check !== false) {
          echo "el archivo es una imagen - " . $check["mime"] . ".";
          $uploadOk1 = 1;
      } else {
          echo "el archivo no es una imagen.";
          $uploadOk1 = 0;
      }
  }

  // permite ciertos tipos de formato
  if($imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg"
  && $imageFileType2 != "gif" ) {
      echo '<script language="javascript">alert("Solamente los formatos: JPG, JPEG, PNG & GIF estan permitidos .")</script>';
      $uploadOk1 = 0;
  }

  if ($uploadOk1 == 0) {
      echo '<script language="javascript">alert("No se pudo cargar el archivo");</script>';
      echo "<script>location.href='guardarimg.php'</script>";
  // intenta cargar el archivo
  } else {
      if (move_uploaded_file($_FILES["imagen"]["tmp_name"], $target_file2))
  		{

        $query2="insert into videos(descripcion, url, categoria, cara) value ('$descripcion2','$url','$categoria2', '$target_file2')";
        mysql_query($query2) or die('Error al procesar consulta: ' . mysql_error());
          echo '<script language="javascript">alert("El archivo fue cargado exitosamente.");</script>';
          echo "<script>location.href='guardarimg.php'</script>";
      }
  		else
  		{
  			echo'<script language="javascript">alert("Lo sentimos ha habido un error cargando la imagen.");</script>';
        echo "<script>location.href='guardarimg.php'</script>";
      }
    }




} elseif ($categoria2 == "videos")  {

  $target_dir = "imagenes/muestra/VIDEOS/";
  $target_file = $target_dir . basename($_FILES["video"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));






// verifica si el archivo existe
if (file_exists($target_file)) {
    echo '<script language="javascript">alert("Sorry, file already exists.")</script>';
    $uploadOk = 0;
}




// permite ciertos tipos de formato
if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mpeg"
&& $imageFileType != "mov" && $imageFileType != "wmv" ) {
    echo '<script language="javascript">alert("Sorry, only MP4, AVI, MPEG, MOV & WMV files are allowed.")</script>';
    $uploadOk = 0;
}

// verifica si uploadOk es valor 0
if ($uploadOk == 0) {
    echo '<script language="javascript">alert("Sorry, your file was not uploaded.");</script>';
    echo "<script>location.href='guardarimg.php'</script>";
// intenta subir el archivo
} else {
    if (move_uploaded_file($_FILES["video"]["tmp_name"], $target_file))
		{
			$query="insert into videos(descripcion, video, categoria) value ('$descripcion2', '$target_file','$categoria2')";
			mysql_query($query) or die('Error al procesar consulta: ' . mysql_error());
			echo '<script language="javascript">alert("El archivo fue cargado exitosamente.");</script>';

				echo "<script>location.href='guardarimg.php'</script>";
    }
		else
		{
			echo'<script language="javascript">alert("Sorry, there was an error uploading your file.");</script>';
    }
}
}
?>

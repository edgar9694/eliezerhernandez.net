<?php
header("Content-Type: text/html;charset=utf-8");
require ("conectardb.php");
$user=$_POST['nombre'];
$cat=$_POST['categoria'];

if ($cat == "imagen")
{

function moveFiles($files,$user)

{
    $inputFileName = "user"; //nombre del Input origen (ejemplo name="archivo[]" --tomar solo--> archivo
    $uploadDirectory = "imagenes/usuarios/$user"; //ubicacion y nombre del directorio donde se guarda
    $uploadDirectoryMin = "imagenes/usuarios/cover/$user";
    $fileLocations = array();
    $validExtensions = array('gif', 'jpg','jpeg', 'png'); //extensiones permitidas

    if (file_exists($uploadDirectory) && is_writable($uploadDirectory)) { //comprueba si el directorio existe y si es posible escribir
        if (isset($files[$inputFileName]["error"])) {
            foreach ($files[$inputFileName]["error"] as $key => $error) {
                if ($error == 0) {
                    $pieces = explode(".", $files[$inputFileName]["name"][$key]); //obtenemos la extensión
                    $extension = strtolower(end($pieces)); //la pasamos a minuscula

                    $validFileExtension = false;
                    foreach ($validExtensions as $type) { //comprobamos que sea una extensión permitida
                        if ($type == $extension) {
                            $validFileExtension = true;
                        }
                    }

                    if ($validFileExtension) { //si el archivo es valido lo intentamos mover
                        $fileName2 =$user . $pieces[0] . "." . $extension; //generamos un nombre personalizable
                        $fileName = 'or-'.$fileName2;
                        $currentLocation = $files[$inputFileName]["tmp_name"][$key]; //ubicacion original y temporal del archivo
                        $minFoto='min-'.$fileName2;
                        if (!move_uploaded_file($currentLocation, "$uploadDirectory/$fileName")) {
                            echo "No se puede mover el archivo \n";
                        } else {

                          copy($uploadDirectory.'/'.$fileName, $uploadDirectoryMin.'/'.$fileName);
                          resizeImagen($uploadDirectoryMin.'/', $fileName, 400, 400,$minFoto,$extension);
                          unlink($uploadDirectoryMin.'/'.$fileName);
                          $fileLocations[] = $uploadDirectory ."/". $fileName;
                          $fileLocations[] = $uploadDirectoryMin .'/'. $minFoto;
                        }
                    } else {
                        echo "Extension de archivo no valida \n";
                    }
                } else {
                    if ($error != 0 and $error != 4) { //Si no subieron archivos No enviar ninguna advertencia
                        $errorMessage = getErrorMessage($files[$inputFileName]["error"][$key]);
                        echo $errorMessage . " Intente nuevamente. \n";
                        die;
                    }
                }
            }
            return $fileLocations;
        } //fin del existe error
        else {
            echo "Uno de los archivos sobrepasa la capacidad establecida por el servidor";
        }
    } else {
        echo "No existe la carpeta para subir archivos o no tiene los permisos suficientes.";
    }
} // Termina la funcion

function getErrorMessage($error_code)
{ //Mensajes Personalizados
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'El archivo excede el limite permitido por la directiva de PHP';
        case UPLOAD_ERR_FORM_SIZE:
            return 'El archivo excede el limite permitido por la directiva de HTML';
        case UPLOAD_ERR_PARTIAL:
            return 'El archivo solo se subio parcialmente, intentelo de nuevo';
        case UPLOAD_ERR_NO_FILE:
            return 'No hay archivo que subir';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'El folder temporal no existe';
        case UPLOAD_ERR_CANT_WRITE:
            return 'No tiene permisos para grabar archivos en el disco';
        case UPLOAD_ERR_EXTENSION:
            return 'El archivo tiene una extensión NO permitida';
        default:
            return 'Error desconocido al subir el archivo';
    }
} // Termina funcion mensajesErrorArchivos


function resizeImagen($ruta, $nombre, $alto, $ancho,$nombreN,$extension){
    $rutaImagenOriginal = $ruta.$nombre;
    if($extension == 'GIF' || $extension == 'gif'){
    $img_original = imagecreatefromgif($rutaImagenOriginal);
    }
    if($extension == 'JPEG' || $extension == 'jpeg'){
    $img_original = imagecreatefromjpeg($rutaImagenOriginal);
    }
    if($extension == 'jpg' || $extension == 'JPG'){
    $img_original = imagecreatefromjpeg($rutaImagenOriginal);
    }
    if($extension == 'png' || $extension == 'PNG'){
    $img_original = imagecreatefrompng($rutaImagenOriginal);
    }
    $max_ancho = $ancho;
    $max_alto = $alto;
    list($ancho,$alto)=getimagesize($rutaImagenOriginal);
    $x_ratio = $max_ancho / $ancho;
    $y_ratio = $max_alto / $alto;
    if( ($ancho <= $max_ancho) && ($alto <= $max_alto) ){//Si ancho
  	$ancho_final = $ancho;
		$alto_final = $alto;
	} elseif (($x_ratio * $alto) < $max_alto){
		$alto_final = ceil($x_ratio * $alto);
		$ancho_final = $max_ancho;
	} else{
		$ancho_final = ceil($y_ratio * $ancho);
		$alto_final = $max_alto;
	}
    $tmp=imagecreatetruecolor($ancho_final,$alto_final);
    imagecopyresampled($tmp,$img_original,0,0,0,0,$ancho_final, $alto_final,$ancho,$alto);
    imagedestroy($img_original);
    $calidad=70;
    imagejpeg($tmp,$ruta.$nombreN,$calidad);

}




if (!empty($_FILES)) {
    $existingFile = false;
    //Comprobamos que por lo menos haya un archivo
    foreach ($_FILES as $uploadedFile => $dataFile) {
        for ($i = 0; $i < count($dataFile["name"]); $i++) {
            if ($dataFile["name"][$i] != "") {
                $existingFile = true;
            };
        }
    }
    if ($existingFile) {
        //llamamos a la funcion que mueve y comprueba los archivos
        $filesUploaded = moveFiles($_FILES,$user);

    } else {
        die("No hay un archivo para procesar");
    }
} else {
    die("No se enviaron archivos");
}


/*echo "<PRE>";
print_r($filesUploaded);
echo "<PRE>";*/
if (isset($filesUploaded) and !empty($filesUploaded)) {
    //ejemplo de como
    foreach ($filesUploaded as $singleFile)
    {
         $query1=mysqli_query($conn,"SELECT*from img_user where img='$singleFile'");
          $sql=mysqli_num_rows($query1);
          if ($sql>0)
          {
            echo ' <script language="javascript">alert("Atencion, ya existe la imagen.");</script> ';
          } else {
            //echo "<PRE>";
            $file = array();
            $file[] = end(explode("$user/",$singleFile));
            /*echo "<PRE>";
            print_r($file);
            echo "<PRE>";*/
            for ($i=0; $i < count($singleFile); $i++) {

              $prefix=explode("-",$file[$i]);
              /*echo $prefix[0],"<br />";
              echo $prefix[1],"<br />";
              echo "$i","<br />";*/

              if ($prefix[0] == "or") {
                $fileOr = $singleFile;
              } elseif ($prefix[0] == "min") {
                $fileMin = $singleFile;
                /*echo "$fileOr";
                echo "$fileMin";*/
                $sql=("INSERT INTO img_user (id, img, cover, user) VALUES('','$fileOr','$fileMin','$user')");
                if (mysqli_query($conn, $sql)) {
                    echo "New records created successfully";
                }
              }
            }
            echo '<script language="javascript">alert("El archivo fue cargado exitosamente.");</script>';
          }
    }
   echo "<script>location.href='actualizar.php?id=$user'</script>";
}


} elseif ($cat == "video") {



  function moveFiles($files,$user)
  {
      $inputFileName = "user"; //nombre del Input origen (ejemplo name="archivo[]" --tomar solo--> archivo
      $uploadDirectory = "imagenes/usuarios/$user/"; //ubicacion y nombre del directorio donde se guarda
      $fileLocations = array();
      $validExtensions = array('mp4', 'mov', 'wmv', 'mov', 'mpeg','avi'); //extensiones permitidas

      if (file_exists($uploadDirectory) && is_writable($uploadDirectory)) { //comprueba si el directorio existe y si es posible escribir
          if (isset($files[$inputFileName]["error"])) {
              foreach ($files[$inputFileName]["error"] as $key => $error) {
                  if ($error == 0) {
                      $pieces = explode(".", $files[$inputFileName]["name"][$key]); //obtenemos la extensión
                      $extension = strtolower(end($pieces)); //la pasamos a minuscula

                      $validFileExtension = false;
                      foreach ($validExtensions as $type) { //comprobamos que sea una extensión permitida
                          if ($type == $extension) {
                              $validFileExtension = true;
                          }
                      }

                      if ($validFileExtension) { //si el archivo es valido lo intentamos mover
                          $fileName = $user . $pieces[0] . "." . $extension; //generamos un nombre personalizable
                          $currentLocation = $files[$inputFileName]["tmp_name"][$key]; //ubicacion original y temporal del archivo
                          if (!move_uploaded_file($currentLocation, "$uploadDirectory/$fileName")) {
                              echo "No se puede mover el archivo \n";
                          } else {
                              $fileLocations[] = $uploadDirectory . $fileName;
                          }
                      } else {
                          echo "Extension de archivo no valida \n";
                      }
                  } else {
                      if ($error != 0 and $error != 4) { //Si no subieron archivos No enviar ninguna advertencia
                          $errorMessage = getErrorMessage($files[$inputFileName]["error"][$key]);
                          echo $errorMessage . " Intente nuevamente. \n";
                          die;
                      }
                  }
              }
              return $fileLocations;
          } //fin del existe error
          else {
              echo "Uno de los archivos sobrepasa la capacidad establecida por el servidor";
          }
      } else {
          echo "No existe la carpeta para subir archivos o no tiene los permisos suficientes.";
      }
  } // Termina la funcion

  function getErrorMessage($error_code)
  { //Mensajes Personalizados
      switch ($error_code) {
          case UPLOAD_ERR_INI_SIZE:
              return 'El archivo excede el limite permitido por la directiva de PHP';
          case UPLOAD_ERR_FORM_SIZE:
              return 'El archivo excede el limite permitido por la directiva de HTML';
          case UPLOAD_ERR_PARTIAL:
              return 'El archivo solo se subio parcialmente, intentelo de nuevo';
          case UPLOAD_ERR_NO_FILE:
              return 'No hay archivo que subir';
          case UPLOAD_ERR_NO_TMP_DIR:
              return 'El folder temporal no existe';
          case UPLOAD_ERR_CANT_WRITE:
              return 'No tiene permisos para grabar archivos en el disco';
          case UPLOAD_ERR_EXTENSION:
              return 'El archivo tiene una extensión NO permitida';
          default:
              return 'Error desconocido al subir el archivo';
      }
  } // Termina funcion mensajesErrorArchivos


  if (!empty($_FILES)) {
      $existingFile = false;
      //Comprobamos que por lo menos haya un archivo
      foreach ($_FILES as $uploadedFile => $dataFile) {
          for ($i = 0; $i < count($dataFile["name"]); $i++) {
              if ($dataFile["name"][$i] != "") {
                  $existingFile = true;
              };
          }
      }
      if ($existingFile) {
          //llamamos a la funcion que mueve y comprueba los archivos
          $filesUploaded = moveFiles($_FILES,$user);
      } else {
          die("No hay un archivo para procesar");
      }
  } else {
      die("No se enviaron archivos");
  }


  if (isset($filesUploaded) and !empty($filesUploaded)) {
      foreach ($filesUploaded as $singleFile)
      {
          require ("conectardb.php");
          $query1=mysqli_query($conn, "SELECT * from vid_user where vid='$singleFile'");
          $sql=mysqli_num_rows($query1);
          if ($sql>0)
          {
            echo ' <script language="javascript">alert("Atencion, ya existe el video.");</script> ';
          } else {
            mysqli_query($conn, "INSERT INTO vid_user VALUES('','$singleFile','$user')");
            echo '<script language="javascript">alert("El archivo fue cargado exitosamente.");</script>';
          }
      }

      echo "<script>location.href='actualizar.php?id=$user'</script>";

  }













} elseif ($cat == "texto") {



  function moveFiles($files,$user)
  {
      $inputFileName = "user"; //nombre del Input origen (ejemplo name="archivo[]" --tomar solo--> archivo
      $uploadDirectory = "imagenes/usuarios/$user/"; //ubicacion y nombre del directorio donde se guarda
      $fileLocations = array();
      $validExtensions = array('txt','pdf'); //extensiones permitidas

      if (file_exists($uploadDirectory) && is_writable($uploadDirectory)) { //comprueba si el directorio existe y si es posible escribir
          if (isset($files[$inputFileName]["error"])) {
              foreach ($files[$inputFileName]["error"] as $key => $error) {
                  if ($error == 0) {
                      $pieces = explode(".", $files[$inputFileName]["name"][$key]); //obtenemos la extensión
                      $extension = strtolower(end($pieces)); //la pasamos a minuscula

                      $validFileExtension = false;
                      foreach ($validExtensions as $type) { //comprobamos que sea una extensión permitida
                          if ($type == $extension) {
                              $validFileExtension = true;
                          }
                      }

                      if ($validFileExtension) { //si el archivo es valido lo intentamos mover
                          $fileName = $user . $pieces[0] . "." . $extension; //generamos un nombre personalizable
                          $currentLocation = $files[$inputFileName]["tmp_name"][$key]; //ubicacion original y temporal del archivo
                          if (!move_uploaded_file($currentLocation, "$uploadDirectory/$fileName")) {
                              echo "No se puede mover el archivo \n";
                          } else {
                              $fileLocations[] = $uploadDirectory . $fileName;
                          }
                      } else {
                          echo "Extension de archivo no valida \n";
                      }
                  } else {
                      if ($error != 0 and $error != 4) { //Si no subieron archivos No enviar ninguna advertencia
                          $errorMessage = getErrorMessage($files[$inputFileName]["error"][$key]);
                          echo $errorMessage . " Intente nuevamente. \n";
                          die;
                      }
                  }
              }
              return $fileLocations;
          } //fin del existe error
          else {
              echo "Uno de los archivos sobrepasa la capacidad establecida por el servidor";
          }
      } else {
          echo "No existe la carpeta para subir archivos o no tiene los permisos suficientes.";
      }
  } // Termina la funcion

  function getErrorMessage($error_code)
  { //Mensajes Personalizados
      switch ($error_code) {
          case UPLOAD_ERR_INI_SIZE:
              return 'El archivo excede el limite permitido por la directiva de PHP';
          case UPLOAD_ERR_FORM_SIZE:
              return 'El archivo excede el limite permitido por la directiva de HTML';
          case UPLOAD_ERR_PARTIAL:
              return 'El archivo solo se subio parcialmente, intentelo de nuevo';
          case UPLOAD_ERR_NO_FILE:
              return 'No hay archivo que subir';
          case UPLOAD_ERR_NO_TMP_DIR:
              return 'El folder temporal no existe';
          case UPLOAD_ERR_CANT_WRITE:
              return 'No tiene permisos para grabar archivos en el disco';
          case UPLOAD_ERR_EXTENSION:
              return 'El archivo tiene una extensión NO permitida';
          default:
              return 'Error desconocido al subir el archivo';
      }
  } // Termina funcion mensajesErrorArchivos


  if (!empty($_FILES)) {
      $existingFile = false;
      //Comprobamos que por lo menos haya un archivo
      foreach ($_FILES as $uploadedFile => $dataFile) {
          for ($i = 0; $i < count($dataFile["name"]); $i++) {
              if ($dataFile["name"][$i] != "") {
                  $existingFile = true;
              };
          }
      }
      if ($existingFile) {
          //llamamos a la funcion que mueve y comprueba los archivos
          $filesUploaded = moveFiles($_FILES,$user);
      } else {
          die("No hay un archivo para procesar");
      }
  } else {
      die("No se enviaron archivos");
  }


  if (isset($filesUploaded) and !empty($filesUploaded)) {
      foreach ($filesUploaded as $singleFile)
      {
          require ("conectardb.php");
          $query1=mysqli_query($conn, "SELECT * from text_user where texto='$singleFile'");
          $sql=mysqli_num_rows($query1);
          if ($sql>0)
          {
            echo ' <script language="javascript">alert("Atencion, ya existe el archivo.");</script> ';
          } else {
            mysqli_query($conn, "INSERT INTO text_user VALUES('','$singleFile','$user')");
            echo '<script language="javascript">alert("El archivo fue cargado exitosamente.");</script>';
          }
      }

      echo "<script>location.href='actualizar.php?id=$user'</script>";

  }






}

?>
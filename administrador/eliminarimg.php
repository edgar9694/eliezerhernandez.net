<?php
require("conectardb.php");
extract($_POST);
if (empty($_POST['seleccion'])) {
  switch ($tipo) {
    default:
    echo "esta vacia";
    echo "<script>location.href='actualizar.php?id=$form'</script>";
      break;
  }
} else {
  switch ($tipo) {
    case 1:
    $lista=$_POST['seleccion'];
    foreach ($lista as $dato )
    {
    $sql=("SELECT * FROM img_user where id IN(".$dato.")");
    $query=mysqli_query($conn, $sql);
     while($arreglo2=mysqli_fetch_array($query))
         {
           $direct="$arreglo2[1]";
           $file="$arreglo2[2]";
         }
         unlink($file);
         unlink($direct);
             echo '<script language="javascript">alert("El archivo se elimino de la carpeta base.");</script>';


    mysqli_query($conn, "DELETE FROM img_user WHERE id IN(".$dato.")");
    }
    echo '<script language="javascript">alert("El archivo fue eliminado de la base de datos.");</script>';
    echo "<script>location.href='actualizar.php?id=$form'</script>";
      break;

      case 2:
      $lista=$_POST['seleccion'];
      foreach ($lista as $dato )
      {
      $sql=("SELECT * FROM vid_user where id IN(".$dato.")");
      $query=mysqli_query($conn,$sql);
       while($arreglo2=mysqli_fetch_array($query))
           {
             $direct="$arreglo2[1]";
           }
           if (!unlink($direct)) {
               echo '<script language="javascript">alert("El archivo no pudo ser eliminado de la carpeta base.");</script>';
           }

      mysqli_query($conn, "DELETE FROM vid_user WHERE id IN(".$dato.")");
      }
      echo '<script language="javascript">alert("El archivo fue eliminado de la base de datos.");</script>';
      echo "<script>location.href='actualizar.php?id=$form'</script>";

      break;

                  case 3:
                  $lista=$_POST['seleccion'];
                  foreach ($lista as $dato )
                  {
                  $sql=("SELECT * FROM imagenes where id IN(".$dato.")");
                  $query=mysqli_query($conn, $sql);
                   while($arreglo2=mysqli_fetch_array($query))
                       {
                         $direct="$arreglo2[1]";
                       }
                       if(!unlink($direct)){
                           echo '<script language="javascript">alert("El archivo no se elimino de la carpeta base.");</script>';
                       }

                  mysqli_query($conn, "DELETE FROM imagenes WHERE id IN(".$dato.")");
                  }
                  echo '<script language="javascript">alert("El archivo fue eliminado de la base de datos.");</script>';
                  echo "<script>location.href='guardarimg.php'</script>";
                  break;

      case 4:			$lista = $_POST['seleccion'];			foreach ($lista as $dato) {				$sql=mysqli_query($conn,"SELECT*FROM videos where id= '$dato'");				$query = mysqli_fetch_assoc($sql);				if ($query["categoria"] == "videos" ) {							$direct="$arreglo2[1]";					if(!unlink($direct))							{							echo '<script language="javascript">alert("El archivo no se elimino de la carpeta base.");</script>';							}						mysqli_query($conn, "DELETE FROM videos WHERE id= '$dato'");						echo '<script language="javascript">alert("El archivo fue eliminado de la base de datos.");</script>';				}else if ($query["categoria"] == "vimeo" ) {					mysqli_query($conn, "DELETE FROM videos WHERE id= '$dato'");					echo '<script language="javascript">alert("El archivo fue eliminado de la base de datos.");</script>';				}			}

                  break;



          case 6:
          $lista=$_POST['seleccion'];
          foreach ($lista as $dato )
          {
          $sql=("SELECT * FROM text_user where id IN(".$dato.")");
          $query=mysqli_query($conn, $sql);
           while($arreglo2=mysqli_fetch_array($query))
               {
                 $direct="$arreglo2[1]";
               }
               if (!unlink($direct)) {
                   echo '<script language="javascript">alert("El archivo no pudo ser eliminado de la carpeta base.");</script>';
               }

          mysqli_query($conn, "DELETE FROM text_user WHERE id IN(".$dato.")");
          }
          echo '<script language="javascript">alert("El archivo fue eliminado de la base de datos.");</script>';
          echo "<script>location.href='actualizar.php?id=$form'</script>";
            break;

  }



}


 ?>
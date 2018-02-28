<?php
require ("conectardb.php");

extract($_POST);

$lista= $_POST['seleccion'];
 foreach ($lista as $dato)
 {
   $query=mysql_query("SELECT * FROM clientes where id IN(".$dato.")");
    while($arreglo2=mysql_fetch_array($query))
    {
      echo "$arreglo2[1]",'<br/>';
      $query2=mysql_query("SELECT * FROM img_user where user='$arreglo2[1]'");
      while ($arreglo3=mysql_fetch_array($query2))
      {
          echo "$direct",'<br>';
          unlink($arreglo3[1]);
          mysql_query("DELETE FROM img_user WHERE user='$arreglo2[1]'");
      }

      $query3=mysql_query("SELECT * FROM vid_user where user='$arreglo2[1]'");
      while ($arreglo4=mysql_fetch_array($query3))
      {
          echo "$direct",'<br>';
          unlink($arreglo4[1]);
          mysql_query("DELETE FROM vid_user WHERE user='$arreglo2[1]'");
      }

      $nombre_carpeta="imagenes/usuarios/$arreglo2[1]";
      rmdir($nombre_carpeta);
    }
  mysql_query("DELETE FROM clientes where id IN(".$dato.")");

 }


 echo "<script>location.href='index_admin.php'</script>";










 ?>

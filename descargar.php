<?php

require ("conectardb.php");
extract($_GET);
$file= mysqli_query($conn, "SELECT * FROM text_user where id='$id'");
while ($row=mysqli_fetch_row ($file))
    {
      $file2=$row[1];
		}
    $file3=explode('/',$file2);
    $file4= end($file3);
    echo "$file4";
    header('Content-Type: application/pdf');
    header('Content-Type: application/pdf');
    $fp=fopen("$file4", "r");
    fpassthru($fp);
?>











 ?>
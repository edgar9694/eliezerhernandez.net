<?php
$user= $_POST['name'];


// crea el archivo comprimido
function create_zip($files = array(),$destination = "",$user,$overwrite = false) {
	//si el archivo comprimido ya existe y overwrite es falso devuelve falso
	if(file_exists($destination) && !$overwrite) {
		unlink($destination);
	}
	//vars
	$valid_files = array();
	//if files were passed in...
	if(is_array($files)) {
		//cycle through each file
		foreach($files as $file) {
			//make sure the file exists
			if(file_exists($file)) {
				$valid_files[] = $file;
			}
		}
	}
	//if we have good files...
	if(count($valid_files)) {

		//create the archive
		$zip = new ZipArchive();
		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
			return false;
		}
		//add the files
		foreach($valid_files as $file) {
      $file2 = end(explode("$user/", $file));
			$zip->addFile($file,$file2);
		}
		//debug
		echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
    echo '<script language="javascript">alert("se ha creado un archivo zip");</script>';

		//close the zip -- done!
		$zip->close();

		//check to make sure the file exists
		return file_exists($destination);
	}
	else
	{
		return false;
	}
}



require 'conectardb.php';
$files =  array();
$sql=("SELECT * FROM img_user where user='$user'");
$query=mysqli_query($conn, $sql);

 while($arreglo=mysqli_fetch_array($query))
{
     $file = $arreglo[1];
     $files[] = $file;
}

$sql1=("SELECT * FROM vid_user where user='$user'");
$query1=mysqli_query($conn, $sql1);
while($arreglo1=mysqli_fetch_array($query1))
{
    $file = $arreglo1[1];
    $files[] = $file;
}

$sql2=("SELECT * FROM text_user where user='$user'");
$query2=mysqli_query($conn, $sql2);
while($arreglo2=mysqli_fetch_array($query2))
{
    $file = $arreglo2[1];
    $files[] = $file;
}
  /*  echo "<PRE>";
    print_r($files);
    echo "<PRE>";
*/
//if true, good; if false, zip creation failed
$result = create_zip($files,"imagenes/usuarios/$user/$user.zip", $user);
$dir="imagenes/usuarios/$user/$user.zip";


$zip=mysqli_query($conn, "SELECT * FROM zip_user WHERE user='$user'");
$check_zip=mysqli_num_rows($zip);
		if($check_zip>0){
			mysqli_query($conn, "UPDATE zip_user set zip='$dir' where user='$user' ");
			echo "se ha actualizado el archivo";
		}else{
			//require("connectardb.php");
			mysqli_query($conn, "INSERT INTO zip_user VALUES('','$dir','$user')");
			echo "se ha creado el archivo";
		}



  echo "<script>location.href='actualizar.php?id=$user'</script>";









 ?>
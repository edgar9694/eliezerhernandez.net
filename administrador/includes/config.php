<?php
ob_start();
session_start();


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mailoart";

try {
    $db = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully a blog";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


//set timezone
date_default_timezone_set('America/Caracas');

//load classes as needed
function __autoload($class) {

   $class = strtolower($class);

   //if call from within assets adjust the path
   $classpath = 'classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
   }

   //if call from within admin adjust the path
   $classpath = '../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
   }

   //if call from within admin adjust the path
   $classpath = '/../classes/class.'.$class . '.php';
   if ( file_exists($classpath)) {
      require_once $classpath;
   }

}

$user = new User($db);

include('functions.php');
?>

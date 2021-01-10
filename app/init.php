<?php
/*
Including libraries & config and making sure they exist, if you will modify anything please make sure to modify it also in the $libraries array.
Note: all libraries are named : Library.lib.php
*/
$libraries = [
  'Controller'=> 'libs/Controller.lib.php',
  'Core'=> 'libs/Core.lib.php',
  'Database'=> 'libs/Database.lib.php'
];

$functions = [
  'Functions' => 'functions/functions.php'
];

foreach($functions as $function){
  if(!file_exists($function)){
    require_once $function;
  } else {
    die("Failed to load functions !");
  }
}


foreach($libraries as $lib) {
  if(!file_exists($lib)){
    require_once $lib;
  } else {
    die("Library: ".$lib." does not exist !");
  }
}

if(!file_exists('config/config.php')){
  require_once 'config/config.php';
} else {
  die('Failed to load config.php');
}



 ?>

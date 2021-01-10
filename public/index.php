<?php

/*
Requiring the init which contains the libraries array and checks if they exist.
Instantiating the core class in $core object.
$_GET['req'] get the url and the __construct method in Core will deal with it and return an array from the request.
*/
require_once '../app/init.php';

$core = new Core();


 ?>

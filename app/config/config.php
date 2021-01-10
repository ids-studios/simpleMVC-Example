<?php
/*
Defining some important variables: Database & App
*/

//App
define('APPROOT',dirname(dirname(__FILE__))); //Definition of root folder for the app
define('URLROOT','http://localhost/mvc-example'); //url root, make sure this is the correct otherwise some styles or js will not load
define('SITENAME','MvC Example'); //Change this with your sitename or dynamicly add it from database
define('APPVERSION','0.0.1'); //App version
define('AUTHOR','IDS-STUDIOS.NET'); // Author

//Database
define('DBHOST','localhost'); //Your host address, sometimes its different than localhost
define('DBUSER','root'); // Your database user
define('DBPASS','');//Your database password
define('DBNAME','mvc');//Your database name


 ?>

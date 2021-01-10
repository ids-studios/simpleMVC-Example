<!DOCTYPE html>
<html>
<head>
  <style>
  .info {
			border: 5px solid;
			margin: 0px;
			padding: 15px 15px 0px 15px;

		}
		.info {
			color: #00529B;
			background-color: #BDE5F8;

		}

  </style>
</head>
<body>

  <div class="info">
    <h2>simpleMVC by IDS-STUDIOS</h2>
  <p>This is the default view. All controllers have an default method that will set the view to default.<br>
    If you want to set to different view, simply create an folder and place the file there, and use the setView method.<br>
    <hr>
    <i>Example:</i> $this->setView('page/example'); <br>
    <b>Note:</b> Do not use .php extension after example because its added automatically.<br>
    <hr>
    Testing the data array: <?php echo $data['test']; ?><br>
    <hr>
    <b>Database:</b> Database.lib.php class uses PDO with additional options, please reffer to php PDO for more information.<br>
    How to use: Class should extend Database class, for example our models should do that. If you will use it different way just include Datatabase.lib.php and extend to the class.<br>
    <b>Use of the Database class:</b>
    <pre>
    $db = new Database;

    $db->DBQuery('SELECT * FROM table'); //Queries an SQL statement to the database
    $result = $db->DBResultSet(); // Saves the result set into $result variable
    $db->DBQuery('SELECT * FROM table WHERE id = :id'); // Selecting data with prepared statement
    $db->DBBindValues(':id',1); //Binding the id with actual value
    $db->DBExecute(); // Executes the statement, pleace it in if statement to check for true or false.
    $result = $db->DBResultSingle(); // Returning single row
    </pre>
    <b>Use of Funcions clas:</b>
    <pre>
    $functions = new Functions();

    $functions->LogIPAddress(); //Returns IP address from the client / may return null
    $functions->GetOS(); //Returns OS platform / may return null
    $functions->GetBrowser(); //Returns browser / may return null
    $functions->EncryptData($string,$key); //Will encrypt the $string variable with the $key variable / WARNING: This is not 100% safe encryption, do not use for sensitive data.
    $functions->DecryptData($string,$key); //Will decrypt the $string variable with $key variable/ WARNING: If the $key variable is not the right one used to encrypt - will throw error.
    $functions->GenerateRandom($lenght); //Will generate an random string(letters and numbers) with the lenght specified. Modify $characters if you want only letters or numbers.
    $functions->RedirectTo('www.google.com'); // Will redirect to www.google.com
    $funcions->FileExists($file,$path); // Check if $file exists within $path
    </pre>

    <a href="pages/example">Example page </a><br><br>

    <b>Creating an new page: </b> <br>
    In order to create new page, you need to create the page in view/pages/ with name and design you want, after this is done you need to go to controllers/Pages.php and create a new public function with the name desired and set setView('pages/example');<br>
    Check controllers/Pages.php for the example method and view/pages/example.php.


 </p>
 </div>

</body>
</html>

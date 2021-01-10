<?php

class Page  {
  private $dbhand;

  //Here we instantitate the database class so we can make queries to the database
  public function __construct(){
   $this->dbhand = new Database;
  }

  public function getIndex(){
      $sql = "SELECT * FROM sections ORDER BY id ASC"; // SQL used to get the data from database
      $this->dbhand->DBQuery($sql); //Prepare the SQL
      $this->dbhand->DBExecute(); //Execute the SQL
      return $this->dbhand->DBResultSet(); //We return the data from database as associative array
  }



}

 ?>

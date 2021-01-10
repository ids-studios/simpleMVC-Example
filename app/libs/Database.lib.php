<?php
/*
Database PDO lib, change the $options as they suit you !
*/
class Database {

  private $dbhand;
  private $stmt;
  private $error;


  public function __construct() {
    $dsn = 'mysql:host='.DBHOST .';dbname='.DBNAME;
    $options = array(
      PDO::ATTR_PERSISTENT =>true,
      PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_PERSISTENT =>true
     );
     try {
       $this->dbhand = new PDO($dsn,DBUSER,DBPASS,$options);

     } catch (PDOException $e) {
       $this->error = $e->getMessage();
       echo 'Error in PDO database: <b> '.$this->error.'</b>';
     }


  }


  public function DBQuery($sql) {
   $this->stmt = $this->dbhand->prepare($sql);
  }


  public  function DBBindValues($param,$value,$type = null){

    if(is_null($type)){
       switch(true) {
            case is_int($value):
             $type = PDO::PARAM_INT;
             break;
            case is_bool($value):
             $type  = PDO_PARAM_BOOL;
             break;
            case is_null($value):
             $type= PDO_PARAM_NULL;
             break;
            default:
            $type = PDO::PARAM_STR;
       }

    }

    $this->stmt->bindValue($param,$value,$type);

  }

 public function DBExecute() {
   return $this->stmt->execute();
  }


  public function DBResultSet(){
     $this->DBExecute();
     return $this->stmt->fetchAll(PDO::FETCH_OBJ);
  }


  public function DBResultSingle(){
   $this->DBExecute();
   return $this->stmt->fetch(PDO::FETCH_OBJ);
  }


  public function DBRowCount(){
    return $this->stmt->rowCount();
  }



}


 ?>

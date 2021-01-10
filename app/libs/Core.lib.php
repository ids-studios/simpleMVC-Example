<?php

/*
Core class handles the $req coming from $_GET, will check if the controller exists and will automatically instantiate it.
Default controller will be Pages
Default method will be Default
Make sure your controllers have an public method default so it will be called or change $method as you desire.
*/

class Core{
   protected $controller = 'Pages';
   protected $method = 'default';
   protected $params = [];

   public function __construct(){
   $req = $this->getReq();

   if(file_exists('../app/controllers/'.ucwords($req[0]).'.php')){
       $this->controller = ucwords($req[0]);
       unset($req[0]);
   }

    require_once '../app/controllers/'.$this->controller.'.php';
    $this->controller = new $this->controller;

    if(isset($req[1])){
       if(method_exists($this->controller,$req[1])){
         $this->method = $req[1];
         unset($req[1]);
       }
    }

    $this->params = $req ? array_values($req): [];

    call_user_func_array([$this->controller,$this->method],$this->params);


 }
   //Handles the requests
   public function getReq(){
     if(isset($_GET['req'])){
       $req = rtrim($_GET['req'],'/');
       $req = filter_var($req,FILTER_SANITIZE_URL);
       $req = explode('/',$req);
       return $req;
     }
   }
}

 ?>

<?php

/*
Pages extends the Controller so we can use setView and setModel methods. setView takes 2 parameters, name of the file in views and data array.

*/
class Pages extends Controller {

  public function __construct(){
    $this->pageModel = $this->setModel('Page'); //We create an model for Page.Note that in models the Page is named as the class, otherwise it will not instantiate
  }
 public function default(){

   $data = [
    'title' => SITENAME, //Change as this suits you !
    'indexInfo' => $this->pageModel->getIndex() // We push the array we got from database into $data indexInfo array.
     ];
    $this->setView('pages/index',$data); //Rendering the view

   }

   //This is an example readme file, remove it if you dont need
   public function readme(){
     $this->setView('pages/default');
   }



}

 ?>

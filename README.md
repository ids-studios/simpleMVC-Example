# simpleMVC-Example
An example of using simpleMVC with bootstrap template and data from mysql database.

## Installation

Download the files and upload them on your server, make sure to edit the app/config/config.php files together with .htaccess files pointing to the right directory, once ready import the .SQL file to your database

## Usage of setView

How to use simpleMVC, simply put your css,js and other files responsible for your design at the public folder, then navigate to app/views/pages and create the page desired. In order to the simpleMVC to load the page you need to set the view via method, for example:

```php
public function yourPage() {
$data = [
  'text' => 'This is my custom text', 
  'text2' => 'My custom text 2'
  ];
  $this->setView('pages/yourPage',$data); // You can set the view without data, make sure yourPage.php file is in views/pages/ or as you specified in the setView.
}

```
```php
//yourPage.php
//HEADER
<?php print_r($data); ?>
//FOOTER

```
## Usage of setModel

If you wish to use database to output information into the view, you have to make an model in the models folder.Example:

```php
//models-Page.php
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

```
Make sure to add the model into the Pages controller in order to request data from the database. Example:
```php
//Controllers-Pages

public function __construct(){
    $this->pageModel = $this->setModel('Page'); //We create an model for Page.Note that in models the Page is named as the class, otherwise it will not instantiate
  }

```



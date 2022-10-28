<?php
$connecthost = 'mysql:host=localhost;dbname=puissance4;charset=utf8';
$dbuser='root';
$dbpassword='root';

try {
  $dblog = new PDO($connecthost, $dbuser, $dbpassword);
  //code...
} catch (PDOException $error) {

  echo $error -> getMessage();
  //throw $th;
}

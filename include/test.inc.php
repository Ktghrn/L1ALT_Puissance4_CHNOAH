<?php

include_once 'database.inc.php';

?>
 
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title></title>
</head>
<body>
   <?php
   $objet = $db;
   // connexion à la base de données
   $db = new PDO('mysql:host=localhost;dbname=puissance4', $mysql_user, $mysql_password);
   $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
   // requête SQL
   $sql = "SELECT * FROM users";
   //exécution de la requête SQL
   $query = $db->query($sql);
   //récupération des résultats
   $result = $query->fetchAll();
   //affichage des résultats
   foreach ($result as $user) {
       echo $user->id . ' ' . $user->username . ' ' . $user->email . ' ' . $user->password . ' ' . $user->created_at . ' ' . $user->updated_at . '<br>';
   } catch (PDOException $e) {
       print "Erreur !: " . $e->getMessage() . "<br/>";
       die();
   }
   ?>
  
</body>
</html>
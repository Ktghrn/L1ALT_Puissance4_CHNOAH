<?php

$bdd = new PDO('mysql:host=localhost;dbname=puissance4;', 'root', 'root');
if (isset($_POST['Inscription'])){
    if(!empty($_POST['email']) AND !empty($_POST['pseudo']) AND !empty($_POST['mdp']) AND !empty($_POST['confirmmdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
        $confirmmdp = sha1($_POST['confirmmdp']);
        $email = htmlspecialchars($_POST['email']);

    $insertUser = $bdd->prepare("INSERT INTO users(pseudo, email, mdp) VALUES(?, ?, ?)");
    $insertUser->execute(array($pseudo, $email, $mdp)); 

    }else{
        echo "Veuillez completer tous les champs !";
    }

?>
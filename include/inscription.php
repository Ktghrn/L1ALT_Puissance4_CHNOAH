<?php

include_once 'database.inc.php';

?>


<?php 

// On va mettre une condition qui permet d'envoyer les données lorqsq'on clique sur le bouton ``
if (isset($_POST['envoi'])){
    if(!empty($_POST['confirmmdp']) AND !empty($_POST['mdp']) AND !empty($_POST['email']) AND !empty($_POST['pseudo'])){ 

    $pseudo = htmlspecialchars($_POST['pseudo']); // Cette fonction permet de sécuriser les données
    $email = htmlspecialchars($_POST['email']); // htmlspecialchars permet de sécuriser les données
    $mdp = sha1($_POST['mdp']);
    $confirmmdp = sha1($_POST['confirmmdp']);


    // insérer dans la base de données les champs 

 

    // Si il existe au moins un mail identique dans la base de données
    if($db->query("SELECT * FROM users WHERE email = '$email'")->rowCount() > 0){
        $erreur = "Cette adresse mail est déjà utilisée";
        echo $erreur; echo"<br>";
    }else{
        echo "";
  
    }
        // Si il existe au moins un pseudo identique dans la base de données
        if($db->query("SELECT * FROM users WHERE pseudo = '$pseudo'")->rowCount() > 0){
            $erreur = "Ce pseudo est déjà utilisé";
            echo $erreur;
        }else{
            echo""; echo"<br>";
        }

    
    }


    // Si on a cliquer sur le bouton envoi Insérer tous les champs dans la base de données
    if($mdp == $confirmmdp){
        $insertmbr = $db->prepare("INSERT INTO users(pseudo, email, mdp) VALUES(?, ?, ?)");
        $insertmbr->execute(array($pseudo, $email, $mdp));
    }else{
        echo "";
    }

    $to = $email;
    $subject = "Mail de confirmation";
    $message = "Bonjour, Bienvenue sur notre Memmory Game  $pseudo";
    $headers = "From:linantony022@gmail.com\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Votre mail a bien été envoyé";
    } else {
        echo "Une erreur est survenue";
    }

    


}



?>
<!DOCTYPE hboutml>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <!--BANNER-->

    <section class="showcase">
        <div class="video-container">
        <video autoplay="autoplay" muted="" loop="infinite" src="../contact/video/Tunnel - 26475.mp4"></video> 
        </div>
        <div class="contacterh1">
            <strong><h1>INSCRIPTION</h1></strong> 
        </div>
    </section>

    <section class="info-inscription-form">
        <div class="sendinscrition">
        <form method = "POST" id = "myForm">
          <div class="sendinscription-infos">
          <div class="comment">
               <input id="email" class="comment-input-email" type="text" placeholder="email" name ="email">
               <br>
 
               <div class="flash flash-danger alert alert-dismissible fade show" role="alert">
               <span id = "error1"></span>
               <a data-bs-dismiss="alert" aria-label="Close">
               <i class="fas fa-times"></i>
               <input id="pseudo" class="comment-input-pseudo" type="text" placeholder="pseudo" name ="pseudo">
               <br>
 
               <div class="flash flash-danger alert alert-dismissible fade show" role="alert">
               <span id = "error2"></span>
               <a data-bs-dismiss="alert" aria-label="Close">
               <i class="fas fa-times"></i>
              
         
               <input id="mdp" class="comment-input-mdp" type="password" placeholder="mdp" name = "mdp" autocomplete="off">
               <br>
 
               <div class="flash flash-danger alert alert-dismissible fade show" role="alert">
               <span id = "error3"></span>
               <a data-bs-dismiss="alert" aria-label="Close">
               <i class="fas fa-times"></i>
     
               <input id="confirmmdp" class="comment-input-cmdp" type="text" placeholder="confirmmdp" name = "confirmmdp">
               <br>
 
               <div class="flash flash-danger alert alert-dismissible fade show" role="alert">
               <span id = "error4"></span>
               <a data-bs-dismiss="alert" aria-label="Close">
               <i class="fas fa-times"></i>
 
               <div class="flash flash-danger alert alert-dismissible fade show" role="alert">
               <span id = "error5"></span>
               <a data-bs-dismiss="alert" aria-label="Close">
               <i class="fas fa-times"></i>
            </div>
          <div class="button">
               <input type="submit" class="btn-gradient" value="Inscription" name = "envoi">
          </div>
      </section>
   <section>
      <script>
       var validation = document.getElementById('myForm');
       var email = document.getElementById('email');
       var pseudo = document.getElementById('pseudo');
       var mdp = document.getElementById('mdp');
       var confirmmdp = document.getElementById('confirmmdp');
       validation.addEventListener('submit', f_valid);
 
       error1 = document.getElementById('error1');
       error2 = document.getElementById('error2');
       error3 = document.getElementById('error3');
       error4 = document.getElementById('error4')
       error5 = document.getElementById('error5');
 
       function f_valid(){
           e.preventDefault();
           if (email.value == ""){
               error1.textContent = "Veuillez renseigner votre email";
               error1.style.color = "";
           } else if (!email.value.includes("@") || !email.value.includes(".")) {
       
               error1.textContent = "Veuillez renseigner un email valide";
               error1.style.color = "";
           } else {
               error1.textContent = "";
           }
 
           if (pseudo.value == ""){
      
               error2.textContent = "Veuillez renseigner votre pseudo";
               error2.style.color = "";
           } else if (pseudo.value.length < 4) {
       
               error2.textContent = "Veuillez renseigner un pseudo  valide";
               error2.style.color = "";
           } else {
               error2.textContent = "";
           }
 
           if (mdp.value == ""){
               error3.textContent = "Veuillez remplir votre mots de passe";
               error3.style.color = "";
           } else if (mdp.value.length < 8) {
               error3.textContent = "Veuillez renseigner un mots de passe ayant au moins 8 charactères";
               error3.style.color = "";
           } else {
              error3.textContent = "";
           }
 
           if (mdp.value !== confirmmdp.value){
               error4.textContent = "Le mots de passe confirmé n'est pas égale à la valeur du mots de passe";
               error4.style.color = "";
           } else{
              error4.textContent = "";
           }
 
           // si au moins un champs est vide
           if (email.value == "" || pseudo.value == "" || mdp.value == "" || confirmmdp.value == ""){
               error5.textContent = "Veuillez remplir tous les champs";
               error5.style.color = "";
           } else {
               error5.textContent = "";
           }
       }
       </script> 
    </section>
</body>
</html>
<?

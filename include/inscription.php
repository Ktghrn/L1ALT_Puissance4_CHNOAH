<?php
include_once 'database.inc.php';
?>


<?php 
// On va mettre une condition qui permet d'envoyer les données lorqsq'on clique sur le bouton 
if (isset($_POST['envoi'])){
    if(!empty($_POST['confirmmdp']) AND !empty($_POST['mdp']) AND !empty($_POST['email']) AND !empty($_POST['pseudo'])) {
    } 
}else{
    echo 'Veuillez compléter tous les champs';
}
?>

<!DOCTYPE html>
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
        <form method = "POST">
          <div class="sendinscription-infos">
              <div class="comment">
                 <input data-id="comment-author" class="comment-input-email" type="text" placeholder="Email" name ="email">
                 <input data-id="comment-pseudo" class="comment-input-pseudo" type="text" placeholder="Pseudo" name ="pseudo">
                 <input data-id="comment-mdp" class="comment-input-mdp" type="text" placeholder="Mot de passe" name = "mdp">
                 <input data-id="comment-cmdp" class="comment-input-cmdp" type="text" placeholder="Confirmez le mot de passe" name = "confirmmdp">
              </div>
          </div>
            <div class="button">
                 <input type="button" class="btn-gradient" value="Inscription" name = "envoi">
            </div>
        </form>
      </section> 

</body>
</html>




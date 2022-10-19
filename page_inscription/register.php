<!DOCTYPE html>
<html lang="fr">
<head>
<?php
  require '../include/og_header.inc.php';
  ?>
  <link  rel="stylesheet" href="../page_inscription/regis.css">;

</head>
<body>

<?php
  require '../include/header.inc.php';
  ?>
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
          <div class="sendinscription-infos">
              <div class="comment">
                 <input data-id="comment-author" class="comment-input-email" type="text" placeholder="Email" >
                 <input data-id="comment-pseudo" class="comment-input-pseudo" type="text" placeholder="Pseudo">
                 <input data-id="comment-mdp" class="comment-input-mdp" type="text" placeholder="Mot de passe">
                 <input data-id="comment-cmdp" class="comment-input-cmdp" type="text" placeholder="Confirmez le mot de passe">
              </div>
          </div>

            <div class="button">
                 <input type="button" class="btn-gradient" value="Inscription">
            </div>
      </section>

  <?php
  require '../include/footer.inc.php';
  ?>
</body>
</html>

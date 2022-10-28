<?php

include_once 'database.inc.php';

?>
<?php 

 
 // Se connecter à la base de données puissance4 et extraire table score ;





  //On va selectionner les données de la table score

  if (isset($_POST['search'])){
    $sql = "SELECT level, pseudo, scoreseconde FROM score ";
    $tabscore = $db -> prepare($sql);
    $tabscore -> execute();
    $tabscoreall = $tabscore -> fetchAll();
  }
         
 
?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <?php
  require '../include/og_header.inc.php';
  ?>
    <link rel="stylesheet" href="../tab_score/tab_score.css">
    <title>Tableaux des scores</title>
</head>
<body>
  <?php
  require '../include/header.inc.php';
  ?>
    <section class="showcase">
        <div class="video-container">
    <video autoplay="autoplay" muted="" loop="infinite" src="../tab_score/video.mp4"></video>
    </div>
    <div class="contacterh1">
        <strong><h1>TABLEAUX DES SCORES</h1></strong>
    </section>
   

<table class="tab_score">
  <thead>
    <tr>
      <th>Pseudo</th>
      <th>Level</th>
      <th>Score en seconde</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($tabscoreall as $row): ?>
      <tr>
        <td><?php echo $row->pseudo; ?></td>
        <td><?php echo $row->level; ?></td>
        <td><?php echo $row->scoreseconde; ?></td>
      </tr>
      <?php endforeach; ?>
   </tbody>
</table>
    </div>
    <?php
    require '../include/footer.inc.php';
    ?>
</body>
<script>
  var select = document.getElementById('select');
  select.addEventListener('change', function() {
    this.form.submit();
  });
</script>   
</html>


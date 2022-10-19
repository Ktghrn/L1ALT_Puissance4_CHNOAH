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

    <div class="score1">

        <div class ="reussiteclicks">


             <div class="reussite">

                <h1 class="titrescore">nb.Réussites</h1>
                </br>
                <p id="scoreréussite"><a>14/28</a></p>

                <h2 class="titrescore2">Pourcentage de Réussites</h2>
                <p id="scoreréussite2">50%</p>

             </div>

             <div class = "clicks">
                <h1 class="titrescore">nb.Clicks </h1>
                </br>
                <p id="nbclicks">40</p>

             </div>


        </div>

        <div class="classement">
            <h1 class="titrescore4">Classement</h1>
        </br>
            <table class="tab2">
                <tr>
                    <th>Rang</th>
                    <th>Pseudo</th>
                    <th>Nb.Réussite</th>
                    <th>Niveau de difficulté</th>
                    <th>Score du joueur</th>


                  </tr>
                  <tr>
                    <td class="rang"> #1 </td>
                    <td class="nomplayer"> Kevin </td>
                    <td class="ratio"> 20/28 </td>
                    <td class="level"> Difficile </td>
                    <td class="pts"> 200 pts </td>

                  </tr>
                  <tr>
                    <td class="rang"> #2 </td>
                    <td class="nomplayer"> Paul </td>
                    <td class="ratio"> 18/28 </td>
                    <td class="level"> Difficile </td>
                    <td class="pts"> 100 pts </td>
                  </tr>
                  <tr>
                    <td class="rang"> #3 </td>
                    <td class="nomplayer"> Jacques </td>
                    <td class="ratio"> 17/28 </td>
                    <td class="level"> Moyen </td>
                    <td class="pts"> 100 pts </td>
                  </tr>
                  <tr>
                    <td class="rang"> #4 </td>
                    <td class="nomplayer"> Louis </td>
                    <td class="ratio"> 16/28 </td>
                    <td class="level"> Difficile </td>
                    <td class="pts"> 400 pts </td>
                  </tr>
                  <tr>
                    <td class="rang"> #5 </td>
                    <td class="nomplayer"> Charles </td>
                    <td class="ratio"> 14/28 </td>
                    <td class="level"> Facile </td>
                    <td class="pts"> 100 pts </td>
                  </tr>
            </table>


        </div>

    </div>
    <?php
    require '../include/footer.inc.php';
    ?>
</body>
</html>

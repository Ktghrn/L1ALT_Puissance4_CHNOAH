<!DOCTYPE html>
<html lang="en">
<head>
  <?php
  require '../include/og_header.inc.php';
  ?>
    <title>Document</title>
    <link rel="stylesheet" href="../memory/selectstyle.css">
</head>

<body class="select-body">
  <?php
  require '../include/header.inc.php';
  ?>

  <section class="showcase">
    <div class="video-container">
      <video autoplay="autoplay" muted="" loop="infinite" src="../contact/video/Tunnel - 26475.mp4"></video>
    </div>
    <div class="contacterh1">
      <strong><h1>Level</h1></strong>
    </div>
  </section>
  <section>
    <div class="container-select">
      <div class="container-dif">
        <p>Choose the diffilculty</p>
        <a href="./jeu_facile.php"><button>Facile</button></a>
        <a href="./jeu_normal.php"><button>Normale</button></a>
        <a href="./jeu_difficle.php"><button>Difficile</button></a>
      </div>
    </div>
  </section>
  <script src="memoryscript.js"></script>
  <?php
  require '../include/footer.inc.php';
  ?>
</body>
</html>

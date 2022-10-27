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
      <div class="container-theme">
        <p>Choose a theme</p>
        <select onchange="img1()" name="theme" id="theme-select">
          <option value="">--Please choose an option--</option>
          <option value="pokemon">pokemon</option>
          <option value="paysage">paysage</option>
          <option value="pays">pays</option>
        </select>
      </div>
      <div class="container-dif">
        <p>Choose the diffilculty</p>
        <select onchange="img2()" name="difficult" id="dif-select">
          <option value="">--Choose an option--</option>
          <option value="facile">facile</option>
          <option value="intermediaire">intermédiaire</option>
          <option value="expert">expert</option>
          <option value="impossible">impossible</option>
          <option value="troll">troll</option>
        </select>
      </div>
    </div>
    <div class="container-img">
      <img id="myimage1">
      <img id="myimage2">
    </div>
    <div class="btn-select">
      <button id="btn-play">Play</button>
    </div>
  </section>
  <script src="memoryscript.js"></script>
  <?php
  require '../include/footer.inc.php';
  ?>
</body>
</html>

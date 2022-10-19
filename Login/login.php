
<!DOCTYPE html>
<html lang="en">
<head>
<?php
  require '../include/og_header.inc.php';
  ?>
  <link  rel="stylesheet" href="../Login/login.css">

  <title>Login</title>
</head>
<body>

<?php
  require '../include/header.inc.php';
  ?>

  <section class="showcase">
    <div class="video-container">
    <video autoplay="autoplay" muted="" loop="infinite" src="../contact/video/Tunnel - 26475.mp4"></video>
    </div>
    <div class="contacterh1">
        <strong><h1>LOGIN</h1></strong>
    </div>
</section>

  <!--CARDS-->
    <div class='input-fields'>
      <input type='email' placeholder='Email' class='input-line full-width'></input> <BR></BR>
      <input type='password' placeholder='Password' class='input-line full-width'></input>
    </div>
      <div><button class='ghost-round'>Let's go</button></div>

  <?php
  require '../include/footer.inc.php';
  ?>
</body>
</html>

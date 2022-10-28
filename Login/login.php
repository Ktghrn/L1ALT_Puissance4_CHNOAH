<?php
  require '../include/database.inc.php';

  if(isset($_POST['mail']) && (isset($_POST['passw']))) {

    $mail = htmlspecialchars($_POST['mail']);
    $passw = ($_POST['passw']);

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
      //echo "<p style=color:red>email ok</p>";
      $pattern = '/^(?=.*[!@#$%^&*-])(?=.*[0-9])(?=.*[A-Z]).{8,20}$/ ';
      if (preg_match($pattern, $passw)){
        $test = $dblog->prepare('SELECT id, password FROM user WHERE email = :email');
        $test->execute(['email' => $mail]);
        $test = $test->fetch();
        //  echo $test['password'];
        if (isset($test['password']) && !empty($test['password'])) {
          if (password_verify($passw, $test['password'])) {
              setcookie('user_id', $test['id'], time() + 48 * 3600);
              $tr = '<div class="flash flash-success alert alert-dismissible fade show" role="alert">
              <span><strong>Yay!</strong> 🎉 Welcome back!</span>
              <a data-bs-dismiss="alert" aria-label="Close">
                <i class="fas fa-times"></i>
              </a>
            </div>';
            header('Location: ../index.php');
            exit();
          }else{
              echo "mdp incorrect";
          }
      }else{
          echo "aucun compte n'existe aevc cette adresse mail";
       }
      } else {
        echo "password or email incorrect, please enter password with at least one numeric and special character";
      }

    }
  }

?>







<!DOCTYPE html>
<html lang="fr">
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

  if (isset($tr) && !empty($tr)) {
    echo $tr;
  }

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
    <form method="POST"> <!--Passe en GET pour visuel -->
      <input type='email' name='mail' placeholder='Enter your Email' required class='input-line full-width'></input> <BR></BR>
      <input type='password' name="passw"  placeholder='Enter your Password' required class='input-line full-width'></input>
      <input type="submit" id='submit' value='LOGIN' >
      <?php

      if(isset($_GET['error'])){
        $err = $_GET['error'];
        if($err==1 || $err==2)
        echo "<p style='color:red'> Incorrect Email or Password </p>";
      }



      ?>
    </div>


  <?php
  require '../include/footer.inc.php';
  ?>
</form>
</body>
</html>

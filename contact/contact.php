<!DOCTYPE html>
<html lang="en">
<head>
<?php
  require '../include/og_header.inc.php';
  ?>
  <link rel="stylesheet" href="../contact/_contact.css">
</head>


<body>
<?php
  require '../include/header.inc.php';
  ?>
<!--BANNER -->


  <section class="showcase">
    <div class="video-container">
      <video autoplay="autoplay" muted="" loop="infinite" src="video/Tunnel - 26475.mp4"></video>
    </div>
    <div class="contacterh1">
      <strong><h1>NOUS CONTACTER</h1></strong>
    </div>
  </section>

    <!--CARDS-->
  <section class="cards-section">
    <div class="content-contact">
      <div class="card-contact">
        <div class="card-body-contact">
          <div class="round-card-contact">
            <div class="image-container-contact">
              <img src="img_contact/telephone.svg" alt="telephone" width="25px" height="25px">
            </div>
          </div>
          <p>06 05 04 03 02</p>
        </div>
      </div>

      <div class="card-contact">
        <div class="card-body-contact">
          <div class="round-card-contact">
            <div class="image-container-contact">
              <img src="img_contact/mail.svg" alt="mail" width="25px" height="25px">
            </div>
          </div>
          <p>support@powermemory.com</p>
        </div>
      </div>

      <div class="card-contact">
        <div class="card-body-contact">
          <div class="round-card-contact">
            <div class="image-container-contact">
              <img src="img_contact/position.svg" alt="location" width="25px" height="25px">
            </div>
          </div>
          <p>Paris</p>
        </div>
      </div>
    </div>
  </section>

<!--CONTACT FORM-->

<section class="info-contact-form">
  <div class="sendcomment">
    <div class="sendcomment-infos">
      <div class="comment">
        <input data-id="comment-author" class="comment-input " type="text" placeholder="Name" >
        <input data-id="comment-email" class="comment-input comment-input-email " type="text" placeholder="Email">

        <div class="subject-area-wp">
          <input data-id="subject-content" class="subject-area " type="text" placeholder="Subject">
          </div>
      </div>
      <div class="comment-area-wp">
        <textarea data-id="comment-content" class="comment-area " cols="10" rows="10" placeholder="Message"></textarea>

            <div data-id="username-holder" class="name">
            </div>
            <input type="button" class="btn-gradient" value="Send">
          </div>
      </div>

    </div>
  </div>
</section>

<?php
require '../include/footer.inc.php';
?>

</body>
</html>

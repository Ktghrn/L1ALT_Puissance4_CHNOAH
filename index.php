<!DOCTYPE html>
<html class="htmlindex" lang="fr">
<head>
  <?php
  require 'include/og_header.inc.php';
  ?>
      <link rel="stylesheet" href="index.css">
</head>
<body class ="bodyindex">
  <?php
  require 'include/header.inc.php';
  ?>

    <section class="block-shome">
        <video autoplay="autoplay" muted="" loop="infinite" src="video-img-index/video.mp4"></video>
        <div class="block-homep">
            <div class="titre-a">
                <p>BIENVENUE DANS</p>
                <p>NOTRE STUDIO !</p>
            </div>
            <p>Venez challenger les cerveaux les plus agiles !</p>
            <a href="memory/select.html"><button>JOUER !</button></a>
        </div>
    </section>
    <section class="abs">
        <div class="img-p">   <!--Block image + pargraphe-->
            <div class="img-i">   <!--Image-->
                <img src="video-img-index/img1.jpg" alt="image jeux video arcade">
                <img src="video-img-index/img2.jpg" alt="Poster creeper">
                <img src="video-img-index/img3.jpg" alt="Poster arcade">
            </div>  <!--------->
            <div class="bp">   <!--Paragraphe-->
                <h1 class ="h1t">01</h1>
                <div>
                    <h3>Lorem Ipsum</h3>
                    <p>Quisque commodo facilisis pursus, interdum voluptat arcu viverra sed.
                        Etiam sodales convallis pretium. Aenean pharetra laoreet lorem.
                        Nunc daphibus tincidunt sem a pharetra. Duis vitae tristique leo, sed faucibus ipsum</p>
                </div>
                <h1 class="h1t">02</h1>
                <div>
                    <h3>Lorem Ipsum</h3>
                    <p>Quisque commodo facilisis pursus, interdum voluptat arcu viverra sed.
                        Etiam sodales convallis pretium. Aenean pharetra laoreet lorem.
                        Nunc daphibus tincidunt sem a pharetra. Duis vitae tristique leo, sed faucibus ipsum</p>
                </div>
                <h1 class="h1t">03</h1>
                <div>
                    <h3>Lorem Ipsum</h3>
                    <p>Quisque commodo facilisis pursus, interdum voluptat arcu viverra sed.
                        Etiam sodales convallis pretium. Aenean pharetra laoreet lorem.
                        Nunc daphibus tincidunt sem a pharetra. Duis vitae tristique leo, sed faucibus ipsum</p>
                </div>
            </div>  <!-------------->
        </div>  <!--------------------------->
        <div class="stats">   <!--Block stats-->
            <img class = "img-i" src="video-img-index/img4.jpg" alt="">
            <div>
                <div class="block1">
                    <h1 class="h1t">0</h1>
                    <h3>Parties Jouées</h3>
                </div>
                <div class="block2">
                    <h1 class ="h1t">0 sec</h1>
                    <h3>Temps Record</h3>
                </div>
            </div>
            <div>
                <div class="block3">
                    <h1 class="h1t">0</h1>
                    <h3>Joueurs Connectés</h3>
                </div>
                <div class="block4">
                    <h1 class ="h1t">0</h1>
                    <h3>Joueurs Inscrits</h3>
                </div>
            </div>
        </div>  <!--------------->
        <div>   <!--Block équipe-->
            <div class="para">
                <h1 class="h1t">Notre Équipe</h1>
                <p>Quisque commodo facilisis pursus, interdum volitpat arcu viverra sed.</p>
                <img class = "img-i" src="video-img-index/img5.png" alt="">
            </div>
            <div class="team">
                <div class="person">
                    <div class="container">
                        <div class="container-inner">
                            <img class="circle" src="video-img-index/chn.jpeg"/>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="name">CHN</div>
                    <div class="title">CEO de vibraniume tech</div>
                    <div class="icon">
                        <i class='bx bxl-facebook' ></i>
                        <i class='bx bxl-twitter'></i>
                        <i class='bx bxl-discord-alt' ></i>
                    </div>
                </div>
                <div class="person">
                    <div class="container">
                        <div class="container-inner">
                            <img class="circle" src="video-img-index/kenken.jpeg"/>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="name">Kenken</div>
                    <div class="title">Osekour 404</div>
                    <div class="icon">
                        <i class='bx bxl-facebook' ></i>
                        <i class='bx bxl-twitter'></i>
                        <i class='bx bxl-discord-alt' ></i>
                    </div>
                </div>
                <div class="person">
                    <div class="container">
                        <div class="container-inner">
                            <img  class="circle" src="video-img-index/anto.jpeg"/>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="name">Antony</div>
                    <div class="title">??????</div>
                    <div class="icon">
                        <i class='bx bxl-facebook' ></i>
                        <i class='bx bxl-twitter'></i>
                        <i class='bx bxl-discord-alt' ></i>
                    </div>
                </div>
            </div>
        </div>  <!---------------->

    </section>
    <?php
require 'include/footer.inc.php';
?>
</body>
</html>

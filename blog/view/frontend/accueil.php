<?php $title = 'Accueil'; ?>
<?php ob_start();?>
<!--<span id="bonjSession">Bonjour <?= $_SESSION['pseudo'];?></span>-->
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
    <?php
    if(isset($_SESSION['pseudo']))
    {
      ?>
      <span id="bonjSession">Bonjour <?= $_SESSION['pseudo'];?></span>
      <?php
    }else{
      ?> 
      <span id="bonjSession">Bonjour</span><?php
    }
    ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php"><span><i class="fa fa-home"></i></span> Accueil <span class="sr-only">(current)</span></a>
        </li>
        <?php
        if(isset($_SESSION['pseudo']))
        {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=deconnexion">Déconnexion</a>
          </li>
          <?php
          if($_SESSION['droits'] == 1){ ?>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=adminViewConnect">Admin</a>
            </li>
            <?php
          }
          ?>
          <?php
        }else{
          ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=displConnexion">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?action=displFormulContact">Créer un compte</a>
            </li><?php
          }
          ?> 
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="public/images/Alaska.png" class="d-block w-100" alt="train Alaska">
        </div>
        <div class="carousel-item">
          <img src="public/images/parc-national.png" class="d-block w-100" alt="paysage montagnes">
        </div>
        <div class="carousel-item">
          <img src="public/images/aurore.png" class="d-block w-100" alt="aurore boréale">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><br><br>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4">
          <h2>Jean Forteroche</h2>
          <p><img src="public/images/photo.png" alt="photo de l'auteur"></p>
          
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4">
          <h2>C'est officiel !</h2>
          <p id="presentation">Depuis le temps que je vous avais promis un blog pour accéder chapitre après chapitre à la lecture de mon dernier roman, et devant l’enthousiasme que vous avez manifesté lors du vote sur Facebook, c’est enfin arrivé !
            Vous avez enfin sous les yeux le site officiel version blog de mon dernier roman « Billet simple pour l’Alaska ».
          J’espère que ce concept vous plaira et surtout que ce récit vous captivera autant que je l’ai été à l’écrire. Je vous souhaite un agréable voyage...</p>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-4">
          <h2>Billet simple pour l’Alaska </h2>
          <p>Très bien, nous y sommes?<br>Alors, tenez-vous prêt... Veillez à ne pas gêner la fermeture des portes, nous allons partir pour un long périple à travers de grandes contrées sauvages... Attention mesdames et messieurs ! Attention au départ !</p><br><br>
          
          <button type="submit" onClick="javascript:document.location.href='index.php?action=listChapitres'" class="btn btn-secondary">Je veux lire !</button>
          
        </div>
      </div>
    </div>
    
    <?php $content = ob_get_clean(); ?>
    <?php require('template.php'); ?>
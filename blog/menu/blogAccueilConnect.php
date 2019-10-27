<?php
session_start();
setcookie('pseudo', $_SESSION['pseudo'], time() + 60*60*24*30, null, null, false, true);
if(isset($_POST['pseudo']) AND !empty($_POST['pseudo'])) 
 if(isset($_POST['id']) AND !empty($_POST['id']))
  if(isset($_POST['droits']) AND !empty($_POST['droits']))
  {  
    $_SESSION['pseudo'] = $_POST['pseudo'];
    $_SESSION['id'] = $_POST['id'];
    $_SESSION['droits'] = $_POST['droits'];
 
  }

 ?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../public/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf " crossorigin="anonymous">
    <title>Jean Forteroche blog</title>
  </head>
  <body>
    <header>
      <div class="container">
      <h1>Le blog de Jean...</h1><span id="bonjSession">Bonjour <?= $_SESSION['pseudo'];?></span>
    </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  <span class="navbar-brand">Menu</span>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        
        <a class="nav-link" href="blogAccueil.php"><span><i class="fa fa-home"></i></span> Accueil <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php?action=adminViewConnect&amp;droits=<?=$_SESSION['droits']?>">Admin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.php?action=deconnexion">Déconnexion</a>
      </li>
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
      <img src="../public/images/Alaska.png" class="d-block w-100" alt="train Alaska">
    </div>
    <div class="carousel-item">
      <img src="../public/images/parc-national.png" class="d-block w-100" alt="paysage montagnes">
    </div>
    <div class="carousel-item">
      <img src="../public/images/aurore.png" class="d-block w-100" alt="aurore boréale">
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
        <div class="col-sm-12 col-md-4">
    <h2>Jean Forteroche</h2>
    <p><img src="../public/images/photo.png" alt="photo de l'auteur"></p>
    
  </div>
        <div class="col-sm-12 col-md-4">
    <h2>C'est officiel !</h2>
    <p id="presentation">Depuis le temps que je vous avais promis un blog pour accéder chapitre après chapitre à la lecture de mon dernier roman, et devant l’enthousiasme que vous avez manifesté lors du vote sur Facebook, c’est enfin arrivé !
    Vous avez enfin sous les yeux le site officiel version blog de mon dernier roman « Billet simple pour l’Alaska ».
    J’espère que ce concept vous plaira et surtout que ce récit vous captivera autant que je l’ai été à l’écrire. Je vous souhaite un agréable voyage...</p>
  </div>
  <div class="col-sm-12 col-md-4">
    <h2>Billet simple pour l’Alaska </h2>
    <p>Très bien, nous y sommes?<br>Alors, tenez-vous prêt... Veillez à ne pas gêner la fermeture des portes, nous allons partir pour un long périple à travers de grandes contrées sauvages... Attention mesdames et messieurs ! Attention au départ !</p><br><br>
    <button type="submit" onClick="javascript:document.location.href='../index.php?action=listChapitres'" class="btn btn-secondary">Je veux lire !</button><br><br>
  </div>
</div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
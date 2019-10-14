<?php
session_start();
//setcookie('pseudo', $_SESSION['pseudo'], time() + 60*60*24*30, null, null, false, true);

try
{
   $bdd = new PDO('mysql:host=localhost;dbname=openclass;charset=utf8', 'root', '');
}
catch (Exception $e)
{
      die('Erreur : ' .$e->getMessage());
}

include_once('remember.php');

if(isset($_POST['connexion'])) {
   $mailconnect = htmlspecialchars($_POST['mailconnect']);
   $mdpconnect = sha1($_POST['mdpconnect']);
   if(!empty($mailconnect) AND !empty($mdpconnect)) {
      $requser = $bdd->prepare("SELECT * FROM users WHERE mail = ? AND motdepasse = ?");
      $requser->execute(array($mailconnect, $mdpconnect));
      $userexist = $requser->rowCount();
      if($userexist == 1) 
      {
         if(isset($_POST['rememberme'])) {
            setcookie('email',$mailconnect,time()+ 60*60*24*30,null,null,false,true);
            setcookie('password',$mdpconnect,time()+ 60*60*24*30,null,null,false,true);
      }
         $userinfo = $requser->fetch();
         $_SESSION['id'] = $userinfo['id'];
         $_SESSION['pseudo'] = $userinfo['pseudo'];
         $_SESSION['mail'] = $userinfo['mail'];
         header("Location: blogAccueilConnect.php?id=".$_SESSION['id']);
      } else {
         $erreur = "Mauvais mail ou mot de passe !";
      }
   } else {
      $erreur = "Tous les champs doivent être remplis !";
   }
}
?>
<html lang="fr">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../blog/public/css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf " crossorigin="anonymous">
  <title>Jean Forteroche connexion</title>
</head>
<body>
  <header>
   <div class="container">
      <h1>Le blog de Jean...</h1>
   </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
 <span class="navbar-brand" href="#">Menu</span>
 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
   <li class="nav-item active">

    <a class="nav-link" href="blogAccueil.php"><span><i class="fa fa-home"></i></span> Accueil <span class="sr-only">(current)</span></a>
 </li>
 <li class="nav-item">
    <a class="nav-link" href="connexion.php">Connexion</a>
 </li>

</ul>
  </div>
</nav> 
   <div style=" background: radial-gradient(white,grey);border: 1px solid black;
        border-radius: 5px">
      <div align="center">
         <h2 style="color:#760001;">Connexion</h2>
         <br /><br />
         <form method="POST" action="">
            <input type="email" name="mailconnect" placeholder="Mail" />
            <input type="password" name="mdpconnect" placeholder="Mot de passe" />
            <br /><br />
            <input type="checkbox" name="rememberme" id="remembercheckbox" /><label for="remembercheckbox">Rester connecté </label>
            <br /><br />
      
            <button type="submit"name="connexion"class="btn btn-primary">Je me connecte!</button>
         </form>
         <?php
         if(isset($erreur)) {
            echo '<font color="#760001">'.$erreur."</font>";
         }
         ?>
         
         </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
   </body>
</html>
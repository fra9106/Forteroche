<?php

try
{
   $bdd = new PDO('mysql:host=localhost;dbname=openclass;charset=utf8', 'root', '');
}
catch (Exception $e)
{
      die('Erreur : ' .$e->getMessage());
}


if(isset($_POST['valider'])) {
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mail = htmlspecialchars($_POST['mail']);
   
   $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

   $droits = 0;
   if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp'])) {
      $pseudolength = strlen($pseudo);
      if($pseudolength > 2) {
    
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
               $reqmail = $bdd->prepare("SELECT * FROM users WHERE mail = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
            
                     $insertmbr = $bdd->prepare("INSERT INTO users(pseudo, mail, motdepasse, droits) VALUES(?, ?, ?, ?)");
                     $insertmbr->execute(array($pseudo, $mail, $mdp, $droits));
                     $erreur = "Votre compte a bien été créé !";
            
                    
                
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Adresse mail non valide !";
            }
    
          
      } else {
         $erreur = "Votre pseudo doit contenir plus de 2 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
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
  <title>Jean Forteroche formulaire</title>
</head>
<body>
  <header>
   <div class="container">
      <h1>Le blog de Jean...</h1>
   </div>
</header>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
 <a class="navbar-brand" href="#">Menu</a>
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
<div class="vuChapComment">
<div align="center">
   <h1><br/><br/>


   <form  action="" method="POST">
      <table>


         <tr>
            <td align="right">
               <label for="pseudo">Pseudo :</label><br>
            </td>
            <td>
               <input type="text" placeholder="Votre pseudo" id="pseudo" name="pseudo" value="<?php if(isset($pseudo)) { echo $pseudo; } ?>" /><br>
            </td>
         </tr>
         <tr>
            <td align="right">
               <label for="mail">Mail :</label><br>
            </td>
            <td>
               <input type="email" placeholder="Votre mail" id="mail" name="mail" value="<?php if(isset($mail)) { echo $mail; } ?>" /><br>
            </td>
         </tr>
         
         <tr>
            <td align="right">
               <label for="mdp">Mot de passe :</label><br>
            </td>
            <td>
               <input type="password" placeholder="Entrez un mot de passe" id="mdp" name="mdp" /><br>
            </td>
         </tr>
         
         <tr>
            <td align="right">
             <button type="submit"name="valider"class="btn btn-primary">Je créé mon compte !</button>
          </td>
       </tr>

    </table>
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

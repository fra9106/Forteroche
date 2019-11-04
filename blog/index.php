<?php 
 // ---------routeur

require('controller/frontend.php'); //appelle la page pour pouvoir fonctionner
require('controller/backend.php');
session_start();  // garde la session


if (isset($_GET['action'])) { // affichage page d'accueil
if ($_GET['action'] == 'pageAccueil') {
  pageAccueil(); 
}

if (isset($_GET['action'])) { //affichage chapitre et de son commentaire
  if ($_GET['action'] == 'listPosts') {
   listPosts();
 }elseif ($_GET['action'] == 'post') {
  if (isset($_GET['id']) && $_GET['id'] > 0) {
    post();
  }else {
    echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Aucun identifiant chapitre envoyé !</p>';
  }
}

elseif ($_GET['action'] == 'addComment') { //ajout d'un commentaire
if (isset($_GET['id']) && $_GET['id'] > 0) {
  if(!empty($_GET['id']) && ($_POST['comment'])) {
   addComment($_GET['id'], $_SESSION['id'], $_POST['comment']);
  }else{
   echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Tous les champs ne sont pas remplis !</p>';
    }
  }else{
  echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Aucun identifiant de chapitre envoyé !</p>';
    }
  }
}

if (isset($_GET['action'])) { //affiche un chapitre à modifier ou à supprimer Admin
  if ($_GET['action'] == 'chapitAdmin') {
    if (!isset($_SESSION['droits']) || ($_SESSION['droits'] == 0)) {
        header('Location: index.php');
        }else{
      if (isset($_GET['id']) && $_GET['id'] > 0) {
        chapitAdmin();
      }else {
        echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Aucun petit problème d\'affichage du chapitre !</p>';
      }
    }
  } 
}

if (isset($_GET['action'])) { //signale un commentaire
 if ($_GET['action'] == 'signal') {
   if ((isset($_GET['id'])) && (!empty($_GET['id']))){
    signal($_GET['id']);
  }else{
    echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups....erreur de signalement !</p>';}
  }
}

if (isset($_GET['action'])) { // rédation nouveau chapitre
 if ($_GET['action'] == 'editChapitre') {
   if (isset($_POST['envoi_message']) AND isset($_POST['title']) AND isset($_POST['content'])) 
   {
    $title = ($_POST['title']);
    $content = ($_POST['content']);
    if(!empty(trim($_POST['title'])) AND !empty(trim($_POST['content'])))
    {         
      editChapitre($_POST['title'], $_POST['content']); 
    }else{
      echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Vous n\'avez pas saisi de message!</p>';
      }             
    }
  }
}

if (isset($_GET['action'])) { //affichage liste des chapitres Admin
  if ($_GET['action'] == 'listChapAdmin') {
    if (!isset($_SESSION['droits']) || ($_SESSION['droits'] == 0)) {
        header('Location: index.php');
      }else{
         listChapAdmin(); 
      }
    }
}

if (isset($_GET['action'])) { //supprime chapitre
 if ($_GET['action'] == 'suppChapitre') {
  if (!isset($_SESSION['droits']) || ($_SESSION['droits'] == 0)) {
        header('Location: index.php');
      }else{
   if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
      suppChapitre($_GET['id']);
      }
    }
  }
}

if (isset($_GET['action'])) { //modifie chapitre 
 if ($_GET['action'] == 'modifChapitre') {
  if (!isset($_SESSION['droits']) || ($_SESSION['droits'] == 0)) {
        header('Location: index.php');
      }else{
   if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
      modifChapitre($_POST['title'], $_POST['content'], $_GET['id']);
      }
    }
  }
}

if (isset($_GET['action'])) { //récupère les commentaires signalés
 if ($_GET['action'] == 'commentsAdmin') {
  if (!isset($_SESSION['droits']) || ($_SESSION['droits'] == 0)) {
        header('Location: index.php');
      }else{
    if (isset($_GET['signalement']) && $_GET['signalement'] == '1') {
     commentsAdmin($_GET['signalement']);
      }else{
      echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... problème d\'affichage signalement !</p>';
      }
    }
  } 
}

if (isset($_GET['action'])) { //désignale commentaire signalé
 if ($_GET['action'] == 'designalComments') {
  if (!isset($_SESSION['droits']) || ($_SESSION['droits'] == 0)) {
        header('Location: index.php');
      }else{
    if ((isset($_GET['id'])) && (!empty($_GET['id']))){
      designalComments($_GET['id']);
      }else{ 
      echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups....erreur de désignalement !</p>';
      }
    }
  }
}

if (isset($_GET['action'])) { //supprime un commentaire
 if ($_GET['action'] == 'suppComments') {
   if (!isset($_SESSION['droits']) || ($_SESSION['droits'] == 0)) {
        header('Location: index.php');
      }else{
    if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
      suppComments($_GET['id']);
      }
    }
  }
}

if (isset($_GET['action'])) { //affiche formulaire de connexion
  if ($_GET['action'] == 'displConnexion') {
   displConnexion(); 
 }       
}

if(isset($_GET['action'])) { //connexion
  if ($_GET['action'] == 'connexion') {
    if (isset($_POST['connexion']) AND isset($_POST['pseudo']) AND isset($_POST['mdp'])) {
      $pseudo = htmlspecialchars($_POST['pseudo']);
      if(!empty(trim($_POST['pseudo'])) AND !empty(trim($_POST['mdp']))){
        connexion($_POST['pseudo'], $_POST['mdp']); 
      }else{
        echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Tous les champs doivent-être remplis!</p>';
      }   
    }
  }
}

if (isset($_GET['action'])) { //deconnexion
 if ($_GET['action'] == 'deconnexion') {
    deconnexion();
  } 
}

if (isset($_GET['action'])) { //affiche la liste les chapitres
  if ($_GET['action'] == 'listChapitres') {
      listChapitres(); 
  }
}

if (isset($_GET['action'])) { // affichage formulaire d'inscription
if ($_GET['action'] == 'displFormulContact') {
    displFormulContact(); 
  }     
}

if (isset($_GET['action'])) { // ajout membre après divers tests 
  if ($_GET['action'] == 'addMember') {
    if (isset($_POST['addMember']) AND isset($_POST['pseudo'])  AND isset($_POST['mail']) AND isset($_POST['mdp'])) { 
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $mail = htmlspecialchars($_POST['mail']);
      if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp'])) {
        $pseudolength = strlen($pseudo);
        if($pseudolength > 2) {
          if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            addMember($_POST['pseudo'], $_POST['mail'], $_POST['mdp']); 
          } else {
           echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Adresse mail non valide !</p>';
         }
       } else {
         echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Votre pseudo doit contenir plus de 2 caractères !</p>';
       }
     }else {
       echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Tous les champs doivent être complétés !</p>';
     }
   }
 }
}

if (isset($_GET['action'])) { //connexion gestion Admin 
  if ($_GET['action'] == 'adminViewConnect') {
    if (!isset($_SESSION['droits']) || ($_SESSION['droits'] == 0)) {
        header('Location: index.php');
        }else{
      if (isset($_SESSION) && $_SESSION['droits'] == '1') {
        adminViewConnect();
      }else { 
        echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Vous n\'avez aucun droit administrateur !</p>';
      }
    }
  }
}

}else { 
  pageAccueil(); //si aucune action, alors affiche moi la page d'accueil ;)
}



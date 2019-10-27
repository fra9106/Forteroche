<?php 
 // ---------routeur

require('controller/frontend.php'); //appelle la page pour pouvoir fonctionner
require('controller/backend.php');
session_start();


if (isset($_GET['action'])) {
  if ($_GET['action'] == 'listPosts') {
   listPosts();
 }elseif ($_GET['action'] == 'post') {
 	if (isset($_GET['id']) && $_GET['id'] > 0) {
 		post();
 	}else {
 		echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Aucun identifiant de news envoyé !';
  }
 } 
 elseif ($_GET['action'] == 'addComment') {
   if (isset($_GET['id']) && $_GET['id'] > 0) {
    if(!empty($_POST['comment'])) {
     addComment($_GET['id'], $_POST['comment']);
   }else{
     echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Tous les champs ne sont pas remplis !';
   }
 }else{
  echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Aucun identifiant de news envoyé !';
  }
}

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'chapitAdmin') {
    if (isset($_GET['id']) && $_GET['id'] > 0) {
    chapitAdmin();
    }else {
    echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Aucun identifiant de news envoyé !';
    }
  } 
}

if (isset($_GET['action'])) {
 if ($_GET['action'] == 'signal') {
   if ((isset($_GET['id'])) && (!empty($_GET['id']))){
    signal($_GET['id']);
   }else{ $erreur = "Oups....erreur de signalement !!!";}
 }
}

if (isset($_GET['action'])) {
 if ($_GET['action'] == 'editChapitre') {
   if (isset($_POST['envoi_message']) AND isset($_POST['title']) AND isset($_POST['content'])) 
   {
    $title = ($_POST['title']);
    $content = ($_POST['content']);
     if(!empty(trim($_POST['title'])) AND !empty(trim($_POST['content'])))
     {         
      editChapitre($_POST['title'], $_POST['content']); 
       }else{ $erreur = "Oups... Vous n'avez pas saisi de message!";
     }             
   }
  }
}

if (isset($_GET['action'])) {  
  if ($_GET['action'] == 'listChapAdmin') {
    listChapAdmin(); 
  }
}

if (isset($_GET['action'])) {
 if ($_GET['action'] == 'suppChapitre') {
   if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
    suppChapitre($_GET['id']);
   }
 }
}

if (isset($_GET['action'])) {
 if ($_GET['action'] == 'modifChapitre') {
   if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
    modifChapitre($_POST['title'], $_POST['content'], $_GET['id']);
   }
 }
}

if (isset($_GET['action'])) { // récupère les commentaires signalés pour les afficher dans la vue
 if ($_GET['action'] == 'commentsAdmin') {
   if (isset($_GET['signalement']) && $_GET['signalement'] == '1') {
   commentsAdmin($_GET['signalement']);
   }else {
    echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Aucun commentaires supprimé !</p>';
   }
 } 
}

if (isset($_GET['action'])) {
 if ($_GET['action'] == 'designalComments') {
  if ((isset($_GET['id'])) && (!empty($_GET['id']))){
      designalComments($_GET['id']);
   }else{ echo "Oups....erreur de désignalement !!!";
  }
 }
}

if (isset($_GET['action'])) {
 if ($_GET['action'] == 'suppComments') {
   if ((isset($_GET['id'])) && (!empty($_GET['id']))) {
    suppComments($_GET['id']);
   }
 }
}

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'displConnexion') {
        displConnexion(); 
    }else{ $erreur = "Oups... petit problème d'affichage connexion !";
  }             
}
   
if(isset($_GET['action'])) {
  if ($_GET['action'] == 'connexion') {
    if (isset($_POST['connexion']) AND isset($_POST['pseudo']) AND isset($_POST['mdp'])) {
        $pseudo = htmlspecialchars($_POST['pseudo']);
        if(!empty(trim($_POST['pseudo'])) AND !empty(trim($_POST['mdp'])))
        connexion($_POST['pseudo'], $_POST['mdp']); 
       }else{ $erreur = "Oups... petit problème de connexion !" ;
     }     
  }
}

if (isset($_GET['action'])) {
 if ($_GET['action'] == 'deconnexion') {
  deconnexion();
 } 
}

if (isset($_GET['action'])) {  
  if ($_GET['action'] == 'listChapitres') {
    listChapitres(); 
  }
}

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'displFormulContact') {
        displFormulContact(); 
    }else{ $erreur = "Oups... petit problème d'affichage de formulaire d'inscription !";
  }             
}

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'addMember') {
    if (isset($_POST['addMember']) AND isset($_POST['pseudo'])  AND isset($_POST['mail']) AND isset($_POST['mdp'])) { 
      $pseudo = htmlspecialchars($_POST['pseudo']);
      $mail = htmlspecialchars($_POST['mail']);
      if(!empty($_POST['pseudo']) AND !empty($_POST['mail']) AND !empty($_POST['mdp'])) {
      $pseudolength = strlen($pseudo);
    }
        if($pseudolength > 2) {
          if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
              addMember($_POST['pseudo'], $_POST['mail'], $_POST['mdp']); 
              $erreur = "Votre compte a bien été créé !";

              } else {
                echo "Adresse mail non valide !";
              }
    
        } else {
          echo "Votre pseudo doit contenir plus de 2 caractères !";
        }
      
   } else {
      echo "Tous les champs doivent être complétés !";
   }
  }
}

if (isset($_GET['action'])) {
if ($_GET['action'] == 'adminViewConnect') {
      if (isset($_SESSION) && $_SESSION['droits'] == '1') {
        adminViewConnect();
      } else { echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Vous n\'avez aucun droit administrateur !</p>';
   }
  }
}


}else {
  listPosts();
}
    
   
        
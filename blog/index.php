<?php 
 // ---------routeur

require('controller/frontend.php'); //appelle la page pour pouvoir fonctionner
require('controller/backend.php');

if (isset($_GET['action'])) {
  if ($_GET['action'] == 'listPosts') {
   listPosts();
 }
 
 elseif ($_GET['action'] == 'post') {
 	if (isset($_GET['id']) && $_GET['id'] > 0) {
 		post();
 	}
 	else {
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

}else {
  listPosts();
}

if ($_GET['action'] == 'chapitAdmin') {
  if (isset($_GET['id']) && $_GET['id'] > 0) {
    chapitAdmin();
  }else {
    echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Aucun identifiant de news envoyé !';
  }
} 

if ($_GET['action'] == 'signalement') {
  if ((isset($_GET['id'])) && (!empty($_GET['id']))){
    signal($_GET['id']);
  }else{ $erreur = "Oups....erreur de signalement !!!";}
}

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

if (isset($_GET['action'])) {  
  if ($_GET['action'] == 'listChapAdmin') {
    listChapAdmin(); 
  }
}

/*if ($_GET['action'] == 'suppChapitre') {
  suppChapitre($_GET['id']);
}*/

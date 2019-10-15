<?php 
 // ---------routeur

 require('controller/frontend.php'); //appelle la page pour pouvoir fonctionner

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

 
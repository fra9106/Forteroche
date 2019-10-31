<?php 
//--------Contoller backend Admin


require_once('model/PostManager.php');// chargement classes
require_once('model/CommentManager.php');

function editChapitre($title, $content) //fonction rédation chapitre
{
	$chapEdit = new PostManager();//création objet postManager
	$chapitre = $chapEdit->postChapitre($title, $content);//retour modèle fonction postChapitre
	
	if($chapitre === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Je crois que ça va pas être possible d \'ajouter un chapitre...');//condition si false on arrête le script
	}else{//si true chargement de la page qui affichera la liste des chapitres
		header('Location: index.php?action=listChapAdmin');
	}
}

function listChapAdmin() //fonction affichage de la liste des chapitres Admin
{
	$postManager = new PostManager();
	$posts = $postManager->getChapitresAdmin();
	require('view/backend/listChapAdmin.php');
}

function suppChapitre($dataId)//fonction delete chapitres 
{
	$supprime = new PostManager();
	$deletedPost = $supprime->deletChapitre($dataId);

	if($deletedPost === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Je crois que ça va pas être possible de supprimer un chapitre...</p>');
	}else{
		header('Location: index.php?action=listChapAdmin');
	}
}

function chapitAdmin() //fonction de récupération chapitre admin
{ 	
	$postManager = new PostManager();
	$chapy = $postManager->getChapitre($_GET['id']);
	
	require('view/backend/chapitreAdmin.php');
}

function modifChapitre($title, $content,$postId) //fonction modif chapitre admin
{
	$chapModif = new PostManager();
	$chapOk = $chapModif->updateChapitre($title, $content,$postId);
	
	if($chapOk === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Je crois que ça va pas être possible de modifier un chapitre...</p>');
	}else{
		header('Location: index.php?action=listChapAdmin');
	}
}

function commentsAdmin() //fonction récupère les commentaires signalés pour les afficher dans la vue
{ 	
	$commentManager = new CommentManager();
	$comments = $commentManager->getCommentSignal($_GET['signalement']);
	
	require('view/backend/commentsAdmin.php');
}

function suppComments($commentId) //fonction supprime commentaires signalés pour les afficher dans la vue
{
	$supprime = new CommentManager();
	$deletedComment = $supprime->deletComment($commentId);

	if($deletedComment === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Je crois que ça va pas être possible de supprimer ce commentaire...</p>');
	}else{
		header('Location: index.php?action=commentsAdmin&signalement=1');
	}
}

function designalComments($commentId) //fonction modification commentaires signalés
{ 	
	$commentManager = new CommentManager();
	$comments = $commentManager->deSignal($commentId);

	if($comments === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Impossible de designaler le commentaire!</p>');
	}else{ 
		header('Location: index.php?action=commentsAdmin&signalement=1');
	}
	
	require('view/backend/commentsAdmin.php');
}

function adminViewConnect() //connexion gestion Admin 
{
	require('view/backend/redacChap.php');
}




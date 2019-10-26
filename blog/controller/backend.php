<?php 
//--------Contoller admin


require_once('model/PostManager.php');// chargement des classes
require_once('model/CommentManager.php');

function editChapitre($title, $content) //fonction rédation chapitre
{
	$chapEdit = new PostManager();// création objet postManager
	$chapitre = $chapEdit->postChapitre($title, $content);//appel fonction (retour model)
	
	if($chapitre === false) {
		die('Je crois que ça va pas être possible d \'ajouter un chapitre...');// condition si false on arrête le script
	}else{//si ok chargement de la page qui affichera la liste des chapitres
		header('Location: index.php?action=listChapAdmin');
	}
	
}	 
function listChapAdmin() //fonction liste chapitre admin
{
	$postManager = new PostManager();// création objet
	$posts = $postManager->getChapitresAdmin();//appel la fonction de récupération de tous les chapitres rangés en ordre de date descendante de cet objet
	require('view/backend/listChapAdmin.php');
}

function suppChapitre($dataId)// fonction supprime chapitre 
{
	$supprime = new PostManager();
	$deletedPost = $supprime->deletChapitre($dataId);

	if($deletedPost === false) {
		die('Je crois que ça va pas être possible de supprimer un chapitre...');
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
		die('Je crois que ça va pas être possible de modifier un chapitre...');
	}else{
		header('Location: index.php?action=listChapAdmin');
	}
}

function commentsAdmin() //fonction récupère les commentaires signalés
{ 	
	$commentManager = new CommentManager();
	$comments = $commentManager->getCommentSignal($_GET['signalement']);
	
	require('view/backend/commentsAdmin.php');
}

function suppComments($commentId)// fonction supprime commentaires signalés 
{
	$supprime = new CommentManager();
	$deletedComment = $supprime->deletComment($commentId);

	if($deletedComment === false) {
		die('Je crois que ça va pas être possible de supprimer ce commentaire...');
	}else{
		header('Location: index.php?action=listChapAdmin');
	}
}

function designalComments($commentId) //fonction modification commentaires signalés
{ 	
	$commentManager = new CommentManager();
	$comments = $commentManager->deSignal($commentId);

	if($comments === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Impossible de designaler le commentaire!');
	}else{ header('Location: index.php?action=listChapAdmin');
	
	}
	
	require('view/backend/commentsAdmin.php');
}


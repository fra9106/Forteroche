<?php 
//--------Contoller admin


require_once('model/postManager.php');// chargement des classes
require_once('model/commentManager.php');

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




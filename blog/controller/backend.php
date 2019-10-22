<?php 
//--------Contoller admin


require_once('model/postManager.php');// chargement des classes
require_once('model/commentManager.php');

function editChapitre($title, $content) //fonction affiche chapitre
{
	$chapEdit = new PostManager();// création objet postManager

	$chapitre = $chapEdit->postChapitre($title, $content);
	
	if($chapitre === false) {
		die('Je crois que ça va pas être possible d \'ajouter un chapitre...');
	}else{
		header('Location: index.php?action=listChapAdmin');
	}
	
}	 //chargement de la page qui affichera la liste des chapitre

function listChapAdmin() //fonction liste chapitre et affiche par listPostView.php
{
	$postManager = new PostManager();// création objet
	$posts = $postManager->getChapitresAdmin();//appel la fonction de récupération de tous les chapitres rangés en ordre de date descendante de cet objet

	require('view/backend/listChapAdmin.php');
} //chargement de la page qui affichera la liste des chapitre



function suppChapitre($postId) 
{
	$supprime = new PostManager();

	$deletedPost = $supprime->deletChapitre($postId);
	
	if($chapitre === false) {
		die('Je crois que ça va pas être possible de supprimer un chapitre...');
	}else{
		header('Location: index.php');
	}
}



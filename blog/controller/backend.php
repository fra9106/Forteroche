<?php 
//--------Contoller admin


require_once('model/postManager.php');// chargement des classes
require_once('model/commentManager.php');

function editChapitre($title, $content) //fonction rédation chapitre
{
	$chapEdit = new PostManager();// création objet postManager
	$chapitre = $chapEdit->postChapitre($title, $content);//appel fonction (retour model)
	
	if($chapitre === false) {
<<<<<<< HEAD
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
=======
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
<<<<<<< HEAD
=======


>>>>>>> 1df085705ffc6ec773bb95b244b9884e78198fb8



/*function suppChapitre($postId) 
>>>>>>> e304a763b360dd17d60dbca2716b34e16eaa5758
{
	$supprime = new PostManager();
	$deletedPost = $supprime->deletChapitre($dataId);

	if($deletedPost === false) {
		die('Je crois que ça va pas être possible de supprimer un chapitre...');
	}else{
		header('Location: index.php?action=listChapAdmin');
	}
}*/

function chapitAdmin() //fonction de récupération chapitre par id
{ 	
	$postManager = new PostManager();
	$chapy = $postManager->getChapitre($_GET['id']);
	
	require('view/backend/chapitreAdmin.php');
	
}

function chapitAdmin() //fonction de récupération chapitre admin
{ 	
	$postManager = new PostManager();
	$chapy = $postManager->getChapitre($_GET['id']);
	
	require('view/backend/chapitreAdmin.php');
}



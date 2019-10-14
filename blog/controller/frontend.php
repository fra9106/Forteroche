<?php 
//--------Contoller

require_once('model/postManager.php');// chargement des classes
require_once('model/commentManager.php');

function listPosts() //fonction liste chapitre et affiche par listPostView.php
{
	$postManager = new PostManager();// création objet
	$posts = $postManager->getPosts();//appel la fonction de récupération de tous les chapitres rangés en ordre de date descendante de cet objet

	require('view/frontend/listPostsView.php'); //chargement de la page qui affichera la liste des chapitre
}

function post() //fonction de récupération des chapitre ET ses commentaires par postView.php
{ 	
	$postManager = new PostManager();
	$commentManager = new CommentManager();


	$post = $postManager->getPost($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);

	require('view/frontend/postView.php');
}

function addComment($idBillet, $comment) // teste le retour de la requete postComment...
{
	$commentManager = new CommentManager();

	$affectedLines = $commentManager->postComment($idBillet, $comment);

	if ($affectedLines === false){ //si le commentaire n'arrive pas à la bdd...
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Impossible d\'ajouter le commentaire !');// on arrête le script avec un die

	}else{ header('Location: index.php?action=post&id=' . $idBillet); // sinon on peut admirer son joli commentaire :)

}
}
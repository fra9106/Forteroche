<?php 
//--------Contoller

require_once('model/PostManager.php');//chargement des classes
require_once('model/CommentManager.php');
require_once('model/MembersManager.php');


function listPosts() //fonction affichage liste chapitre
{
	$postManager = new PostManager();//création objet
	$posts = $postManager->getPosts();//appel la fonction de récupération de tous les chapitres rangés en ordre de date descendante de cet objet

	require('view/frontend/listPostsView.php'); //chargement de la page qui affichera la liste des chapitre

}

function post() //fonction de récupération d'1 chapitre ET ses commentaires
{ 	
	$postManager = new PostManager();
	$commentManager = new CommentManager();

	$post = $postManager->getPost($_GET['id']);
	$comments = $commentManager->getComments($_GET['id']);

	require('view/frontend/postView.php');
}

function addComment($idBillet, $idUser, $comment) //ajout commentaire
{
	$commentManager = new CommentManager();

	$affectedLines = $commentManager->postComment($idBillet, $_SESSION['id'], $comment);
	
	if ($affectedLines === false){ //si le commentaire n'arrive pas à la bdd...
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Impossible d\'ajouter le commentaire !</p>');// on arrête le script avec un die

	}else{header('Location: index.php?action=post&id=' . $idBillet); // sinon on peut admirer son joli commentaire :)

	}
}

function signal($commentId) //signale un commentaire
{
	$commentManager = new CommentManager();
	$signal = $commentManager->signalement($commentId);

	if($signal === false) {
		die('<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Impossible de signaler !</p>');
	}else{ 
		header('Location: index.php?action=listChapitres');

	}
}

function displconnexion() //affichage formulaire connexion
{
	require('view/frontend/connectView.php');
}

function connexion($pseudo,$motdepass) //connexion
{
	$membre = new MembersManager();
	$connect = $membre->getConnect($pseudo);
	$isPasswordCorrect = password_verify($_POST['mdp'], $connect['motdepasse']);


	if (!$connect)
	{
		echo 'Mauvais identifiant ou mot de passe !';
	}
	else{

		if ($isPasswordCorrect) {
			session_start();
			$_SESSION['id'] = $connect['id'];
			$_SESSION['pseudo'] = $pseudo;
			$_SESSION['droits'] = $connect['droits'];
			header("Location: index.php");


		}else{
			echo 'Mauvais identifiant ou mot de passe !';
		}
		if(!empty($_SESSION['droits']) && $_SESSION['droits'] == '1') 
			header("Location: index.php");

	}
}

function deconnexion() //déconnexion
{
	session_start();
	$_SESSION = array();
	session_destroy();
	header("Location: index.php"); 
}

function listChapitres() //fonction liste chapitre 
{
	$postManager = new PostManager();
	$posts = $postManager->getChapitres();//appel la fonction de récupération de tous les chapitres rangés en ordre de date descendante de cet objet
	require('view/frontend/listPostsView.php');
}

function displFormulContact() //affichage formulaire d'inscription
{
	require('view/frontend/formulaireView.php');
}

function addMember($pseudo, $mail, $mdp) //ajout membre après divers tests
{
	$membre = new MembersManager();
	$test = new MembersManager();

	$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
	
	$testOk = $test->testMail($mail);

	if($testOk == 0) {
		$newMembre = $membre->insertMembre($pseudo, $mail, $mdp);
		header("Location: ../blog/index.php?action=displConnexion");
	}else{ 
		echo '<p style= "border: 1px solid red; text-align: center; font-size: 55px; margin: 90px 90px 90px;">Oups... Adresse email déjà utilisé  !</p>';}
	}

function pageAccueil() // affichage page d'accueil
{
	require('view/frontend/accueil.php');
}


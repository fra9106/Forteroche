<?php
require_once("model/manager.php"); //appelle la class Manager pour se connecter à bdd

class PostManager extends Manager // héritage class Manager
{
	public function getPosts() // méthode de récupération de tous les chapitres rangés en ordre de date descendante
	{
		
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 50');

		return $req;
	}

	public function getPost($postId) // méthode de récupération chapitre par id
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
		$post = $req->fetch();

		return $post;

	}

	public function postChapitre($title, $content) // méthode envoit chapitre à la bdd
	{
		$db = $this->dbConnect();
		$inserChap = $db->prepare('INSERT INTO posts(title, content, creation_date) VALUES (?, ?, NOW())');
        $chapitre = $inserChap->execute(array($title, $content));
		
		return $chapitre;

	}

	public function getChapitresAdmin() // méthode de récupération de tous les chapitres rangés en ordre de date descendante
	{
		
		$db = $this->dbConnect();
<<<<<<< HEAD
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 50');
=======
<<<<<<< HEAD
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 50');
=======
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 25');
>>>>>>> 1df085705ffc6ec773bb95b244b9884e78198fb8
>>>>>>> e304a763b360dd17d60dbca2716b34e16eaa5758

		return $req;
	}

<<<<<<< HEAD
	public function deletChapitre($dataId) {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = ?');
        $req->execute(array($dataId));
        //$supprimerChapitre = $req->fetch();
        return $req;
    }
=======
<<<<<<< HEAD
	/*public function deleletChapitre($postId) {
=======
	public function deleletChapitre($postId) {
>>>>>>> 1df085705ffc6ec773bb95b244b9884e78198fb8
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('DELETE FROM posts WHERE id = ?');
        $supprimerChapitre = $req->execute(array($postId));
        return $supprimerChapitre;
    }*/
>>>>>>> e304a763b360dd17d60dbca2716b34e16eaa5758

    public function getChapitre($postId)
    {
    	$db = $this->dbConnect();
    	$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
<<<<<<< HEAD
	
    	return $req;
		
=======
		//$chap = $req->fetch();
    	return $req;
		//return $chap;
>>>>>>> e304a763b360dd17d60dbca2716b34e16eaa5758

    }

	
}
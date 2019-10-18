<?php
require_once("model/manager.php"); //appelle la class Manager pour se connecter à bdd

class PostManager extends Manager // héritage class Manager
{
	public function getPosts() // méthode de récupération de tous les chapitres rangés en ordre de date descendante
	{
		
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 10');

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

	public function postChapitres($title, $content) // méthode envoit chapitre à la bdd
	{
		$db = $this->dbConnect();
		$inserChap = $db->prepare("INSERT INTO posts(title, content, creation_date) VALUES (?, ?, NOW())");
        $inser = $inserChap->execute(array($title, $content));
		
		return $inser;

	}

	
}
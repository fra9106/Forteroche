<?php
require_once("model/Manager.php"); //appelle la class Manager pour se connecter à bdd

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
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 50');

		return $req;
	}

	public function deletChapitre($dataId) {
        $db = $this->dbConnect();
        $req = $db->prepare('DELETE FROM posts WHERE id = ?');
        $req->execute(array($dataId));
        //$supprimerChapitre = $req->fetch();
        return $req;
    }

    public function getChapitre($postId)
    {
    	$db = $this->dbConnect();
    	$req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts WHERE id = ?');
		$req->execute(array($postId));
	
    	return $req;
	}

     public function updateChapitre($title, $content, $postId) // méthode envoit chapitre à la bdd
	{
		$db = $this->dbConnect();
		$updChap = $db->prepare('UPDATE posts SET title = ?, content = ? WHERE id = ?');
        $chapOk = $updChap->execute(array($title, $content,$postId));
		return $chapOk;

	}

	public function getChapitres() // méthode de récupération de tous les chapitres rangés en ordre de date descendante
	{
		
		$db = $this->dbConnect();
		$req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creation_date_fr FROM posts ORDER BY creation_date DESC LIMIT 0, 50');

		return $req;
	}
}
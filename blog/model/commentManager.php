<?php
class CommentManager
{
	public function getComments($idBillet)// méthode de récupération des commentaires par l'id des chapitres
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id_billet = ? ORDER BY comment_date DESC');
		$comments->execute(array($idBillet));

		return $comments;
	}

	public function postComment($idBillet, $idUser, $author, $comment, $signalement)//méthode envoit les commentaires à la table comments
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('INSERT INTO comments(id_billet, id_user, author, comment, signalement, comment_date) VALUES(?, ?, ?, ?, ?, NOW())');
		$affectedLines = $comments->execute(array($idBillet, $idUser, $author, $comment, $signalement));

		return $affectedLines;
	}

	private function dbConnect()// méthode de connexion à la bdd
	{
		try
		{
			$db = new PDO('mysql:host=localhost;dbname=openclass;charset=utf8', 'root', '');
			return $db;
		}
		catch (Exception $e)
		{
			die('Erreur : ' .$e->getMessage());
		}
	}


}
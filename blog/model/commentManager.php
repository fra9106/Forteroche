<?php
require_once("model/manager.php"); //appelle la class Manager pour se connecter à bdd

class CommentManager extends Manager // héritage class Manager
{
	public function getComments($idBillet)// méthode de récupération des commentaires par l'id des chapitres
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT id, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE id_billet = ? ORDER BY comment_date DESC');
		$comments->execute(array($idBillet));

		return $comments;
	}

	public function postComment($idBillet, $comment)//méthode envoit les commentaires à la table comments
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('INSERT INTO comments(id_billet, comment, comment_date) VALUES(?, ?, NOW())');
		$affectedLines = $comments->execute(array($idBillet, $comment));

		return $affectedLines;
	}

	
}
<?php
require_once("model/Manager.php"); //appelle la class Manager pour se connecter à bdd

class CommentManager extends Manager //héritage class Manager
{
	public function getComments($idBillet)//méthode de récupération des commentaire avec une jointure dans la requete pour récupérer le pseudo de l'user
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT comments.id, users.pseudo, comments.comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments INNER JOIN users ON comments.id_user = users.id WHERE id_billet = ? ORDER BY comment_date DESC');
		$comments->execute(array($idBillet));

		return $comments;
	}

	public function postComment($idBillet, $idUser, $comment)//insertion des commentaires dans la table comments
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('INSERT INTO comments(id_billet, id_user, comment, comment_date) VALUES( ?, ?, ?, NOW())');
		$affectedLines = $comments->execute(array($idBillet, $idUser, $comment));

		return $affectedLines;
	}

	public function signalement($commentId) //requete pour signaler commentaire
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET signalement = 1 WHERE id = ?');
		$req->execute(array($commentId));

		return $req;
	}
	public function getCommentSignal($signalement) //récupère les commentaires signalés pour les afficher dans la vue
	{
		$db = $this->dbConnect();
		$comments = $db->prepare('SELECT id, comment, signalement, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS comment_date_fr FROM comments WHERE signalement = 1 ORDER BY comment_date DESC');
		$comments->execute(array($signalement));
		return $comments;
	}

	public function deletComment($commentId) //supprime le commentaire
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM comments WHERE id = ?');
		$req->execute(array($commentId));
		
		return $req;
	}

	public function deSignal($commentId) //désignale le commentaire 
	{
		$db = $this->dbConnect();
		$req = $db->prepare('UPDATE comments SET signalement = 0 WHERE id = ?');
		$req->execute(array($commentId));

		return $req;
	}
	
}
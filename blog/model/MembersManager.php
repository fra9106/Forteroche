<?php
require_once("model/Manager.php");

class MembersManager extends Manager
{
	public function getConnect($pseudo)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('SELECT id, motdepasse, droits FROM users WHERE pseudo = :pseudo');
		$req->execute(array('pseudo' =>$pseudo));
		$connect = $req->fetch();
		return $connect;
	}

	public function insertMembre($pseudo, $mail, $mdp)
	{
		$db = $this->dbConnect();
		$insertmbr = $db->prepare("INSERT INTO users(pseudo, mail, motdepasse, droits) VALUES(?, ?, ?, 0)");
        $insertmbr->execute(array($pseudo, $mail, $mdp));
        return $insertmbr;

	}

}
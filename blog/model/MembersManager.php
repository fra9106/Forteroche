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





}
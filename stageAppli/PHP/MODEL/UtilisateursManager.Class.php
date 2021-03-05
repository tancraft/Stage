<?php

class UtilisateursManager 
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_utilisateurs (nomUser,prenomUser,telUser,emailUser,mdpUser,idRole) VALUES (:nomUser,:prenomUser,:telUser,:emailUser,:mdpUser,:idRole)");
		$q->bindValue(":nomUser", $obj->getNomUser());
		$q->bindValue(":prenomUser", $obj->getPrenomUser());
		$q->bindValue(":telUser", $obj->getTelUser());
		$q->bindValue(":emailUser", $obj->getEmailUser());
		$q->bindValue(":mdpUser", $obj->getMdpUser());
		$q->bindValue(":idRole", $obj->getIdRole());
		$q->execute();
	}

	public static function update(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_utilisateurs SET idUser=:idUser,nomUser=:nomUser,prenomUser=:prenomUser,telUser=:telUser,emailUser=:emailUser,mdpUser=:mdpUser,idRole=:idRole WHERE idUser=:idUser");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":nomUser", $obj->getNomUser());
		$q->bindValue(":prenomUser", $obj->getPrenomUser());
		$q->bindValue(":telUser", $obj->getTelUser());
		$q->bindValue(":emailUser", $obj->getEmailUser());
		$q->bindValue(":mdpUser", $obj->getMdpUser());
		$q->bindValue(":idRole", $obj->getIdRole());
		$q->execute();
	}
	public static function delete(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_utilisateurs WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_utilisateurs WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateurs($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * from amb_utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees);
			}
		}
		return $liste;
	}
	public static function getByEmail($email)
	{
 		$db=DbConnect::getDb();
		$q=$db->query('SELECT * from amb_utilisateurs WHERE emailUser ="'.$email.'"');
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Utilisateurs($results);
		}
		else
		{
			return false;
		}
	}
	public static function getListByRole($idRole)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * from amb_utilisateurs where idRole = ".$idRole." ORDER BY nomUser");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees) ;
			}
		}
		return $liste;
	}
}
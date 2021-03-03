<?php

class UtilisateursManager 
{
	public static function add(Utilisateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Utilisateurs (nomUser,prenomUser,telUser,emailUser,mdpUser,idRole) VALUES (:nomUser,:prenomUser,:telUser,:emailUser,:mdpUser,:idRole)");
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
		$q=$db->prepare("UPDATE Utilisateurs SET idUser=:idUser,nomUser=:nomUser,prenomUser=:prenomUser,telUser=:telUser,emailUser=:emailUser,mdpUser=:mdpUser,idRole=:idRole WHERE idUser=:idUser");
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
		$db->exec("DELETE FROM Utilisateurs WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Utilisateurs WHERE idUser =".$id);
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
		$q = $db->query("SELECT * FROM Utilisateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Utilisateurs($donnees);
			}
		}
		return $liste;
	}
}
<?php

class MateriauxManager 
{
	public static function add(Materiaux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Materiaux (nomMateriel,nbDispo,idUser) VALUES (:nomMateriel,:nbDispo,:idUser)");
		$q->bindValue(":nomMateriel", $obj->getNomMateriel());
		$q->bindValue(":nbDispo", $obj->getNbDispo());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}

	public static function update(Materiaux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Materiaux SET idMateriel=:idMateriel,nomMateriel=:nomMateriel,nbDispo=:nbDispo,idUser=:idUser WHERE idMateriel=:idMateriel");
		$q->bindValue(":idMateriel", $obj->getIdMateriel());
		$q->bindValue(":nomMateriel", $obj->getNomMateriel());
		$q->bindValue(":nbDispo", $obj->getNbDispo());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}
	public static function delete(Materiaux $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Materiaux WHERE idMateriel=" .$obj->getIdMateriel());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Materiaux WHERE idMateriel =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Materiaux($results);
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
		$q = $db->query("SELECT * FROM Materiaux");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Materiaux($donnees);
			}
		}
		return $liste;
	}
}
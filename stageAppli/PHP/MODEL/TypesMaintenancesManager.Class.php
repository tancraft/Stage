<?php

class TypesMaintenancesManager 
{
	public static function add(TypesMaintenances $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Typesmaintenances (numeroTypeMaint,libelleTypeMaint) VALUES (:numeroTypeMaint,:libelleTypeMaint)");
		$q->bindValue(":numeroTypeMaint", $obj->getNumeroTypeMaint());
		$q->bindValue(":libelleTypeMaint", $obj->getLibelleTypeMaint());
		$q->execute();
	}

	public static function update(TypesMaintenances $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Typesmaintenances SET idTypeMaint=:idTypeMaint,numeroTypeMaint=:numeroTypeMaint,libelleTypeMaint=:libelleTypeMaint WHERE idTypeMaint=:idTypeMaint");
		$q->bindValue(":idTypeMaint", $obj->getIdTypeMaint());
		$q->bindValue(":numeroTypeMaint", $obj->getNumeroTypeMaint());
		$q->bindValue(":libelleTypeMaint", $obj->getLibelleTypeMaint());
		$q->execute();
	}
	public static function delete(TypesMaintenances $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Typesmaintenances WHERE idTypeMaint=" .$obj->getIdTypeMaint());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Typesmaintenances WHERE idTypeMaint =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new TypesMaintenances($results);
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
		$q = $db->query("SELECT * FROM Typesmaintenances");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new TypesMaintenances($donnees);
			}
		}
		return $liste;
	}
}
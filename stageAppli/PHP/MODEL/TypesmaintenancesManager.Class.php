<?php

class TypesmaintenancesManager 
{
	public static function add(Typesmaintenances $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Typesmaintenances (numeroTypeMaint,libelleTypeMaint) VALUES (:numeroTypeMaint,:libelleTypeMaint)");
		$q->bindValue(":numeroTypeMaint", $obj->getNumeroTypeMaint());
		$q->bindValue(":libelleTypeMaint", $obj->getLibelleTypeMaint());
		$q->execute();
	}

	public static function update(Typesmaintenances $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Typesmaintenances SET idTypeMaint=:idTypeMaint,numeroTypeMaint=:numeroTypeMaint,libelleTypeMaint=:libelleTypeMaint WHERE idTypeMaint=:idTypeMaint");
		$q->bindValue(":idTypeMaint", $obj->getIdTypeMaint());
		$q->bindValue(":numeroTypeMaint", $obj->getNumeroTypeMaint());
		$q->bindValue(":libelleTypeMaint", $obj->getLibelleTypeMaint());
		$q->execute();
	}
	public static function delete(Typesmaintenances $obj)
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
			return new Typesmaintenances($results);
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
				$liste[] = new Typesmaintenances($donnees);
			}
		}
		return $liste;
	}
}
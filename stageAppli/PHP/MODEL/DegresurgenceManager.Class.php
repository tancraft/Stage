<?php

class DegresurgenceManager 
{
	public static function add(Degresurgence $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Degresurgence (libelleDegreUrgence) VALUES (:libelleDegreUrgence)");
		$q->bindValue(":libelleDegreUrgence", $obj->getLibelleDegreUrgence());
		$q->execute();
	}

	public static function update(Degresurgence $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Degresurgence SET idDegreUrgence=:idDegreUrgence,libelleDegreUrgence=:libelleDegreUrgence WHERE idDegreUrgence=:idDegreUrgence");
		$q->bindValue(":idDegreUrgence", $obj->getIdDegreUrgence());
		$q->bindValue(":libelleDegreUrgence", $obj->getLibelleDegreUrgence());
		$q->execute();
	}
	public static function delete(Degresurgence $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Degresurgence WHERE idDegreUrgence=" .$obj->getIdDegreUrgence());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Degresurgence WHERE idDegreUrgence =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Degresurgence($results);
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
		$q = $db->query("SELECT * FROM Degresurgence");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Degresurgence($donnees);
			}
		}
		return $liste;
	}
}
<?php

class DegresUrgenceManager 
{
	public static function add(DegresUrgence $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_degresurgence (libelleDegreUrgence) VALUES (:libelleDegreUrgence)");
		$q->bindValue(":libelleDegreUrgence", $obj->getLibelleDegreUrgence());
		$q->execute();
	}

	public static function update(DegresUrgence $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_degresurgence SET idDegreUrgence=:idDegreUrgence,libelleDegreUrgence=:libelleDegreUrgence WHERE idDegreUrgence=:idDegreUrgence");
		$q->bindValue(":idDegreUrgence", $obj->getIdDegreUrgence());
		$q->bindValue(":libelleDegreUrgence", $obj->getLibelleDegreUrgence());
		$q->execute();
	}
	public static function delete(DegresUrgence $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_degresurgence WHERE idDegreUrgence=" .$obj->getIdDegreUrgence());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_degresurgence WHERE idDegreUrgence =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new DegresUrgence($results);
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
		$q = $db->query("SELECT * from amb_degresurgence");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new DegresUrgence($donnees);
			}
		}
		return $liste;
	}
}
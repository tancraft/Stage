<?php

class LieuxManager 
{
	public static function add(Lieux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_lieux (nomLieu,idEnv) VALUES (:nomLieu,:idEnv)");
		$q->bindValue(":nomLieu", $obj->getNomLieu());
		$q->bindValue(":idEnv", $obj->getIdEnv());
		$q->execute();
	}

	public static function update(Lieux $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_lieux SET idLieu=:idLieu,nomLieu=:nomLieu,idEnv=:idEnv WHERE idLieu=:idLieu");
		$q->bindValue(":idLieu", $obj->getIdLieu());
		$q->bindValue(":nomLieu", $obj->getNomLieu());
		$q->bindValue(":idEnv", $obj->getIdEnv());
		$q->execute();
	}
	public static function delete(Lieux $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_lieux WHERE idLieu=" .$obj->getIdLieu());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_lieux WHERE idLieu =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Lieux($results);
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
		$q = $db->query("SELECT * from amb_lieux");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Lieux($donnees);
			}
		}
		return $liste;
	}
}
<?php

class OperationsManager 
{
	public static function add(Operations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_Operations (numeroOperation,intituleOperation,schemaOperation,idMesm) VALUES (:numeroOperation,:intituleOperation,:schemaOperation,:idMesm)");
		$q->bindValue(":numeroOperation", $obj->getNumeroOperation());
		$q->bindValue(":intituleOperation", $obj->getIntituleOperation());
		$q->bindValue(":schemaOperation", $obj->getSchemaOperation());
		$q->bindValue(":idMesm", $obj->getIdMesm());
		$q->execute();
	}

	public static function update(Operations $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_Operations SET idOperation=:idOperation,numeroOperation=:numeroOperation,intituleOperation=:intituleOperation,schemaOperation=:schemaOperation,idMesm=:idMesm WHERE idOperation=:idOperation");
		$q->bindValue(":idOperation", $obj->getIdOperation());
		$q->bindValue(":numeroOperation", $obj->getNumeroOperation());
		$q->bindValue(":intituleOperation", $obj->getIntituleOperation());
		$q->bindValue(":schemaOperation", $obj->getSchemaOperation());
		$q->bindValue(":idMesm", $obj->getIdMesm());
		$q->execute();
	}
	public static function delete(Operations $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Operations WHERE idOperation=" .$obj->getIdOperation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Operations WHERE idOperation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Operations($results);
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
		$q = $db->query("SELECT * from amb_Operations ORDER BY intituleOperation, schemaOperation");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Operations($donnees);
			}
		}
		return $liste;
	}
}
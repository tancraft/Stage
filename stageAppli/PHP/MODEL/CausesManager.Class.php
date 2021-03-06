<?php

class CausesManager 
{
	public static function add(Causes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_causes (numeroCause,libelleCause) VALUES (:numeroCause,:libelleCause)");
		$q->bindValue(":numeroCause", $obj->getNumeroCause());
		$q->bindValue(":libelleCause", $obj->getLibelleCause());
		$q->execute();
	}

	public static function update(Causes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_causes SET idCause=:idCause,numeroCause=:numeroCause,libelleCause=:libelleCause WHERE idCause=:idCause");
		$q->bindValue(":idCause", $obj->getIdCause());
		$q->bindValue(":numeroCause", $obj->getNumeroCause());
		$q->bindValue(":libelleCause", $obj->getLibelleCause());
		$q->execute();
	}
	public static function delete(Causes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_causes WHERE idCause=" .$obj->getIdCause());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_causes WHERE idCause =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Causes($results);
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
		$q = $db->query("SELECT * from amb_causes ORDER BY numeroCause, libelleCause");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Causes($donnees);
			}
		}
		return $liste;
	}
}
<?php

class EnvironnementsManager 
{
	public static function add(Environnements $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Environnements (typeEnv) VALUES (:typeEnv)");
		$q->bindValue(":typeEnv", $obj->getTypeEnv());
		$q->execute();
	}

	public static function update(Environnements $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Environnements SET idEnv=:idEnv,typeEnv=:typeEnv WHERE idEnv=:idEnv");
		$q->bindValue(":idEnv", $obj->getIdEnv());
		$q->bindValue(":typeEnv", $obj->getTypeEnv());
		$q->execute();
	}
	public static function delete(Environnements $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Environnements WHERE idEnv=" .$obj->getIdEnv());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Environnements WHERE idEnv =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Environnements($results);
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
		$q = $db->query("SELECT * from amb_Environnements");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Environnements($donnees);
			}
		}
		return $liste;
	}
}
<?php

class ActionsCorrespondantesManager 
{
	public static function add(ActionsCorrespondantes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Actionscorrespondantes (idAction,idActivite) VALUES (:idAction,:idActivite)");
		$q->bindValue(":idAction", $obj->getIdAction());
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->execute();
	}

	public static function update(ActionsCorrespondantes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Actionscorrespondantes SET idActionsCorrespondantes=:idActionsCorrespondantes,idAction=:idAction,idActivite=:idActivite WHERE idActionsCorrespondantes=:idActionsCorrespondantes");
		$q->bindValue(":idActionsCorrespondantes", $obj->getIdActionsCorrespondantes());
		$q->bindValue(":idAction", $obj->getIdAction());
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->execute();
	}
	public static function delete(ActionsCorrespondantes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_amb_Actionscorrespondantes WHERE idActionsCorrespondantes=" .$obj->getIdActionsCorrespondantes());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_amb_Actionscorrespondantes WHERE idActionsCorrespondantes =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new ActionsCorrespondantes($results);
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
		$q = $db->query("SELECT * from amb_amb_Actionscorrespondantes");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new ActionsCorrespondantes($donnees);
			}
		}
		return $liste;
	}
}
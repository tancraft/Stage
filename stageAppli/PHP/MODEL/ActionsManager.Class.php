<?php

class ActionsManager 
{
	public static function add(Actions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Actions (numeroAction,libelleAction) VALUES (:numeroAction,:libelleAction)");
		$q->bindValue(":numeroAction", $obj->getNumeroAction());
		$q->bindValue(":libelleAction", $obj->getLibelleAction());
		$q->execute();
	}

	public static function update(Actions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Actions SET idAction=:idAction,numeroAction=:numeroAction,libelleAction=:libelleAction WHERE idAction=:idAction");
		$q->bindValue(":idAction", $obj->getIdAction());
		$q->bindValue(":numeroAction", $obj->getNumeroAction());
		$q->bindValue(":libelleAction", $obj->getLibelleAction());
		$q->execute();
	}
	public static function delete(Actions $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Actions WHERE idAction=" .$obj->getIdAction());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Actions WHERE idAction =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Actions($results);
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
		$q = $db->query("SELECT * from amb_Actions ORDER BY numeroAction, libelleAction");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Actions($donnees);
			}
		}
		return $liste;
	}
}
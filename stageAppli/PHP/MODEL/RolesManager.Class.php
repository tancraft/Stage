<?php

class RolesManager 
{
	public static function add(Roles $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_roles (libelleRole) VALUES (:libelleRole)");
		$q->bindValue(":libelleRole", $obj->getLibelleRole());
		$q->execute();
	}

	public static function update(Roles $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_roles SET idRole=:idRole,libelleRole=:libelleRole WHERE idRole=:idRole");
		$q->bindValue(":idRole", $obj->getIdRole());
		$q->bindValue(":libelleRole", $obj->getLibelleRole());
		$q->execute();
	}
	public static function delete(Roles $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_roles WHERE idRole=" .$obj->getIdRole());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_roles WHERE idRole =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Roles($results);
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
		$q = $db->query("SELECT * from amb_roles");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Roles($donnees);
			}
		}
		return $liste;
	}
}
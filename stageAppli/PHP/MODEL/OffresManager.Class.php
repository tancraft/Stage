<?php

class OffresManager 
{
	public static function add(Offres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Offres (numeroOffre,dateDebutOffre,dateFinOffre) VALUES (:numeroOffre,:dateDebutOffre,:dateFinOffre)");
		$q->bindValue(":numeroOffre", $obj->getNumeroOffre());
		$q->bindValue(":dateDebutOffre", $obj->getDateDebutOffre());
		$q->bindValue(":dateFinOffre", $obj->getDateFinOffre());
		$q->execute();
	}

	public static function update(Offres $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Offres SET idOffre=:idOffre,numeroOffre=:numeroOffre,dateDebutOffre=:dateDebutOffre,dateFinOffre=:dateFinOffre WHERE idOffre=:idOffre");
		$q->bindValue(":idOffre", $obj->getIdOffre());
		$q->bindValue(":numeroOffre", $obj->getNumeroOffre());
		$q->bindValue(":dateDebutOffre", $obj->getDateDebutOffre());
		$q->bindValue(":dateFinOffre", $obj->getDateFinOffre());
		$q->execute();
	}
	public static function delete(Offres $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Offres WHERE idOffre=" .$obj->getIdOffre());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Offres WHERE idOffre =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Offres($results);
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
		$q = $db->query("SELECT * from amb_Offres");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Offres($donnees);
			}
		}
		return $liste;
	}
}
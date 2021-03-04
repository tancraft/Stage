<?php

class OutilsCaisseManager 
{
	public static function add(OutilsCaisse $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Outilscaisse (nomOutilCaisse,nbOutilCaisse,idUser) VALUES (:nomOutilCaisse,:nbOutilCaisse,:idUser)");
		$q->bindValue(":nomOutilCaisse", $obj->getNomOutilCaisse());
		$q->bindValue(":nbOutilCaisse", $obj->getNbOutilCaisse());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}

	public static function update(OutilsCaisse $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Outilscaisse SET idOutilCaisse=:idOutilCaisse,nomOutilCaisse=:nomOutilCaisse,nbOutilCaisse=:nbOutilCaisse,idUser=:idUser WHERE idOutilCaisse=:idOutilCaisse");
		$q->bindValue(":idOutilCaisse", $obj->getIdOutilCaisse());
		$q->bindValue(":nomOutilCaisse", $obj->getNomOutilCaisse());
		$q->bindValue(":nbOutilCaisse", $obj->getNbOutilCaisse());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}
	public static function delete(OutilsCaisse $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Outilscaisse WHERE idOutilCaisse=" .$obj->getIdOutilCaisse());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Outilscaisse WHERE idOutilCaisse =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new OutilsCaisse($results);
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
		$q = $db->query("SELECT * from amb_Outilscaisse");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new OutilsCaisse($donnees);
			}
		}
		return $liste;
	}
}
<?php

class OutilsMagasinUtilisesManager 
{
	public static function add(OutilsMagasinUtilises $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Outilsmagasinutilises (idActivite,idOutilMagasin,quantiteOutilsMagasin) VALUES (:idActivite,:idOutilMagasin,:quantiteOutilsMagasin)");
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idOutilMagasin", $obj->getIdOutilMagasin());
		$q->bindValue(":quantiteOutilsMagasin", $obj->getQuantiteOutilsMagasin());
		$q->execute();
	}

	public static function update(OutilsMagasinUtilises $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Outilsmagasinutilises SET idOutilsMagasinUtilises=:idOutilsMagasinUtilises,idActivite=:idActivite,idOutilMagasin=:idOutilMagasin,quantiteOutilsMagasin=:quantiteOutilsMagasin WHERE idOutilsMagasinUtilises=:idOutilsMagasinUtilises");
		$q->bindValue(":idOutilsMagasinUtilises", $obj->getIdOutilsMagasinUtilises());
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idOutilMagasin", $obj->getIdOutilMagasin());
		$q->bindValue(":quantiteOutilsMagasin", $obj->getQuantiteOutilsMagasin());
		$q->execute();
	}
	public static function delete(OutilsMagasinUtilises $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Outilsmagasinutilises WHERE idOutilsMagasinUtilises=" .$obj->getIdOutilsMagasinUtilises());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Outilsmagasinutilises WHERE idOutilsMagasinUtilises =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new OutilsMagasinUtilises($results);
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
		$q = $db->query("SELECT * from amb_Outilsmagasinutilises");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new OutilsMagasinUtilises($donnees);
			}
		}
		return $liste;
	}
}
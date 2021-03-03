<?php

class OutilsMagasinManager 
{
	public static function add(Outilsmagasin $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Outilsmagasin (nomOutilMagasin,nbOutilMagasin,idUser) VALUES (:nomOutilMagasin,:nbOutilMagasin,:idUser)");
		$q->bindValue(":nomOutilMagasin", $obj->getNomOutilMagasin());
		$q->bindValue(":nbOutilMagasin", $obj->getNbOutilMagasin());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}

	public static function update(OutilsMagasin $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Outilsmagasin SET idOutilMagasin=:idOutilMagasin,nomOutilMagasin=:nomOutilMagasin,nbOutilMagasin=:nbOutilMagasin,idUser=:idUser WHERE idOutilMagasin=:idOutilMagasin");
		$q->bindValue(":idOutilMagasin", $obj->getIdOutilMagasin());
		$q->bindValue(":nomOutilMagasin", $obj->getNomOutilMagasin());
		$q->bindValue(":nbOutilMagasin", $obj->getNbOutilMagasin());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}
	public static function delete(OutilsMagasin $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Outilsmagasin WHERE idOutilMagasin=" .$obj->getIdOutilMagasin());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Outilsmagasin WHERE idOutilMagasin =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new OutilsMagasin($results);
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
		$q = $db->query("SELECT * FROM Outilsmagasin");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new OutilsMagasin($donnees);
			}
		}
		return $liste;
	}
}
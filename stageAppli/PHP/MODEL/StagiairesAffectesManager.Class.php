<?php

class StagiairesaffectesManager 
{
	public static function add(Stagiairesaffectes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stagiairesaffectes (idUser,idFicheIntervention) VALUES (:idUser,:idFicheIntervention)");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->execute();
	}

	public static function update(Stagiairesaffectes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stagiairesaffectes SET idStagiairesAffectes=:idStagiairesAffectes,idUser=:idUser,idFicheIntervention=:idFicheIntervention WHERE idStagiairesAffectes=:idStagiairesAffectes");
		$q->bindValue(":idStagiairesAffectes", $obj->getIdStagiairesAffectes());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->execute();
	}
	public static function delete(Stagiairesaffectes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Stagiairesaffectes WHERE idStagiairesAffectes=" .$obj->getIdStagiairesAffectes());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Stagiairesaffectes WHERE idStagiairesAffectes =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Stagiairesaffectes($results);
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
		$q = $db->query("SELECT * FROM Stagiairesaffectes");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Stagiairesaffectes($donnees);
			}
		}
		return $liste;
	}
}
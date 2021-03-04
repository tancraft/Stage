<?php

class StagiairesAffectesManager 
{
	public static function add(StagiairesAffectes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_Stagiairesaffectes (idUser,idFicheIntervention) VALUES (:idUser,:idFicheIntervention)");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->execute();
	}

	public static function update(StagiairesAffectes $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_Stagiairesaffectes SET idStagiairesAffectes=:idStagiairesAffectes,idUser=:idUser,idFicheIntervention=:idFicheIntervention WHERE idStagiairesAffectes=:idStagiairesAffectes");
		$q->bindValue(":idStagiairesAffectes", $obj->getIdStagiairesAffectes());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->execute();
	}
	public static function delete(StagiairesAffectes $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Stagiairesaffectes WHERE idStagiairesAffectes=" .$obj->getIdStagiairesAffectes());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Stagiairesaffectes WHERE idStagiairesAffectes =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new StagiairesAffectes($results);
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
		$q = $db->query("SELECT * from amb_Stagiairesaffectes");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new StagiairesAffectes($donnees);
			}
		}
		return $liste;
	}
}
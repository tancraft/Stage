<?php

class ActivitesManager 
{
	public static function add(Activites $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_activites (dateIntervention,dateDebutItv,dateFinItv,dureeItv,travauxRealises,travauxNonRealises,observations,idMesm,idTypeMaint,idFicheIntervention) VALUES (:dateIntervention,:dateDebutItv,:dateFinItv,:dureeItv,:travauxRealises,:travauxNonRealises,:observations,:idMesm,:idTypeMaint,:idFicheIntervention)");
		$q->bindValue(":dateIntervention", $obj->getDateIntervention());
		$q->bindValue(":dateDebutItv", $obj->getDateDebutItv());
		$q->bindValue(":dateFinItv", $obj->getDateFinItv());
		$q->bindValue(":dureeItv", $obj->getDureeItv());
		$q->bindValue(":travauxRealises", $obj->getTravauxRealises());
		$q->bindValue(":travauxNonRealises", $obj->getTravauxNonRealises());
		$q->bindValue(":observations", $obj->getObservations());
		$q->bindValue(":idMesm", $obj->getIdMesm());
		$q->bindValue(":idTypeMaint", $obj->getIdTypeMaint());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->execute();
	}

	public static function update(Activites $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_activites SET idActivite=:idActivite,dateIntervention=:dateIntervention,dateDebutItv=:dateDebutItv,dateFinItv=:dateFinItv,dureeItv=:dureeItv,travauxRealises=:travauxRealises,travauxNonRealises=:travauxNonRealises,observations=:observations,idMesm=:idMesm,idTypeMaint=:idTypeMaint,idFicheIntervention=:idFicheIntervention WHERE idActivite=:idActivite");
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":dateIntervention", $obj->getDateIntervention());
		$q->bindValue(":dateDebutItv", $obj->getDateDebutItv());
		$q->bindValue(":dateFinItv", $obj->getDateFinItv());
		$q->bindValue(":dureeItv", $obj->getDureeItv());
		$q->bindValue(":travauxRealises", $obj->getTravauxRealises());
		$q->bindValue(":travauxNonRealises", $obj->getTravauxNonRealises());
		$q->bindValue(":observations", $obj->getObservations());
		$q->bindValue(":idMesm", $obj->getIdMesm());
		$q->bindValue(":idTypeMaint", $obj->getIdTypeMaint());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->execute();
	}
	public static function delete(Activites $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_activites WHERE idActivite=" .$obj->getIdActivite());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_activites WHERE idActivite =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Activites($results);
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
		$q = $db->query("SELECT * from amb_activites");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Activites($donnees);
			}
		}
		return $liste;
	}
	public static function getActiviteByFiche($idFiche)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * from amb_activites where idFicheIntervention = ".$idFiche);
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Activites($donnees) ;
			}
		}
		return $liste;
	}
}
<?php

class FichesInterventionsManager 
{
	public static function add(FichesInterventions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_fichesinterventions (dateDemande,demandeur,descriptionDemande,statutDemande,validation,appreciation,idUser,idLieu,idOperation,idDegreUrgence) VALUES (:dateDemande,:demandeur,:descriptionDemande,:statutDemande,:validation,:appreciation,:idUser,:idLieu,:idOperation,:idDegreUrgence)");
		$q->bindValue(":dateDemande", $obj->getDateDemande());
		$q->bindValue(":demandeur", $obj->getDemandeur());
		$q->bindValue(":descriptionDemande", $obj->getDescriptionDemande());
		$q->bindValue(":statutDemande", $obj->getStatutDemande());
		$q->bindValue(":validation", $obj->getValidation());
		$q->bindValue(":appreciation", $obj->getAppreciation());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":idLieu", $obj->getIdLieu());
		$q->bindValue(":idOperation", $obj->getIdOperation());
		$q->bindValue(":idDegreUrgence", $obj->getIdDegreUrgence());
		$q->execute();
	}

	public static function update(FichesInterventions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_fichesinterventions SET idFicheIntervention=:idFicheIntervention,dateDemande=:dateDemande,demandeur=:demandeur,descriptionDemande=:descriptionDemande,statutDemande=:statutDemande,validation=:validation,appreciation=:appreciation,idUser=:idUser,idLieu=:idLieu,idOperation=:idOperation,idDegreUrgence=:idDegreUrgence WHERE idFicheIntervention=:idFicheIntervention");
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->bindValue(":dateDemande", $obj->getDateDemande());
		$q->bindValue(":demandeur", $obj->getDemandeur());
		$q->bindValue(":descriptionDemande", $obj->getDescriptionDemande());
		$q->bindValue(":statutDemande", $obj->getStatutDemande());
		$q->bindValue(":validation", $obj->getValidation());
		$q->bindValue(":appreciation", $obj->getAppreciation());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":idLieu", $obj->getIdLieu());
		$q->bindValue(":idOperation", $obj->getIdOperation());
		$q->bindValue(":idDegreUrgence", $obj->getIdDegreUrgence());
		$q->execute();
	}
	public static function delete(FichesInterventions $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_fichesinterventions WHERE idFicheIntervention=" .$obj->getIdFicheIntervention());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_fichesinterventions WHERE idFicheIntervention =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new FichesInterventions($results);
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
		$q = $db->query("SELECT * from amb_fichesinterventions");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new FichesInterventions($donnees);
			}
		}
		return $liste;
	}
}
<?php

class StagiairesFichesInterventionsManager 
{
	public static function add(StagiairesFichesInterventions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stagiairesfichesinterventions (dateDebutFormation,dateFinFormation,numeroBeneficiaire,idFicheIntervention,dateDemande,demandeur,descriptionDemande,statutDemande,validation,appreciation,idLieu,nomLieu,idOperation,numeroOperation,intituleOperation,schemaOperation,idMesm,numeroMesm,libelleMesm,numeroBlocComp,libelleBlocComp) VALUES (:dateDebutFormation,:dateFinFormation,:numeroBeneficiaire,:idFicheIntervention,:dateDemande,:demandeur,:descriptionDemande,:statutDemande,:validation,:appreciation,:idLieu,:nomLieu,:idOperation,:numeroOperation,:intituleOperation,:schemaOperation,:idMesm,:numeroMesm,:libelleMesm,:numeroBlocComp,:libelleBlocComp)");
		$q->bindValue(":dateDebutFormation", $obj->getDateDebutFormation());
		$q->bindValue(":dateFinFormation", $obj->getDateFinFormation());
		$q->bindValue(":numeroBeneficiaire", $obj->getNumeroBeneficiaire());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->bindValue(":dateDemande", $obj->getDateDemande());
		$q->bindValue(":demandeur", $obj->getDemandeur());
		$q->bindValue(":descriptionDemande", $obj->getDescriptionDemande());
		$q->bindValue(":statutDemande", $obj->getStatutDemande());
		$q->bindValue(":validation", $obj->getValidation());
		$q->bindValue(":appreciation", $obj->getAppreciation());
		$q->bindValue(":idLieu", $obj->getIdLieu());
		$q->bindValue(":nomLieu", $obj->getNomLieu());
		$q->bindValue(":idOperation", $obj->getIdOperation());
		$q->bindValue(":numeroOperation", $obj->getNumeroOperation());
		$q->bindValue(":intituleOperation", $obj->getIntituleOperation());
		$q->bindValue(":schemaOperation", $obj->getSchemaOperation());
		$q->bindValue(":idMesm", $obj->getIdMesm());
		$q->bindValue(":numeroMesm", $obj->getNumeroMesm());
		$q->bindValue(":libelleMesm", $obj->getLibelleMesm());
		$q->bindValue(":numeroBlocComp", $obj->getNumeroBlocComp());
		$q->bindValue(":libelleBlocComp", $obj->getLibelleBlocComp());
		$q->execute();
	}

	public static function update(StagiairesFichesInterventions $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stagiairesfichesinterventions SET idUser=:idUser,dateDebutFormation=:dateDebutFormation,dateFinFormation=:dateFinFormation,numeroBeneficiaire=:numeroBeneficiaire,idFicheIntervention=:idFicheIntervention,dateDemande=:dateDemande,demandeur=:demandeur,descriptionDemande=:descriptionDemande,statutDemande=:statutDemande,validation=:validation,appreciation=:appreciation,idLieu=:idLieu,nomLieu=:nomLieu,idOperation=:idOperation,numeroOperation=:numeroOperation,intituleOperation=:intituleOperation,schemaOperation=:schemaOperation,idMesm=:idMesm,numeroMesm=:numeroMesm,libelleMesm=:libelleMesm,numeroBlocComp=:numeroBlocComp,libelleBlocComp=:libelleBlocComp WHERE idUser=:idUser");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":dateDebutFormation", $obj->getDateDebutFormation());
		$q->bindValue(":dateFinFormation", $obj->getDateFinFormation());
		$q->bindValue(":numeroBeneficiaire", $obj->getNumeroBeneficiaire());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->bindValue(":dateDemande", $obj->getDateDemande());
		$q->bindValue(":demandeur", $obj->getDemandeur());
		$q->bindValue(":descriptionDemande", $obj->getDescriptionDemande());
		$q->bindValue(":statutDemande", $obj->getStatutDemande());
		$q->bindValue(":validation", $obj->getValidation());
		$q->bindValue(":appreciation", $obj->getAppreciation());
		$q->bindValue(":idLieu", $obj->getIdLieu());
		$q->bindValue(":nomLieu", $obj->getNomLieu());
		$q->bindValue(":idOperation", $obj->getIdOperation());
		$q->bindValue(":numeroOperation", $obj->getNumeroOperation());
		$q->bindValue(":intituleOperation", $obj->getIntituleOperation());
		$q->bindValue(":schemaOperation", $obj->getSchemaOperation());
		$q->bindValue(":idMesm", $obj->getIdMesm());
		$q->bindValue(":numeroMesm", $obj->getNumeroMesm());
		$q->bindValue(":libelleMesm", $obj->getLibelleMesm());
		$q->bindValue(":numeroBlocComp", $obj->getNumeroBlocComp());
		$q->bindValue(":libelleBlocComp", $obj->getLibelleBlocComp());
		$q->execute();
	}
	public static function delete(StagiairesFichesInterventions $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Stagiairesfichesinterventions WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Stagiairesfichesinterventions WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new StagiairesFichesInterventions($results);
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
		$q = $db->query("SELECT * FROM Stagiairesfichesinterventions");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new StagiairesFichesInterventions($donnees);
			}
		}
		return $liste;
	}
}
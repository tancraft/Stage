<?php

class FicheActiviteManager 
{
	public static function add(FicheActivite $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_Ficheactivite (dateIntervention,dateDebutItv,dateFinItv,dureeItv,travauxRealises,travauxNonRealises,observations,idCause,numeroCause,libelleCause,idMesm,numeroMesm,libelleMesm,idTypeMaint,numeroTypeMaint,libelleTypeMaint,idAction,numeroAction,libelleAction,idFicheIntervention,dateDemande,demandeur,idOperation,idMateriel,nomMateriel,quantiteMat,idOutilCaisse,nomOutilCaisse,quantiteOutilsCaisse,idOutilMagasin,nomOutilMagasin,quantiteOutilsMagasin) VALUES (:dateIntervention,:dateDebutItv,:dateFinItv,:dureeItv,:travauxRealises,:travauxNonRealises,:observations,:idCause,:numeroCause,:libelleCause,:idMesm,:numeroMesm,:libelleMesm,:idTypeMaint,:numeroTypeMaint,:libelleTypeMaint,:idAction,:numeroAction,:libelleAction,:idFicheIntervention,:dateDemande,:demandeur,:idOperation,:idMateriel,:nomMateriel,:quantiteMat,:idOutilCaisse,:nomOutilCaisse,:quantiteOutilsCaisse,:idOutilMagasin,:nomOutilMagasin,:quantiteOutilsMagasin)");
		$q->bindValue(":dateIntervention", $obj->getDateIntervention());
		$q->bindValue(":dateDebutItv", $obj->getDateDebutItv());
		$q->bindValue(":dateFinItv", $obj->getDateFinItv());
		$q->bindValue(":dureeItv", $obj->getDureeItv());
		$q->bindValue(":travauxRealises", $obj->getTravauxRealises());
		$q->bindValue(":travauxNonRealises", $obj->getTravauxNonRealises());
		$q->bindValue(":observations", $obj->getObservations());
		$q->bindValue(":idCause", $obj->getIdCause());
		$q->bindValue(":numeroCause", $obj->getNumeroCause());
		$q->bindValue(":libelleCause", $obj->getLibelleCause());
		$q->bindValue(":idMesm", $obj->getIdMesm());
		$q->bindValue(":numeroMesm", $obj->getNumeroMesm());
		$q->bindValue(":libelleMesm", $obj->getLibelleMesm());
		$q->bindValue(":idTypeMaint", $obj->getIdTypeMaint());
		$q->bindValue(":numeroTypeMaint", $obj->getNumeroTypeMaint());
		$q->bindValue(":libelleTypeMaint", $obj->getLibelleTypeMaint());
		$q->bindValue(":idAction", $obj->getIdAction());
		$q->bindValue(":numeroAction", $obj->getNumeroAction());
		$q->bindValue(":libelleAction", $obj->getLibelleAction());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->bindValue(":dateDemande", $obj->getDateDemande());
		$q->bindValue(":demandeur", $obj->getDemandeur());
		$q->bindValue(":idOperation", $obj->getIdOperation());
		$q->bindValue(":idMateriel", $obj->getIdMateriel());
		$q->bindValue(":nomMateriel", $obj->getNomMateriel());
		$q->bindValue(":quantiteMat", $obj->getQuantiteMat());
		$q->bindValue(":idOutilCaisse", $obj->getIdOutilCaisse());
		$q->bindValue(":nomOutilCaisse", $obj->getNomOutilCaisse());
		$q->bindValue(":quantiteOutilsCaisse", $obj->getQuantiteOutilsCaisse());
		$q->bindValue(":idOutilMagasin", $obj->getIdOutilMagasin());
		$q->bindValue(":nomOutilMagasin", $obj->getNomOutilMagasin());
		$q->bindValue(":quantiteOutilsMagasin", $obj->getQuantiteOutilsMagasin());
		$q->execute();
	}

	public static function update(FicheActivite $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_Ficheactivite SET idActivite=:idActivite,dateIntervention=:dateIntervention,dateDebutItv=:dateDebutItv,dateFinItv=:dateFinItv,dureeItv=:dureeItv,travauxRealises=:travauxRealises,travauxNonRealises=:travauxNonRealises,observations=:observations,idCause=:idCause,numeroCause=:numeroCause,libelleCause=:libelleCause,idMesm=:idMesm,numeroMesm=:numeroMesm,libelleMesm=:libelleMesm,idTypeMaint=:idTypeMaint,numeroTypeMaint=:numeroTypeMaint,libelleTypeMaint=:libelleTypeMaint,idAction=:idAction,numeroAction=:numeroAction,libelleAction=:libelleAction,idFicheIntervention=:idFicheIntervention,dateDemande=:dateDemande,demandeur=:demandeur,idOperation=:idOperation,idMateriel=:idMateriel,nomMateriel=:nomMateriel,quantiteMat=:quantiteMat,idOutilCaisse=:idOutilCaisse,nomOutilCaisse=:nomOutilCaisse,quantiteOutilsCaisse=:quantiteOutilsCaisse,idOutilMagasin=:idOutilMagasin,nomOutilMagasin=:nomOutilMagasin,quantiteOutilsMagasin=:quantiteOutilsMagasin WHERE idActivite=:idActivite");
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":dateIntervention", $obj->getDateIntervention());
		$q->bindValue(":dateDebutItv", $obj->getDateDebutItv());
		$q->bindValue(":dateFinItv", $obj->getDateFinItv());
		$q->bindValue(":dureeItv", $obj->getDureeItv());
		$q->bindValue(":travauxRealises", $obj->getTravauxRealises());
		$q->bindValue(":travauxNonRealises", $obj->getTravauxNonRealises());
		$q->bindValue(":observations", $obj->getObservations());
		$q->bindValue(":idCause", $obj->getIdCause());
		$q->bindValue(":numeroCause", $obj->getNumeroCause());
		$q->bindValue(":libelleCause", $obj->getLibelleCause());
		$q->bindValue(":idMesm", $obj->getIdMesm());
		$q->bindValue(":numeroMesm", $obj->getNumeroMesm());
		$q->bindValue(":libelleMesm", $obj->getLibelleMesm());
		$q->bindValue(":idTypeMaint", $obj->getIdTypeMaint());
		$q->bindValue(":numeroTypeMaint", $obj->getNumeroTypeMaint());
		$q->bindValue(":libelleTypeMaint", $obj->getLibelleTypeMaint());
		$q->bindValue(":idAction", $obj->getIdAction());
		$q->bindValue(":numeroAction", $obj->getNumeroAction());
		$q->bindValue(":libelleAction", $obj->getLibelleAction());
		$q->bindValue(":idFicheIntervention", $obj->getIdFicheIntervention());
		$q->bindValue(":dateDemande", $obj->getDateDemande());
		$q->bindValue(":demandeur", $obj->getDemandeur());
		$q->bindValue(":idOperation", $obj->getIdOperation());
		$q->bindValue(":idMateriel", $obj->getIdMateriel());
		$q->bindValue(":nomMateriel", $obj->getNomMateriel());
		$q->bindValue(":quantiteMat", $obj->getQuantiteMat());
		$q->bindValue(":idOutilCaisse", $obj->getIdOutilCaisse());
		$q->bindValue(":nomOutilCaisse", $obj->getNomOutilCaisse());
		$q->bindValue(":quantiteOutilsCaisse", $obj->getQuantiteOutilsCaisse());
		$q->bindValue(":idOutilMagasin", $obj->getIdOutilMagasin());
		$q->bindValue(":nomOutilMagasin", $obj->getNomOutilMagasin());
		$q->bindValue(":quantiteOutilsMagasin", $obj->getQuantiteOutilsMagasin());
		$q->execute();
	}
	public static function delete(FicheActivite $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Ficheactivite WHERE idActivite=" .$obj->getIdActivite());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Ficheactivite WHERE idActivite =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new FicheActivite($results);
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
		$q = $db->query("SELECT * from amb_Ficheactivite");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new FicheActivite($donnees);
			}
		}
		return $liste;
	}
}
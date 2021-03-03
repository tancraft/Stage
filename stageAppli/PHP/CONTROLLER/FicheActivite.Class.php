<?php

class FicheActivite 
{

	/*****************Attributs***************** */

	private $_idActivite;
	private $_dateIntervention;
	private $_dateDebutItv;
	private $_dateFinItv;
	private $_dureeItv;
	private $_travauxRealises;
	private $_travauxNonRealises;
	private $_observations;
	private $_idCause;
	private $_numeroCause;
	private $_libelleCause;
	private $_idMesm;
	private $_numeroMesm;
	private $_libelleMesm;
	private $_idTypeMaint;
	private $_numeroTypeMaint;
	private $_libelleTypeMaint;
	private $_idAction;
	private $_numeroAction;
	private $_libelleAction;
	private $_idFicheIntervention;
	private $_dateDemande;
	private $_demandeur;
	private $_idOperation;
	private $_idMateriel;
	private $_nomMateriel;
	private $_quantiteMat;
	private $_idOutilCaisse;
	private $_nomOutilCaisse;
	private $_quantiteOutilsCaisse;
	private $_idOutilMagasin;
	private $_nomOutilMagasin;
	private $_quantiteOutilsMagasin;

	/***************** Accesseurs ***************** */


	public function getIdActivite()
	{
		return $this->_idActivite;
	}

	public function setIdActivite($idActivite)
	{
		$this->_idActivite=$idActivite;
	}

	public function getDateIntervention()
	{
		return $this->_dateIntervention;
	}

	public function setDateIntervention($dateIntervention)
	{
		$this->_dateIntervention=$dateIntervention;
	}

	public function getDateDebutItv()
	{
		return $this->_dateDebutItv;
	}

	public function setDateDebutItv($dateDebutItv)
	{
		$this->_dateDebutItv=$dateDebutItv;
	}

	public function getDateFinItv()
	{
		return $this->_dateFinItv;
	}

	public function setDateFinItv($dateFinItv)
	{
		$this->_dateFinItv=$dateFinItv;
	}

	public function getDureeItv()
	{
		return $this->_dureeItv;
	}

	public function setDureeItv($dureeItv)
	{
		$this->_dureeItv=$dureeItv;
	}

	public function getTravauxRealises()
	{
		return $this->_travauxRealises;
	}

	public function setTravauxRealises($travauxRealises)
	{
		$this->_travauxRealises=$travauxRealises;
	}

	public function getTravauxNonRealises()
	{
		return $this->_travauxNonRealises;
	}

	public function setTravauxNonRealises($travauxNonRealises)
	{
		$this->_travauxNonRealises=$travauxNonRealises;
	}

	public function getObservations()
	{
		return $this->_observations;
	}

	public function setObservations($observations)
	{
		$this->_observations=$observations;
	}

	public function getIdCause()
	{
		return $this->_idCause;
	}

	public function setIdCause($idCause)
	{
		$this->_idCause=$idCause;
	}

	public function getNumeroCause()
	{
		return $this->_numeroCause;
	}

	public function setNumeroCause($numeroCause)
	{
		$this->_numeroCause=$numeroCause;
	}

	public function getLibelleCause()
	{
		return $this->_libelleCause;
	}

	public function setLibelleCause($libelleCause)
	{
		$this->_libelleCause=$libelleCause;
	}

	public function getIdMesm()
	{
		return $this->_idMesm;
	}

	public function setIdMesm($idMesm)
	{
		$this->_idMesm=$idMesm;
	}

	public function getNumeroMesm()
	{
		return $this->_numeroMesm;
	}

	public function setNumeroMesm($numeroMesm)
	{
		$this->_numeroMesm=$numeroMesm;
	}

	public function getLibelleMesm()
	{
		return $this->_libelleMesm;
	}

	public function setLibelleMesm($libelleMesm)
	{
		$this->_libelleMesm=$libelleMesm;
	}

	public function getIdTypeMaint()
	{
		return $this->_idTypeMaint;
	}

	public function setIdTypeMaint($idTypeMaint)
	{
		$this->_idTypeMaint=$idTypeMaint;
	}

	public function getNumeroTypeMaint()
	{
		return $this->_numeroTypeMaint;
	}

	public function setNumeroTypeMaint($numeroTypeMaint)
	{
		$this->_numeroTypeMaint=$numeroTypeMaint;
	}

	public function getLibelleTypeMaint()
	{
		return $this->_libelleTypeMaint;
	}

	public function setLibelleTypeMaint($libelleTypeMaint)
	{
		$this->_libelleTypeMaint=$libelleTypeMaint;
	}

	public function getIdAction()
	{
		return $this->_idAction;
	}

	public function setIdAction($idAction)
	{
		$this->_idAction=$idAction;
	}

	public function getNumeroAction()
	{
		return $this->_numeroAction;
	}

	public function setNumeroAction($numeroAction)
	{
		$this->_numeroAction=$numeroAction;
	}

	public function getLibelleAction()
	{
		return $this->_libelleAction;
	}

	public function setLibelleAction($libelleAction)
	{
		$this->_libelleAction=$libelleAction;
	}

	public function getIdFicheIntervention()
	{
		return $this->_idFicheIntervention;
	}

	public function setIdFicheIntervention($idFicheIntervention)
	{
		$this->_idFicheIntervention=$idFicheIntervention;
	}

	public function getDateDemande()
	{
		return $this->_dateDemande;
	}

	public function setDateDemande($dateDemande)
	{
		$this->_dateDemande=$dateDemande;
	}

	public function getDemandeur()
	{
		return $this->_demandeur;
	}

	public function setDemandeur($demandeur)
	{
		$this->_demandeur=$demandeur;
	}

	public function getIdOperation()
	{
		return $this->_idOperation;
	}

	public function setIdOperation($idOperation)
	{
		$this->_idOperation=$idOperation;
	}

	public function getIdMateriel()
	{
		return $this->_idMateriel;
	}

	public function setIdMateriel($idMateriel)
	{
		$this->_idMateriel=$idMateriel;
	}

	public function getNomMateriel()
	{
		return $this->_nomMateriel;
	}

	public function setNomMateriel($nomMateriel)
	{
		$this->_nomMateriel=$nomMateriel;
	}

	public function getQuantiteMat()
	{
		return $this->_quantiteMat;
	}

	public function setQuantiteMat($quantiteMat)
	{
		$this->_quantiteMat=$quantiteMat;
	}

	public function getIdOutilCaisse()
	{
		return $this->_idOutilCaisse;
	}

	public function setIdOutilCaisse($idOutilCaisse)
	{
		$this->_idOutilCaisse=$idOutilCaisse;
	}

	public function getNomOutilCaisse()
	{
		return $this->_nomOutilCaisse;
	}

	public function setNomOutilCaisse($nomOutilCaisse)
	{
		$this->_nomOutilCaisse=$nomOutilCaisse;
	}

	public function getQuantiteOutilsCaisse()
	{
		return $this->_quantiteOutilsCaisse;
	}

	public function setQuantiteOutilsCaisse($quantiteOutilsCaisse)
	{
		$this->_quantiteOutilsCaisse=$quantiteOutilsCaisse;
	}

	public function getIdOutilMagasin()
	{
		return $this->_idOutilMagasin;
	}

	public function setIdOutilMagasin($idOutilMagasin)
	{
		$this->_idOutilMagasin=$idOutilMagasin;
	}

	public function getNomOutilMagasin()
	{
		return $this->_nomOutilMagasin;
	}

	public function setNomOutilMagasin($nomOutilMagasin)
	{
		$this->_nomOutilMagasin=$nomOutilMagasin;
	}

	public function getQuantiteOutilsMagasin()
	{
		return $this->_quantiteOutilsMagasin;
	}

	public function setQuantiteOutilsMagasin($quantiteOutilsMagasin)
	{
		$this->_quantiteOutilsMagasin=$quantiteOutilsMagasin;
	}

	/*****************Constructeur***************** */

	public function __construct(array $options = [])
	{
 		if (!empty($options)) // empty : renvoi vrai si le tableau est vide
		{
			$this->hydrate($options);
		}
	}
	public function hydrate($data)
	{
 		foreach ($data as $key => $value)
		{
 			$methode = "set".ucfirst($key); //ucfirst met la 1ere lettre en majuscule
			if (is_callable(([$this, $methode]))) // is_callable verifie que la methode existe
			{
				$this->$methode($value);
			}
		}
	}

	/*****************Autres Méthodes***************** */

	/**
	* Transforme l'objet en chaine de caractères
	*
	* @return String
	*/
	public function toString()
	{
		return "IdActivite : ".$this->getIdActivite()."DateIntervention : ".$this->getDateIntervention()."DateDebutItv : ".$this->getDateDebutItv()."DateFinItv : ".$this->getDateFinItv()."DureeItv : ".$this->getDureeItv()."TravauxRealises : ".$this->getTravauxRealises()."TravauxNonRealises : ".$this->getTravauxNonRealises()."Observations : ".$this->getObservations()."IdCause : ".$this->getIdCause()."NumeroCause : ".$this->getNumeroCause()."LibelleCause : ".$this->getLibelleCause()."IdMesm : ".$this->getIdMesm()."NumeroMesm : ".$this->getNumeroMesm()."LibelleMesm : ".$this->getLibelleMesm()."IdTypeMaint : ".$this->getIdTypeMaint()."NumeroTypeMaint : ".$this->getNumeroTypeMaint()."LibelleTypeMaint : ".$this->getLibelleTypeMaint()."IdAction : ".$this->getIdAction()."NumeroAction : ".$this->getNumeroAction()."LibelleAction : ".$this->getLibelleAction()."IdFicheIntervention : ".$this->getIdFicheIntervention()."DateDemande : ".$this->getDateDemande()."Demandeur : ".$this->getDemandeur()."IdOperation : ".$this->getIdOperation()."IdMateriel : ".$this->getIdMateriel()."NomMateriel : ".$this->getNomMateriel()."QuantiteMat : ".$this->getQuantiteMat()."IdOutilCaisse : ".$this->getIdOutilCaisse()."NomOutilCaisse : ".$this->getNomOutilCaisse()."QuantiteOutilsCaisse : ".$this->getQuantiteOutilsCaisse()."IdOutilMagasin : ".$this->getIdOutilMagasin()."NomOutilMagasin : ".$this->getNomOutilMagasin()."QuantiteOutilsMagasin : ".$this->getQuantiteOutilsMagasin()."\n";
	}


	
	/* Renvoit Vrai si lobjet en paramètre est égal 
	* à l'objet appelant
	*
	* @param [type] $obj
	* @return bool
	*/
	public function equalsTo($obj)
	{
		return;
	}


	/**
	* Compare l'objet à un autre
	* Renvoi 1 si le 1er est >
	*        0 si ils sont égaux
	*      - 1 si le 1er est <
	*
	* @param [type] $obj1
	* @param [type] $obj2
	* @return Integer
	*/
	public function compareTo($obj)
	{
		return;
	}
}
<?php

class StagiairesFichesInterventions 
{

	/*****************Attributs***************** */

	private $_idUser;
	private $_dateDebutFormation;
	private $_dateFinFormation;
	private $_numeroBeneficiaire;
	private $_idFicheIntervention;
	private $_dateDemande;
	private $_demandeur;
	private $_descriptionDemande;
	private $_statutDemande;
	private $_validation;
	private $_appreciation;
	private $_idLieu;
	private $_nomLieu;
	private $_idOperation;
	private $_numeroOperation;
	private $_intituleOperation;
	private $_schemaOperation;
	private $_idMesm;
	private $_numeroMesm;
	private $_libelleMesm;
	private $_numeroBlocComp;
	private $_libelleBlocComp;

	/***************** Accesseurs ***************** */


	public function getIdUser()
	{
		return $this->_idUser;
	}

	public function setIdUser($idUser)
	{
		$this->_idUser=$idUser;
	}

	public function getDateDebutFormation()
	{
		return $this->_dateDebutFormation;
	}

	public function setDateDebutFormation($dateDebutFormation)
	{
		$this->_dateDebutFormation=$dateDebutFormation;
	}

	public function getDateFinFormation()
	{
		return $this->_dateFinFormation;
	}

	public function setDateFinFormation($dateFinFormation)
	{
		$this->_dateFinFormation=$dateFinFormation;
	}

	public function getNumeroBeneficiaire()
	{
		return $this->_numeroBeneficiaire;
	}

	public function setNumeroBeneficiaire($numeroBeneficiaire)
	{
		$this->_numeroBeneficiaire=$numeroBeneficiaire;
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

	public function getDescriptionDemande()
	{
		return $this->_descriptionDemande;
	}

	public function setDescriptionDemande($descriptionDemande)
	{
		$this->_descriptionDemande=$descriptionDemande;
	}

	public function getStatutDemande()
	{
		return $this->_statutDemande;
	}

	public function setStatutDemande($statutDemande)
	{
		$this->_statutDemande=$statutDemande;
	}

	public function getValidation()
	{
		return $this->_validation;
	}

	public function setValidation($validation)
	{
		$this->_validation=$validation;
	}

	public function getAppreciation()
	{
		return $this->_appreciation;
	}

	public function setAppreciation($appreciation)
	{
		$this->_appreciation=$appreciation;
	}

	public function getIdLieu()
	{
		return $this->_idLieu;
	}

	public function setIdLieu($idLieu)
	{
		$this->_idLieu=$idLieu;
	}

	public function getNomLieu()
	{
		return $this->_nomLieu;
	}

	public function setNomLieu($nomLieu)
	{
		$this->_nomLieu=$nomLieu;
	}

	public function getIdOperation()
	{
		return $this->_idOperation;
	}

	public function setIdOperation($idOperation)
	{
		$this->_idOperation=$idOperation;
	}

	public function getNumeroOperation()
	{
		return $this->_numeroOperation;
	}

	public function setNumeroOperation($numeroOperation)
	{
		$this->_numeroOperation=$numeroOperation;
	}

	public function getIntituleOperation()
	{
		return $this->_intituleOperation;
	}

	public function setIntituleOperation($intituleOperation)
	{
		$this->_intituleOperation=$intituleOperation;
	}

	public function getSchemaOperation()
	{
		return $this->_schemaOperation;
	}

	public function setSchemaOperation($schemaOperation)
	{
		$this->_schemaOperation=$schemaOperation;
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

	public function getNumeroBlocComp()
	{
		return $this->_numeroBlocComp;
	}

	public function setNumeroBlocComp($numeroBlocComp)
	{
		$this->_numeroBlocComp=$numeroBlocComp;
	}

	public function getLibelleBlocComp()
	{
		return $this->_libelleBlocComp;
	}

	public function setLibelleBlocComp($libelleBlocComp)
	{
		$this->_libelleBlocComp=$libelleBlocComp;
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
		return "IdUser : ".$this->getIdUser()."DateDebutFormation : ".$this->getDateDebutFormation()."DateFinFormation : ".$this->getDateFinFormation()."NumeroBeneficiaire : ".$this->getNumeroBeneficiaire()."IdFicheIntervention : ".$this->getIdFicheIntervention()."DateDemande : ".$this->getDateDemande()."Demandeur : ".$this->getDemandeur()."DescriptionDemande : ".$this->getDescriptionDemande()."StatutDemande : ".$this->getStatutDemande()."Validation : ".$this->getValidation()."Appreciation : ".$this->getAppreciation()."IdLieu : ".$this->getIdLieu()."NomLieu : ".$this->getNomLieu()."IdOperation : ".$this->getIdOperation()."NumeroOperation : ".$this->getNumeroOperation()."IntituleOperation : ".$this->getIntituleOperation()."SchemaOperation : ".$this->getSchemaOperation()."IdMesm : ".$this->getIdMesm()."NumeroMesm : ".$this->getNumeroMesm()."LibelleMesm : ".$this->getLibelleMesm()."NumeroBlocComp : ".$this->getNumeroBlocComp()."LibelleBlocComp : ".$this->getLibelleBlocComp()."\n";
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
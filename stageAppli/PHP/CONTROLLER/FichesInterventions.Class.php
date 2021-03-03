<?php

class FichesInterventions 
{

	/*****************Attributs***************** */

	private $_idFicheIntervention;
	private $_dateDemande;
	private $_demandeur;
	private $_descriptionDemande;
	private $_statutDemande;
	private $_validation;
	private $_appreciation;
	private $_idUser;
	private $_idLieu;
	private $_idOperation;
	private $_idDegreUrgence;

	/***************** Accesseurs ***************** */


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

	public function getIdUser()
	{
		return $this->_idUser;
	}

	public function setIdUser($idUser)
	{
		$this->_idUser=$idUser;
	}

	public function getIdLieu()
	{
		return $this->_idLieu;
	}

	public function setIdLieu($idLieu)
	{
		$this->_idLieu=$idLieu;
	}

	public function getIdOperation()
	{
		return $this->_idOperation;
	}

	public function setIdOperation($idOperation)
	{
		$this->_idOperation=$idOperation;
	}

	public function getIdDegreUrgence()
	{
		return $this->_idDegreUrgence;
	}

	public function setIdDegreUrgence($idDegreUrgence)
	{
		$this->_idDegreUrgence=$idDegreUrgence;
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
		return "IdFicheIntervention : ".$this->getIdFicheIntervention()."DateDemande : ".$this->getDateDemande()."Demandeur : ".$this->getDemandeur()."DescriptionDemande : ".$this->getDescriptionDemande()."StatutDemande : ".$this->getStatutDemande()."Validation : ".$this->getValidation()."Appreciation : ".$this->getAppreciation()."IdUser : ".$this->getIdUser()."IdLieu : ".$this->getIdLieu()."IdOperation : ".$this->getIdOperation()."IdDegreUrgence : ".$this->getIdDegreUrgence()."\n";
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
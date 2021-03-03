<?php

class Stagiaires 
{

	/*****************Attributs***************** */

	private $_idUser;
	private $_dateDebutFormation;
	private $_dateFinFormation;
	private $_numeroBeneficiaire;
	private $_idOffre;

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

	public function getIdOffre()
	{
		return $this->_idOffre;
	}

	public function setIdOffre($idOffre)
	{
		$this->_idOffre=$idOffre;
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
		return "IdUser : ".$this->getIdUser()."DateDebutFormation : ".$this->getDateDebutFormation()."DateFinFormation : ".$this->getDateFinFormation()."NumeroBeneficiaire : ".$this->getNumeroBeneficiaire()."IdOffre : ".$this->getIdOffre()."\n";
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
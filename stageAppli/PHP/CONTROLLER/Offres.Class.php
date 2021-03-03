<?php

class Offres 
{

	/*****************Attributs***************** */

	private $_idOffre;
	private $_numeroOffre;
	private $_dateDebutOffre;
	private $_dateFinOffre;

	/***************** Accesseurs ***************** */


	public function getIdOffre()
	{
		return $this->_idOffre;
	}

	public function setIdOffre($idOffre)
	{
		$this->_idOffre=$idOffre;
	}

	public function getNumeroOffre()
	{
		return $this->_numeroOffre;
	}

	public function setNumeroOffre($numeroOffre)
	{
		$this->_numeroOffre=$numeroOffre;
	}

	public function getDateDebutOffre()
	{
		return $this->_dateDebutOffre;
	}

	public function setDateDebutOffre($dateDebutOffre)
	{
		$this->_dateDebutOffre=$dateDebutOffre;
	}

	public function getDateFinOffre()
	{
		return $this->_dateFinOffre;
	}

	public function setDateFinOffre($dateFinOffre)
	{
		$this->_dateFinOffre=$dateFinOffre;
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
		return "IdOffre : ".$this->getIdOffre()."NumeroOffre : ".$this->getNumeroOffre()."DateDebutOffre : ".$this->getDateDebutOffre()."DateFinOffre : ".$this->getDateFinOffre()."\n";
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
<?php

class Causesliees 
{

	/*****************Attributs***************** */

	private $_idCausesLiees;
	private $_idActivite;
	private $_idCause;

	/***************** Accesseurs ***************** */


	public function getIdCausesLiees()
	{
		return $this->_idCausesLiees;
	}

	public function setIdCausesLiees($idCausesLiees)
	{
		$this->_idCausesLiees=$idCausesLiees;
	}

	public function getIdActivite()
	{
		return $this->_idActivite;
	}

	public function setIdActivite($idActivite)
	{
		$this->_idActivite=$idActivite;
	}

	public function getIdCause()
	{
		return $this->_idCause;
	}

	public function setIdCause($idCause)
	{
		$this->_idCause=$idCause;
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
		return "IdCausesLiees : ".$this->getIdCausesLiees()."IdActivite : ".$this->getIdActivite()."IdCause : ".$this->getIdCause()."\n";
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
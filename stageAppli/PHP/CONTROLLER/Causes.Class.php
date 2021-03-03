<?php

class Causes 
{

	/*****************Attributs***************** */

	private $_idCause;
	private $_numeroCause;
	private $_libelleCause;

	/***************** Accesseurs ***************** */


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
		return "IdCause : ".$this->getIdCause()."NumeroCause : ".$this->getNumeroCause()."LibelleCause : ".$this->getLibelleCause()."\n";
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
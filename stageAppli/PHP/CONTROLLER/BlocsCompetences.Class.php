<?php

class BlocsCompetences 
{

	/*****************Attributs***************** */

	private $_idBlocComp;
	private $_numeroBlocComp;
	private $_libelleBlocComp;

	/***************** Accesseurs ***************** */


	public function getIdBlocComp()
	{
		return $this->_idBlocComp;
	}

	public function setIdBlocComp($idBlocComp)
	{
		$this->_idBlocComp=$idBlocComp;
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
		return "IdBlocComp : ".$this->getIdBlocComp()."NumeroBlocComp : ".$this->getNumeroBlocComp()."LibelleBlocComp : ".$this->getLibelleBlocComp()."\n";
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
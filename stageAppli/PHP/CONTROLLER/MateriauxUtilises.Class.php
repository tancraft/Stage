<?php

class MateriauxUtilises 
{

	/*****************Attributs***************** */

	private $_idMateriauxUtilises;
	private $_idActivite;
	private $_idMateriel;
	private $_quantiteMat;

	/***************** Accesseurs ***************** */


	public function getIdMateriauxUtilises()
	{
		return $this->_idMateriauxUtilises;
	}

	public function setIdMateriauxUtilises($idMateriauxUtilises)
	{
		$this->_idMateriauxUtilises=$idMateriauxUtilises;
	}

	public function getIdActivite()
	{
		return $this->_idActivite;
	}

	public function setIdActivite($idActivite)
	{
		$this->_idActivite=$idActivite;
	}

	public function getIdMateriel()
	{
		return $this->_idMateriel;
	}

	public function setIdMateriel($idMateriel)
	{
		$this->_idMateriel=$idMateriel;
	}

	public function getQuantiteMat()
	{
		return $this->_quantiteMat;
	}

	public function setQuantiteMat($quantiteMat)
	{
		$this->_quantiteMat=$quantiteMat;
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
		return "IdMateriauxUtilises : ".$this->getIdMateriauxUtilises()."IdActivite : ".$this->getIdActivite()."IdMateriel : ".$this->getIdMateriel()."QuantiteMat : ".$this->getQuantiteMat()."\n";
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
<?php

class Lieux 
{

	/*****************Attributs***************** */

	private $_idLieu;
	private $_nomLieu;
	private $_idEnv;

	/***************** Accesseurs ***************** */


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

	public function getIdEnv()
	{
		return $this->_idEnv;
	}

	public function setIdEnv($idEnv)
	{
		$this->_idEnv=$idEnv;
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
		return "IdLieu : ".$this->getIdLieu()."NomLieu : ".$this->getNomLieu()."IdEnv : ".$this->getIdEnv()."\n";
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
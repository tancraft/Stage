<?php

class OutilsMagasin 
{

	/*****************Attributs***************** */

	private $_idOutilMagasin;
	private $_nomOutilMagasin;
	private $_nbOutilMagasin;
	private $_idUser;

	/***************** Accesseurs ***************** */


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

	public function getNbOutilMagasin()
	{
		return $this->_nbOutilMagasin;
	}

	public function setNbOutilMagasin($nbOutilMagasin)
	{
		$this->_nbOutilMagasin=$nbOutilMagasin;
	}

	public function getIdUser()
	{
		return $this->_idUser;
	}

	public function setIdUser($idUser)
	{
		$this->_idUser=$idUser;
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
		return "IdOutilMagasin : ".$this->getIdOutilMagasin()."NomOutilMagasin : ".$this->getNomOutilMagasin()."NbOutilMagasin : ".$this->getNbOutilMagasin()."IdUser : ".$this->getIdUser()."\n";
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
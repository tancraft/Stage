<?php

class OutilsCaisse 
{

	/*****************Attributs***************** */

	private $_idOutilCaisse;
	private $_nomOutilCaisse;
	private $_nbOutilCaisse;
	private $_idUser;

	/***************** Accesseurs ***************** */


	public function getIdOutilCaisse()
	{
		return $this->_idOutilCaisse;
	}

	public function setIdOutilCaisse($idOutilCaisse)
	{
		$this->_idOutilCaisse=$idOutilCaisse;
	}

	public function getNomOutilCaisse()
	{
		return $this->_nomOutilCaisse;
	}

	public function setNomOutilCaisse($nomOutilCaisse)
	{
		$this->_nomOutilCaisse=$nomOutilCaisse;
	}

	public function getNbOutilCaisse()
	{
		return $this->_nbOutilCaisse;
	}

	public function setNbOutilCaisse($nbOutilCaisse)
	{
		$this->_nbOutilCaisse=$nbOutilCaisse;
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
		return "IdOutilCaisse : ".$this->getIdOutilCaisse()."NomOutilCaisse : ".$this->getNomOutilCaisse()."NbOutilCaisse : ".$this->getNbOutilCaisse()."IdUser : ".$this->getIdUser()."\n";
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
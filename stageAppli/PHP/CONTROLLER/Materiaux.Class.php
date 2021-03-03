<?php

class Materiaux 
{

	/*****************Attributs***************** */

	private $_idMateriel;
	private $_nomMateriel;
	private $_nbDispo;
	private $_idUser;

	/***************** Accesseurs ***************** */


	public function getIdMateriel()
	{
		return $this->_idMateriel;
	}

	public function setIdMateriel($idMateriel)
	{
		$this->_idMateriel=$idMateriel;
	}

	public function getNomMateriel()
	{
		return $this->_nomMateriel;
	}

	public function setNomMateriel($nomMateriel)
	{
		$this->_nomMateriel=$nomMateriel;
	}

	public function getNbDispo()
	{
		return $this->_nbDispo;
	}

	public function setNbDispo($nbDispo)
	{
		$this->_nbDispo=$nbDispo;
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
		return "IdMateriel : ".$this->getIdMateriel()."NomMateriel : ".$this->getNomMateriel()."NbDispo : ".$this->getNbDispo()."IdUser : ".$this->getIdUser()."\n";
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
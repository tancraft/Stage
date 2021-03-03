<?php

class Operations 
{

	/*****************Attributs***************** */

	private $_idOperation;
	private $_numeroOperation;
	private $_intituleOperation;
	private $_schemaOperation;
	private $_idMesm;

	/***************** Accesseurs ***************** */


	public function getIdOperation()
	{
		return $this->_idOperation;
	}

	public function setIdOperation($idOperation)
	{
		$this->_idOperation=$idOperation;
	}

	public function getNumeroOperation()
	{
		return $this->_numeroOperation;
	}

	public function setNumeroOperation($numeroOperation)
	{
		$this->_numeroOperation=$numeroOperation;
	}

	public function getIntituleOperation()
	{
		return $this->_intituleOperation;
	}

	public function setIntituleOperation($intituleOperation)
	{
		$this->_intituleOperation=$intituleOperation;
	}

	public function getSchemaOperation()
	{
		return $this->_schemaOperation;
	}

	public function setSchemaOperation($schemaOperation)
	{
		$this->_schemaOperation=$schemaOperation;
	}

	public function getIdMesm()
	{
		return $this->_idMesm;
	}

	public function setIdMesm($idMesm)
	{
		$this->_idMesm=$idMesm;
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
		return "IdOperation : ".$this->getIdOperation()."NumeroOperation : ".$this->getNumeroOperation()."IntituleOperation : ".$this->getIntituleOperation()."SchemaOperation : ".$this->getSchemaOperation()."IdMesm : ".$this->getIdMesm()."\n";
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
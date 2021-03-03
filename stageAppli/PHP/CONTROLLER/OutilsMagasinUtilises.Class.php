<?php

class OutilsMagasinUtilises 
{

	/*****************Attributs***************** */

	private $_idOutilsMagasinUtilises;
	private $_idActivite;
	private $_idOutilMagasin;
	private $_quantiteOutilsMagasin;

	/***************** Accesseurs ***************** */


	public function getIdOutilsMagasinUtilises()
	{
		return $this->_idOutilsMagasinUtilises;
	}

	public function setIdOutilsMagasinUtilises($idOutilsMagasinUtilises)
	{
		$this->_idOutilsMagasinUtilises=$idOutilsMagasinUtilises;
	}

	public function getIdActivite()
	{
		return $this->_idActivite;
	}

	public function setIdActivite($idActivite)
	{
		$this->_idActivite=$idActivite;
	}

	public function getIdOutilMagasin()
	{
		return $this->_idOutilMagasin;
	}

	public function setIdOutilMagasin($idOutilMagasin)
	{
		$this->_idOutilMagasin=$idOutilMagasin;
	}

	public function getQuantiteOutilsMagasin()
	{
		return $this->_quantiteOutilsMagasin;
	}

	public function setQuantiteOutilsMagasin($quantiteOutilsMagasin)
	{
		$this->_quantiteOutilsMagasin=$quantiteOutilsMagasin;
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
		return "IdOutilsMagasinUtilises : ".$this->getIdOutilsMagasinUtilises()."IdActivite : ".$this->getIdActivite()."IdOutilMagasin : ".$this->getIdOutilMagasin()."QuantiteOutilsMagasin : ".$this->getQuantiteOutilsMagasin()."\n";
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
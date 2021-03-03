<?php

class OutilsCaisseUtilises 
{

	/*****************Attributs***************** */

	private $_idOutilsCaisseUtilises;
	private $_idActivite;
	private $_idOutilCaisse;
	private $_quantiteOutilsCaisse;

	/***************** Accesseurs ***************** */


	public function getIdOutilsCaisseUtilises()
	{
		return $this->_idOutilsCaisseUtilises;
	}

	public function setIdOutilsCaisseUtilises($idOutilsCaisseUtilises)
	{
		$this->_idOutilsCaisseUtilises=$idOutilsCaisseUtilises;
	}

	public function getIdActivite()
	{
		return $this->_idActivite;
	}

	public function setIdActivite($idActivite)
	{
		$this->_idActivite=$idActivite;
	}

	public function getIdOutilCaisse()
	{
		return $this->_idOutilCaisse;
	}

	public function setIdOutilCaisse($idOutilCaisse)
	{
		$this->_idOutilCaisse=$idOutilCaisse;
	}

	public function getQuantiteOutilsCaisse()
	{
		return $this->_quantiteOutilsCaisse;
	}

	public function setQuantiteOutilsCaisse($quantiteOutilsCaisse)
	{
		$this->_quantiteOutilsCaisse=$quantiteOutilsCaisse;
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
		return "IdOutilsCaisseUtilises : ".$this->getIdOutilsCaisseUtilises()."IdActivite : ".$this->getIdActivite()."IdOutilCaisse : ".$this->getIdOutilCaisse()."QuantiteOutilsCaisse : ".$this->getQuantiteOutilsCaisse()."\n";
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
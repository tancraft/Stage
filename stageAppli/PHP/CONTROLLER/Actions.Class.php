<?php

class Actions 
{

	/*****************Attributs***************** */

	private $_idAction;
	private $_numeroAction;
	private $_libelleAction;

	/***************** Accesseurs ***************** */


	public function getIdAction()
	{
		return $this->_idAction;
	}

	public function setIdAction($idAction)
	{
		$this->_idAction=$idAction;
	}

	public function getNumeroAction()
	{
		return $this->_numeroAction;
	}

	public function setNumeroAction($numeroAction)
	{
		$this->_numeroAction=$numeroAction;
	}

	public function getLibelleAction()
	{
		return $this->_libelleAction;
	}

	public function setLibelleAction($libelleAction)
	{
		$this->_libelleAction=$libelleAction;
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
		return "IdAction : ".$this->getIdAction()."NumeroAction : ".$this->getNumeroAction()."LibelleAction : ".$this->getLibelleAction()."\n";
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
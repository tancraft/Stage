<?php

class Mesm 
{

	/*****************Attributs***************** */

	private $_idMesm;
	private $_numeroMesm;
	private $_libelleMesm;
	private $_idBlocComp;

	/***************** Accesseurs ***************** */


	public function getIdMesm()
	{
		return $this->_idMesm;
	}

	public function setIdMesm($idMesm)
	{
		$this->_idMesm=$idMesm;
	}

	public function getNumeroMesm()
	{
		return $this->_numeroMesm;
	}

	public function setNumeroMesm($numeroMesm)
	{
		$this->_numeroMesm=$numeroMesm;
	}

	public function getLibelleMesm()
	{
		return $this->_libelleMesm;
	}

	public function setLibelleMesm($libelleMesm)
	{
		$this->_libelleMesm=$libelleMesm;
	}

	public function getIdBlocComp()
	{
		return $this->_idBlocComp;
	}

	public function setIdBlocComp($idBlocComp)
	{
		$this->_idBlocComp=$idBlocComp;
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
		return "IdMesm : ".$this->getIdMesm()."NumeroMesm : ".$this->getNumeroMesm()."LibelleMesm : ".$this->getLibelleMesm()."IdBlocComp : ".$this->getIdBlocComp()."\n";
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
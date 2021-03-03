<?php

class Activites 
{

	/*****************Attributs***************** */

	private $_idActivite;
	private $_dateIntervention;
	private $_dateDebutItv;
	private $_dateFinItv;
	private $_dureeItv;
	private $_travauxRealises;
	private $_travauxNonRealises;
	private $_observations;
	private $_idMesm;
	private $_idTypeMaint;
	private $_idFicheIntervention;

	/***************** Accesseurs ***************** */


	public function getIdActivite()
	{
		return $this->_idActivite;
	}

	public function setIdActivite($idActivite)
	{
		$this->_idActivite=$idActivite;
	}

	public function getDateIntervention()
	{
		return $this->_dateIntervention;
	}

	public function setDateIntervention($dateIntervention)
	{
		$this->_dateIntervention=$dateIntervention;
	}

	public function getDateDebutItv()
	{
		return $this->_dateDebutItv;
	}

	public function setDateDebutItv($dateDebutItv)
	{
		$this->_dateDebutItv=$dateDebutItv;
	}

	public function getDateFinItv()
	{
		return $this->_dateFinItv;
	}

	public function setDateFinItv($dateFinItv)
	{
		$this->_dateFinItv=$dateFinItv;
	}

	public function getDureeItv()
	{
		return $this->_dureeItv;
	}

	public function setDureeItv($dureeItv)
	{
		$this->_dureeItv=$dureeItv;
	}

	public function getTravauxRealises()
	{
		return $this->_travauxRealises;
	}

	public function setTravauxRealises($travauxRealises)
	{
		$this->_travauxRealises=$travauxRealises;
	}

	public function getTravauxNonRealises()
	{
		return $this->_travauxNonRealises;
	}

	public function setTravauxNonRealises($travauxNonRealises)
	{
		$this->_travauxNonRealises=$travauxNonRealises;
	}

	public function getObservations()
	{
		return $this->_observations;
	}

	public function setObservations($observations)
	{
		$this->_observations=$observations;
	}

	public function getIdMesm()
	{
		return $this->_idMesm;
	}

	public function setIdMesm($idMesm)
	{
		$this->_idMesm=$idMesm;
	}

	public function getIdTypeMaint()
	{
		return $this->_idTypeMaint;
	}

	public function setIdTypeMaint($idTypeMaint)
	{
		$this->_idTypeMaint=$idTypeMaint;
	}

	public function getIdFicheIntervention()
	{
		return $this->_idFicheIntervention;
	}

	public function setIdFicheIntervention($idFicheIntervention)
	{
		$this->_idFicheIntervention=$idFicheIntervention;
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
		return "IdActivite : ".$this->getIdActivite()."DateIntervention : ".$this->getDateIntervention()."DateDebutItv : ".$this->getDateDebutItv()."DateFinItv : ".$this->getDateFinItv()."DureeItv : ".$this->getDureeItv()."TravauxRealises : ".$this->getTravauxRealises()."TravauxNonRealises : ".$this->getTravauxNonRealises()."Observations : ".$this->getObservations()."IdMesm : ".$this->getIdMesm()."IdTypeMaint : ".$this->getIdTypeMaint()."IdFicheIntervention : ".$this->getIdFicheIntervention()."\n";
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
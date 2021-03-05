<?php

class FormateursManager 
{
	public static function add(Formateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_formateurs (matriculeFormateur,typeContrat,dateDebutContrat,dateFinContrat) VALUES (:matriculeFormateur,:typeContrat,:dateDebutContrat,:dateFinContrat)");
		$q->bindValue(":matriculeFormateur", $obj->getMatriculeFormateur());
		$q->bindValue(":typeContrat", $obj->getTypeContrat());
		$q->bindValue(":dateDebutContrat", $obj->getDateDebutContrat());
		$q->bindValue(":dateFinContrat", $obj->getDateFinContrat());
		$q->execute();
	}

	public static function update(Formateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_formateurs SET idUser=:idUser,matriculeFormateur=:matriculeFormateur,typeContrat=:typeContrat,dateDebutContrat=:dateDebutContrat,dateFinContrat=:dateFinContrat WHERE idUser=:idUser");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":matriculeFormateur", $obj->getMatriculeFormateur());
		$q->bindValue(":typeContrat", $obj->getTypeContrat());
		$q->bindValue(":dateDebutContrat", $obj->getDateDebutContrat());
		$q->bindValue(":dateFinContrat", $obj->getDateFinContrat());
		$q->execute();
	}
	public static function delete(Formateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_formateurs WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_formateurs WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Formateurs($results);
		}
		else
		{
			return false;
		}
	}
	public static function getList()
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * from amb_formateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Formateurs($donnees);
			}
		}
		return $liste;
	}
}
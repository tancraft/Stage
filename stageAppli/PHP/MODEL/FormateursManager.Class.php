<?php

class FormateursManager 
{
	public static function add(Formateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Formateurs (matriculeFormateur,typeContrat,dateDebutContrat,dateFinContrat) VALUES (:matriculeFormateur,:typeContrat,:dateDebutContrat,:dateFinContrat)");
		$q->bindValue(":matriculeFormateur", $obj->getMatriculeFormateur());
		$q->bindValue(":typeContrat", $obj->getTypeContrat());
		$q->bindValue(":dateDebutContrat", $obj->getDateDebutContrat());
		$q->bindValue(":dateFinContrat", $obj->getDateFinContrat());
		$q->execute();
	}

	public static function update(Formateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Formateurs SET idUser=:idUser,matriculeFormateur=:matriculeFormateur,typeContrat=:typeContrat,dateDebutContrat=:dateDebutContrat,dateFinContrat=:dateFinContrat WHERE idUser=:idUser");
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
		$db->exec("DELETE FROM Formateurs WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Formateurs WHERE idUser =".$id);
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
		$q = $db->query("SELECT * FROM Formateurs");
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
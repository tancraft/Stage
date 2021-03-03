<?php

class OffresformateursManager 
{
	public static function add(Offresformateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Offresformateurs (matriculeFormateur,typeContrat,dateDebutContrat,dateFinContrat,idOffre,numeroOffre,dateDebutOffre,dateFinOffre) VALUES (:matriculeFormateur,:typeContrat,:dateDebutContrat,:dateFinContrat,:idOffre,:numeroOffre,:dateDebutOffre,:dateFinOffre)");
		$q->bindValue(":matriculeFormateur", $obj->getMatriculeFormateur());
		$q->bindValue(":typeContrat", $obj->getTypeContrat());
		$q->bindValue(":dateDebutContrat", $obj->getDateDebutContrat());
		$q->bindValue(":dateFinContrat", $obj->getDateFinContrat());
		$q->bindValue(":idOffre", $obj->getIdOffre());
		$q->bindValue(":numeroOffre", $obj->getNumeroOffre());
		$q->bindValue(":dateDebutOffre", $obj->getDateDebutOffre());
		$q->bindValue(":dateFinOffre", $obj->getDateFinOffre());
		$q->execute();
	}

	public static function update(Offresformateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Offresformateurs SET idUser=:idUser,matriculeFormateur=:matriculeFormateur,typeContrat=:typeContrat,dateDebutContrat=:dateDebutContrat,dateFinContrat=:dateFinContrat,idOffre=:idOffre,numeroOffre=:numeroOffre,dateDebutOffre=:dateDebutOffre,dateFinOffre=:dateFinOffre WHERE idUser=:idUser");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":matriculeFormateur", $obj->getMatriculeFormateur());
		$q->bindValue(":typeContrat", $obj->getTypeContrat());
		$q->bindValue(":dateDebutContrat", $obj->getDateDebutContrat());
		$q->bindValue(":dateFinContrat", $obj->getDateFinContrat());
		$q->bindValue(":idOffre", $obj->getIdOffre());
		$q->bindValue(":numeroOffre", $obj->getNumeroOffre());
		$q->bindValue(":dateDebutOffre", $obj->getDateDebutOffre());
		$q->bindValue(":dateFinOffre", $obj->getDateFinOffre());
		$q->execute();
	}
	public static function delete(Offresformateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Offresformateurs WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Offresformateurs WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Offresformateurs($results);
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
		$q = $db->query("SELECT * FROM Offresformateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Offresformateurs($donnees);
			}
		}
		return $liste;
	}
}
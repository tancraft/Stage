<?php

class StagiairesManager 
{
	public static function add(Stagiaires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Stagiaires (dateDebutFormation,dateFinFormation,numeroBeneficiaire,idOffre) VALUES (:dateDebutFormation,:dateFinFormation,:numeroBeneficiaire,:idOffre)");
		$q->bindValue(":dateDebutFormation", $obj->getDateDebutFormation());
		$q->bindValue(":dateFinFormation", $obj->getDateFinFormation());
		$q->bindValue(":numeroBeneficiaire", $obj->getNumeroBeneficiaire());
		$q->bindValue(":idOffre", $obj->getIdOffre());
		$q->execute();
	}

	public static function update(Stagiaires $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Stagiaires SET idUser=:idUser,dateDebutFormation=:dateDebutFormation,dateFinFormation=:dateFinFormation,numeroBeneficiaire=:numeroBeneficiaire,idOffre=:idOffre WHERE idUser=:idUser");
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->bindValue(":dateDebutFormation", $obj->getDateDebutFormation());
		$q->bindValue(":dateFinFormation", $obj->getDateFinFormation());
		$q->bindValue(":numeroBeneficiaire", $obj->getNumeroBeneficiaire());
		$q->bindValue(":idOffre", $obj->getIdOffre());
		$q->execute();
	}
	public static function delete(Stagiaires $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Stagiaires WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Stagiaires WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Stagiaires($results);
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
		$q = $db->query("SELECT * from amb_Stagiaires");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Stagiaires($donnees);
			}
		}
		return $liste;
	}
}
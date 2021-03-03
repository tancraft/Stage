<?php

class MateriauxutilisesManager 
{
	public static function add(Materiauxutilises $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Materiauxutilises (idActivite,idMateriel,quantiteMat) VALUES (:idActivite,:idMateriel,:quantiteMat)");
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idMateriel", $obj->getIdMateriel());
		$q->bindValue(":quantiteMat", $obj->getQuantiteMat());
		$q->execute();
	}

	public static function update(Materiauxutilises $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Materiauxutilises SET idMateriauxUtilises=:idMateriauxUtilises,idActivite=:idActivite,idMateriel=:idMateriel,quantiteMat=:quantiteMat WHERE idMateriauxUtilises=:idMateriauxUtilises");
		$q->bindValue(":idMateriauxUtilises", $obj->getIdMateriauxUtilises());
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idMateriel", $obj->getIdMateriel());
		$q->bindValue(":quantiteMat", $obj->getQuantiteMat());
		$q->execute();
	}
	public static function delete(Materiauxutilises $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Materiauxutilises WHERE idMateriauxUtilises=" .$obj->getIdMateriauxUtilises());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Materiauxutilises WHERE idMateriauxUtilises =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Materiauxutilises($results);
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
		$q = $db->query("SELECT * FROM Materiauxutilises");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Materiauxutilises($donnees);
			}
		}
		return $liste;
	}
}
<?php

class MateriauxUtilisesManager 
{
	public static function add(Materiauxutilises $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_materiauxutilises (idActivite,idMateriel,quantiteMat) VALUES (:idActivite,:idMateriel,:quantiteMat)");
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idMateriel", $obj->getIdMateriel());
		$q->bindValue(":quantiteMat", $obj->getQuantiteMat());
		$q->execute();
	}

	public static function update(MateriaUxutilises $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_materiauxutilises SET idMateriauxUtilises=:idMateriauxUtilises,idActivite=:idActivite,idMateriel=:idMateriel,quantiteMat=:quantiteMat WHERE idMateriauxUtilises=:idMateriauxUtilises");
		$q->bindValue(":idMateriauxUtilises", $obj->getIdMateriauxUtilises());
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idMateriel", $obj->getIdMateriel());
		$q->bindValue(":quantiteMat", $obj->getQuantiteMat());
		$q->execute();
	}
	public static function delete(MateriauxUtilises $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_materiauxutilises WHERE idMateriauxUtilises=" .$obj->getIdMateriauxUtilises());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_materiauxutilises WHERE idMateriauxUtilises =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new MateriauxUtilises($results);
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
		$q = $db->query("SELECT * from amb_materiauxutilises");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new MateriauxUtilises($donnees);
			}
		}
		return $liste;
	}
	public static function getMateriauxUtiliserByFormateur($idFormateur)
	{
 		$db=DbConnect::getDb();
		$liste = [];
		$q = $db->query("SELECT * from amb_materiauxutilises INNER JOIN amb_materiaux ON amb_materiauxutilises.idMateriel = amb_materiaux.idMateriel WHERE amb_materiaux.idUser =".$idFormateur);
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new MateriauxUtilises($donnees) ;
			}
		}
		return $liste;
	}

}
<?php

class BlocsCompetencesManager 
{
	public static function add(BlocsCompetences $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_blocscompetences (numeroBlocComp,libelleBlocComp) VALUES (:numeroBlocComp,:libelleBlocComp)");
		$q->bindValue(":numeroBlocComp", $obj->getNumeroBlocComp());
		$q->bindValue(":libelleBlocComp", $obj->getLibelleBlocComp());
		$q->execute();
	}

	public static function update(BlocsCompetences $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_blocscompetences SET idBlocComp=:idBlocComp,numeroBlocComp=:numeroBlocComp,libelleBlocComp=:libelleBlocComp WHERE idBlocComp=:idBlocComp");
		$q->bindValue(":idBlocComp", $obj->getIdBlocComp());
		$q->bindValue(":numeroBlocComp", $obj->getNumeroBlocComp());
		$q->bindValue(":libelleBlocComp", $obj->getLibelleBlocComp());
		$q->execute();
	}
	public static function delete(BlocsCompetences $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_blocscompetences WHERE idBlocComp=" .$obj->getIdBlocComp());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_blocscompetences WHERE idBlocComp =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new BlocsCompetences($results);
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
		$q = $db->query("SELECT * from amb_blocscompetences ORDER BY numeroBlocComp, libelleBlocComp");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new BlocsCompetences($donnees);
			}
		}
		return $liste;
	}
}
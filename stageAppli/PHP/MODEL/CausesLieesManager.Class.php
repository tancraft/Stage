<?php

class CausesLieesManager 
{
	public static function add(Causesliees $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO Causesliees (idActivite,idCause) VALUES (:idActivite,:idCause)");
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idCause", $obj->getIdCause());
		$q->execute();
	}

	public static function update(CausesLiees $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE Causesliees SET idCausesLiees=:idCausesLiees,idActivite=:idActivite,idCause=:idCause WHERE idCausesLiees=:idCausesLiees");
		$q->bindValue(":idCausesLiees", $obj->getIdCausesLiees());
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idCause", $obj->getIdCause());
		$q->execute();
	}
	public static function delete(CausesLiees $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE FROM Causesliees WHERE idCausesLiees=" .$obj->getIdCausesLiees());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * FROM Causesliees WHERE idCausesLiees =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new CausesLiees($results);
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
		$q = $db->query("SELECT * FROM Causesliees");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new CausesLiees($donnees);
			}
		}
		return $liste;
	}
}
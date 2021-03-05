<?php

class OutilsCaisseUtilisesManager 
{
	public static function add(OutilsCaisseUtilises $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_outilscaisseutilises (idActivite,idOutilCaisse,quantiteOutilsCaisse) VALUES (:idActivite,:idOutilCaisse,:quantiteOutilsCaisse)");
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idOutilCaisse", $obj->getIdOutilCaisse());
		$q->bindValue(":quantiteOutilsCaisse", $obj->getQuantiteOutilsCaisse());
		$q->execute();
	}

	public static function update(OutilsCaisseUtilises $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_outilscaisseutilises SET idOutilsCaisseUtilises=:idOutilsCaisseUtilises,idActivite=:idActivite,idOutilCaisse=:idOutilCaisse,quantiteOutilsCaisse=:quantiteOutilsCaisse WHERE idOutilsCaisseUtilises=:idOutilsCaisseUtilises");
		$q->bindValue(":idOutilsCaisseUtilises", $obj->getIdOutilsCaisseUtilises());
		$q->bindValue(":idActivite", $obj->getIdActivite());
		$q->bindValue(":idOutilCaisse", $obj->getIdOutilCaisse());
		$q->bindValue(":quantiteOutilsCaisse", $obj->getQuantiteOutilsCaisse());
		$q->execute();
	}
	public static function delete(OutilsCaisseUtilises $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_outilscaisseutilises WHERE idOutilsCaisseUtilises=" .$obj->getIdOutilsCaisseUtilises());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_outilscaisseutilises WHERE idOutilsCaisseUtilises =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new OutilsCaisseUtilises($results);
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
		$q = $db->query("SELECT * from amb_outilscaisseutilises");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new OutilsCaisseUtilises($donnees);
			}
		}
		return $liste;
	}
}
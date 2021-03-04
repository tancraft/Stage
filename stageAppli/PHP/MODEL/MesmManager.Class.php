<?php

class MesmManager 
{
	public static function add(Mesm $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_Mesm (numeroMesm,libelleMesm,idBlocComp) VALUES (:numeroMesm,:libelleMesm,:idBlocComp)");
		$q->bindValue(":numeroMesm", $obj->getNumeroMesm());
		$q->bindValue(":libelleMesm", $obj->getLibelleMesm());
		$q->bindValue(":idBlocComp", $obj->getIdBlocComp());
		$q->execute();
	}

	public static function update(Mesm $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_Mesm SET idMesm=:idMesm,numeroMesm=:numeroMesm,libelleMesm=:libelleMesm,idBlocComp=:idBlocComp WHERE idMesm=:idMesm");
		$q->bindValue(":idMesm", $obj->getIdMesm());
		$q->bindValue(":numeroMesm", $obj->getNumeroMesm());
		$q->bindValue(":libelleMesm", $obj->getLibelleMesm());
		$q->bindValue(":idBlocComp", $obj->getIdBlocComp());
		$q->execute();
	}
	public static function delete(Mesm $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_Mesm WHERE idMesm=" .$obj->getIdMesm());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_Mesm WHERE idMesm =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Mesm($results);
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
		$q = $db->query("SELECT * from amb_Mesm");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Mesm($donnees);
			}
		}
		return $liste;
	}
}
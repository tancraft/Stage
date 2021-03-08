<?php

class OffresFormateursManager 
{
	public static function add(OffresFormateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_offresformateurs (matriculeFormateur,typeContrat,dateDebutContrat,dateFinContrat,idOffre,numeroOffre,dateDebutOffre,dateFinOffre) VALUES (:matriculeFormateur,:typeContrat,:dateDebutContrat,:dateFinContrat,:idOffre,:numeroOffre,:dateDebutOffre,:dateFinOffre)");
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

	public static function update(OffresFormateurs $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_offresformateurs SET idUser=:idUser,matriculeFormateur=:matriculeFormateur,typeContrat=:typeContrat,dateDebutContrat=:dateDebutContrat,dateFinContrat=:dateFinContrat,idOffre=:idOffre,numeroOffre=:numeroOffre,dateDebutOffre=:dateDebutOffre,dateFinOffre=:dateFinOffre WHERE idUser=:idUser");
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
	public static function delete(OffresFormateurs $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_offresformateurs WHERE idUser=" .$obj->getIdUser());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_offresformateurs WHERE idUser =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new OffresFormateurs($results);
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
		$q = $db->query("SELECT * from amb_offresformateurs");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new OffresFormateurs($donnees);
			}
		}
		return $liste;
	}

	public static function getOffreByFormateur($idFormateur)
    {
        $db = DbConnect::getDb();
        $liste = [];
        $idFormateur = (int) $idFormateur;
        $q = $db->query("SELECT DISTINCT idOffre FROM amb_offresformateurs WHERE idUser = ".$idFormateur );
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = AnimationManager::findById($donnees['idOffre']);
            }
        }
        return $liste;
    }
	public static function getFormateurByOffre($idOffre)
    {
        $db = DbConnect::getDb();
        $liste = [];
        $idOffre = (int) $idOffre;
        $q = $db->query("SELECT DISTINCT idUser FROM amb_offresformateurs WHERE idOffre = ".$idOffre );
        while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
        {
            if ($donnees != false)
            {
                $liste[] = AnimationManager::findById($donnees['idUser']);
            }
        }
        return $liste;
    }

}
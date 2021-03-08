<?php

class AnimationManager 
{
	public static function add(Animation $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("INSERT INTO amb_animation (idOffre,idUser) VALUES (:idOffre,:idUser)");
		$q->bindValue(":idOffre", $obj->getIdOffre());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}

	public static function update(Animation $obj)
	{
 		$db=DbConnect::getDb();
		$q=$db->prepare("UPDATE amb_animation SET idAnimation=:idAnimation,idOffre=:idOffre,idUser=:idUser WHERE idAnimation=:idAnimation");
		$q->bindValue(":idAnimation", $obj->getIdAnimation());
		$q->bindValue(":idOffre", $obj->getIdOffre());
		$q->bindValue(":idUser", $obj->getIdUser());
		$q->execute();
	}
	public static function delete(Animation $obj)
	{
 		$db=DbConnect::getDb();
		$db->exec("DELETE from amb_animation WHERE idAnimation=" .$obj->getIdAnimation());
	}
	public static function findById($id)
	{
 		$db=DbConnect::getDb();
		$id = (int) $id;
		$q=$db->query("SELECT * from amb_animation WHERE idAnimation =".$id);
		$results = $q->fetch(PDO::FETCH_ASSOC);
		if($results != false)
		{
			return new Animation($results);
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
		$q = $db->query("SELECT * from amb_animation");
		while($donnees = $q->fetch(PDO::FETCH_ASSOC))
		{
			if($donnees != false)
			{
				$liste[] = new Animation($donnees);
			}
		}
		return $liste;
	}

}
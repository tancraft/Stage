<?php

//Test OutilscaisseutilisesManager

echo "recherche id = 1" . "<br>";
$obj =OutilscaisseutilisesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Outilscaisseutilises(["idActivite" => "([value 1])", "idOutilCaisse" => "([value 2])", "quantiteOutilsCaisse" => "([value 3])"]);
var_dump(OutilscaisseutilisesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = OutilscaisseutilisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidActivite("[(Value)]");
OutilscaisseutilisesManager::update($obj);
$objUpdated = OutilscaisseutilisesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = OutilscaisseutilisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = OutilscaisseutilisesManager::findById(1);
OutilscaisseutilisesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = OutilscaisseutilisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>
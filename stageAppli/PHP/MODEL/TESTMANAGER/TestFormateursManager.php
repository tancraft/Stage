<?php

//Test FormateursManager

echo "recherche id = 1" . "<br>";
$obj =FormateursManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Formateurs(["matriculeFormateur" => "([value 1])", "typeContrat" => "([value 2])", "dateDebutContrat" => "([value 3])", "dateFinContrat" => "([value 4])"]);
var_dump(FormateursManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = FormateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setmatriculeFormateur("[(Value)]");
FormateursManager::update($obj);
$objUpdated = FormateursManager::findById(1);
echo "Liste des objets" . "<br>";
$array = FormateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = FormateursManager::findById(1);
FormateursManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = FormateursManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>
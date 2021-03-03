<?php

//Test MateriauxutilisesManager

echo "recherche id = 1" . "<br>";
$obj =MateriauxutilisesManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Materiauxutilises(["idActivite" => "([value 1])", "idMateriel" => "([value 2])", "quantiteMat" => "([value 3])"]);
var_dump(MateriauxutilisesManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = MateriauxutilisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setidActivite("[(Value)]");
MateriauxutilisesManager::update($obj);
$objUpdated = MateriauxutilisesManager::findById(1);
echo "Liste des objets" . "<br>";
$array = MateriauxutilisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = MateriauxutilisesManager::findById(1);
MateriauxutilisesManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = MateriauxutilisesManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>
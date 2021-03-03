<?php

//Test MesmManager

echo "recherche id = 1" . "<br>";
$obj =MesmManager::findById(1);
var_dump($obj);
echo $obj->toString();

echo "ajout de l'objet". "<br>";
$newObj = new Mesm(["numeroMesm" => "([value 1])", "libelleMesm" => "([value 2])", "idBlocComp" => "([value 3])"]);
var_dump(MesmManager::add($newObj));

echo "Liste des objets" . "<br>";
$array = MesmManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on met à jour l'id 1" . "<br>";
$obj->setnumeroMesm("[(Value)]");
MesmManager::update($obj);
$objUpdated = MesmManager::findById(1);
echo "Liste des objets" . "<br>";
$array = MesmManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

echo "on supprime un objet". "<br>";
$obj = MesmManager::findById(1);
MesmManager::delete($obj);
echo "Liste des objets" . "<br>";
$array = MesmManager::getList();
foreach ($array as $unObj)
{
	echo $unObj->toString() . "<br><br>";
}

?>
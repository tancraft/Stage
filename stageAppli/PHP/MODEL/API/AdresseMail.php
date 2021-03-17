<?php
// recuperer l'adresse mail envoyé par JS
// executer la methode Utilisateur ::FindByEmail 
// si il y a un objet=> reponse positive<?phpsinon false

$email=$_POST["emailUser"];
echo json_encode(UtilisateursManager::getByEmail($email));

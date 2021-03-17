<?php

$email=$_POST["emailUser"];
//echo json_encode(UtilisateursManager::getByEmail($email, true));
if (UtilisateursManager::getByEmail($email, true)){
    echo json_encode(["reponse"=>true]);
}
else{
    echo json_encode(["reponse"=>false]);
}
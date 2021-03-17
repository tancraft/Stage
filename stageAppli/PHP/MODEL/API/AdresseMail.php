<?php

$email=$_POST["emailUser"];
//formater la reponse pour avoir un json correct
if (UtilisateursManager::getByEmail($email, true)){
    echo json_encode(["reponse"=>true]);
}
else{
    echo json_encode(["reponse"=>false]);
}
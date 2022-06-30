<?php

include_once(__DIR__."/../config/conectar.php");

try {
    $queryListSystems = $pdo->prepare("SELECT * FROM sistemas");

    $queryListSystems->execute(); 
    
    $resultListSystem = $queryListSystems->fetchAll(PDO::FETCH_ASSOC);
    
}
catch (PDOException $pdoEx) {
    echo "Erro ao buscar sistemas";
    //throw $pdoEx;
}


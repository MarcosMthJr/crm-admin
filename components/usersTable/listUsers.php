<?php

include_once(__DIR__."/../../config/conectar.php");

try {
    $queryListUsers = $pdo->prepare("SELECT * FROM users");

    $queryListUsers->execute(); 
    
    $resultListUsers = $queryListUsers->fetchAll(PDO::FETCH_ASSOC);
    
}
catch (PDOException $pdoEx) {
    echo "Erro ao buscar sistemas";
    //throw $pdoEx;
}


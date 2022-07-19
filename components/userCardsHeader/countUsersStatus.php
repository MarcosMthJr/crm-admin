<?php
include_once(__DIR__."/../../config/conectar.php");

try {
    /**
     * Contando o numero de sistemas ativos
     */
    $queryCountActive = $pdo->prepare("SELECT COUNT(id) as active FROM users WHERE status = 1");

    $queryCountActive->execute(); 
    
    $resultActive = $queryCountActive->fetch(PDO::FETCH_ASSOC);

    $active = $resultActive['active'];
     /**
     * Contando o numero de sistemas inativos
     */
    
    $queryCountInactive = $pdo->prepare("SELECT COUNT(id) as inactive FROM users WHERE status = 2");

    $queryCountInactive->execute(); 
    
    $resultInactive = $queryCountInactive->fetch(PDO::FETCH_ASSOC);

    $inactive = $resultInactive['inactive'];

}
catch (PDOException $pdoEx) {
    echo "Erro ao buscar sistemas";
    //throw $pdoEx;
}


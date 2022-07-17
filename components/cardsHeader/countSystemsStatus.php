<?php
include_once(__DIR__."/../../config/conectar.php");

try {
    /**
     * Contando o numero de sistemas ativos
     */
    $queryCountActiveSystems = $pdo->prepare("SELECT COUNT(id) as activeSystems FROM sistemas WHERE ativo = 1");

    $queryCountActiveSystems->execute(); 
    
    $resultActiveSystems = $queryCountActiveSystems->fetch(PDO::FETCH_ASSOC);

    $activeSystems = $resultActiveSystems['activeSystems'];

     /**
     * Contando o numero de sistemas inativos
     */
    
    $queryCountInactiveSystems = $pdo->prepare("SELECT COUNT(id) as inactiveSystems FROM sistemas WHERE ativo = 0");

    $queryCountInactiveSystems->execute(); 
    
    $resultInactiveSystems = $queryCountInactiveSystems->fetch(PDO::FETCH_ASSOC);

    $inactiveSystems = $resultInactiveSystems['inactiveSystems'];

}
catch (PDOException $pdoEx) {
    echo "$pdoEx <br> - Erro ao buscar sistemas";
    //throw $pdoEx;
}


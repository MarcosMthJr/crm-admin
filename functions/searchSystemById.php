<?php
include_once(__DIR__ . "/validations.php");

function searchSystemById($systemId)
{
    include_once(__DIR__ . "/../config/conectar.php");

    try {
        //  $idInUrl = htmlspecialchars($_GET["id"]);

        $idRequested = checkIfItWasDeclared($systemId);
        if ($idRequested) {
            $querySearchSystemsById = $pdo->prepare("SELECT * FROM sistemas WHERE id = :id");

            $querySearchSystemsById->bindParam('id', $idRequested);

            $querySearchSystemsById->execute();

            $searchResult = $querySearchSystemsById->fetch(PDO::FETCH_ASSOC);

            if (!$querySearchSystemsById->rowCount()) {
                $searchResult['status'] = "404";
                return $searchResult;
            }
            $searchResult['status'] = "1";

            return $searchResult;
        } else {
            $searchResult['status'] = "400";
            return $searchResult;
        }
    } catch (PDOException $pdoEx) {
        $searchResult['status'] = "500";
        return $searchResult;
        //throw $pdoEx;
    }
}

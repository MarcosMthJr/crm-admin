<?php
$statusCode = 0;
function basicInsert($connection, $table, $data)
{
    try {
        $insertQuery = "INSERT INTO $table (";

        $i = 0;
        foreach ($data as $key => $value) {
            $i = $i + 1;
            if ($i < count($data)) {
                $insertQuery .= " `$key`,";
            } else {
                $insertQuery .= " `$key` ";
                break;
            }
        }

        $insertQuery .= ") VALUES ( ";

        $i = 0;
        foreach ($data as $key => $value) {
            $i = $i + 1;
            if ($i < count($data)) {
                $insertQuery .= " :$key,";
            } else {
                $insertQuery .= " :$key ";
                break;
            }
        }

        $insertQuery .= ")";

        $stmt = $connection->prepare($insertQuery);

        if ($stmt->execute($data) === false) {
            //print_r($stmt->errorInfo());

            $statusCode = 500;
            return $statusCode;
        }

        $statusCode = 200;
        return $statusCode;
    } catch (PDOException $pdoEx) {

        $statusCode = 500;
        return $statusCode;
        //throw $pdoEx;
    }
}

function basicUpdate($connection, $table, $data)
{
    try {
        $updateQuery = "UPDATE $table SET ";
        $i = 1;
        foreach ($data as $key => $value) {
            $i = $i + 1;
            if ($i < count($data)) {
                $updateQuery .= " `$key` = :$key,";
            } else {
                $updateQuery .= " `$key` = :$key ";
                break;
            }
        }

        $updateQuery .= "WHERE `id` = :id";

        $stmt = $connection->prepare($updateQuery);

        if ($stmt->execute($data) === false) {
            print_r($stmt->errorInfo());

            $statusCode = 500;
            return $statusCode;
        }
        $statusCode = 200;
        return $statusCode;
    } catch (PDOException $pdoEx) {
        $statusCode = 500;
        return $statusCode;
        //throw $pdoEx;
    }
}

function deleteByCondition($connection, $table, $condition, $conditionValueMatch)
{
    try {
        $sql = "DELETE FROM $table WHERE $condition";

        $stmt = $connection->prepare($sql);

        if ($stmt->execute([$conditionValueMatch])) {
            //print_r($stmt->errorInfo());
            $statusCode = 500;
            return  $statusCode;
        }


        $statusCode = 200;
        return  $statusCode;
    } catch (PDOException $pdoEx) {

        $statusCode = 500;
        return  $statusCode;
        //throw $pdoEx;
    }
}

function selectByCondition($connection, $table, $condition, $conditionValueMatch)
{

    try {
        $sql = $connection->prepare("SELECT * FROM `$table` WHERE $condition ");

        if (is_array($conditionValueMatch)) {
            $i = 0;
            foreach ($conditionValueMatch as $key => $value) {
                $i = $i + 1; 
                $sql->bindParam($i, $conditionValueMatch["$key"]);
            }
            $sql->execute();
        } else {
            $sql->execute([$conditionValueMatch]);
        }

        $result = $sql->fetchAll(PDO::FETCH_ASSOC);
     
        if (count($result) > 0) {
            return $result;
        }

        $statusCode = 404;
        return $statusCode;
    } catch (PDOException $pdoEx) {
        $statusCode = 500;
        return $statusCode;
        //throw $pdoEx;
    }
}

<?php


include_once(__DIR__ . "/../../config/conectar.php");

include_once(__DIR__ . "/../../functions/validations.php");
include_once(__DIR__ . "/../../functions/helpers.php");

include_once(__DIR__ . "/../../functions/dmlFuntions.php");

$fieldValidations =
    [
        "login" => [
            "field_name" => "Login",
            "required" => true,
            "minimum_size" => 4,
        ],
        "password" => [
            "field_name" => "Senha",
            "required" => true,
            "minimum_size" => 8,
        ],
    ];

//recebendo dados validados    
$data = doesCombinedValidationAndReturnValues($fieldValidations, $_POST);

$foundUser = selectByCondition($pdo, "users", "`login`= ? and `password` = ? ", $data);


if ($foundUser === 404 || $foundUser === 500) {
    if ($foundUser === 404) {
        http_response_code(400);
        $response = [
            "title" => "Falha ao realizar login!",
            "message" => "Falha ao localizar usuário, verifique os dados digitados e tente novamente"
        ];
        echo json_encode($response);
        exit;
    } else {
        http_response_code(500);
        $response = [
            "title" => "Falha ao realizar login!",
            "message" => "Falha no login"
        ];
        echo json_encode($response);
        exit;
    }
} else {
    if(isset($foundUser[0]["id"])){
        if (!isset($_SESSION)) session_start();
        $_SESSION['userId'] = $foundUser[0]["id"];
        $_SESSION['userName'] = $foundUser[0]["name"];
        $_SESSION['userAccessLevel'] = $foundUser[0]["level"];
        header("Location: /pages/mainPage");
        exit;
    }

    exit;
}





if (!isset($_SESSION)) session_start();

<?php
include_once(__DIR__ . "/../../config/conectar.php");

include_once(__DIR__ . "/../../functions/validations.php");
include_once(__DIR__ . "/../../functions/helpers.php");

include_once(__DIR__."/../../functions/dmlFuntions.php");

$fieldValidations =
    [
        "name" => [
            "field_name" => "Nome",
            "required" => true,
            "minimum_size" => 3,
        ],
        "email" => [
            "field_name" => "E-mail",
            "required" => true,
            "minimum_size" => 8,
            "is_email" => true,
        ],
        "login" =>  [
            "field_name" => "Login",
            "required" => true,
            "minimum_size" => 4,
        ],
        "password" => [
            "field_name" => "Senha",
            "required" => true,
            "minimum_size" => 8,
        ],
        "status" => [
            "field_name" => "Status",
            "required" => true,
            "maximum_size" => 1,
        ],
        "level" => [
            "field_name" => "Nível de acesso",
            "required" => true,
            "maximum_size" => 1,
        ],
        "id"=>[]
    ];

//recebendo dados validados    
$data = doesCombinedValidationAndReturnValues($fieldValidations, $_POST);

$response = basicUpdate($pdo, "users", $data);

if($response === 200){
    http_response_code(200);
    $response = [
        "title" => "Sucesso!",
        "message" => "Dados Alterados com sucesso!",
        "redirect" => "/pages/userTable/",
    ];
    echo json_encode($response);
    exit;
}else{
    http_response_code(500);
    $response = [
        "title" => "O processo falhou",
        "message" => "Falha ao alterar dados!"
    ];
    echo json_encode($response);
    exit;
}
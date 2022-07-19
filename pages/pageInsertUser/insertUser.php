<?php
include_once(__DIR__ . "/../../functions/checkIfYouAreloggedIn.php");

include_once(__DIR__ . "/../../config/conectar.php");

include_once(__DIR__ . "/../../functions/validations.php");
include_once(__DIR__ . "/../../functions/helpers.php");

include_once(__DIR__ . "/../../functions/dmlFuntions.php");
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
        ]
    ];

//recebendo dados validados    
$data = doesCombinedValidationAndReturnValues($fieldValidations, $_POST);

$foundUserInTheBank = selectByCondition($pdo, "users", " `login`= ? or `email`= ?", [$data['login'], $data['email']]);

if ($foundUserInTheBank === 404) {
    $response = basicInsert($pdo, "users", $data);

    if ($response === 200) {
        http_response_code(200);
        $response = [
            "title" => "Sucesso!",
            "message" => "Usuário cadastrado com sucesso!",
            "redirect" => "/pages/userTable/"
        ];
        echo json_encode($response);
        exit;
    } else {
        http_response_code(500);
        $response = [
            "title" => "O processo falhou",
            "message" => "Falha ao cadastrar o usuário!"
        ];
        echo json_encode($response);
        exit;
    }
} else {
    http_response_code(400);
    $response = [
        "title" => "Falha ao inserir registro!",
        "message" => "O E-mail ou o Login informado já está cadastrado!"
    ];
    echo json_encode($response);
    exit;
}

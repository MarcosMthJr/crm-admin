<?php
include_once(__DIR__ . "/../../functions/validations.php");
include_once(__DIR__ . "/../../functions/helpers.php");

$fieldValidations =
    [
        "corporate_name" => [
            "field_name" => "Razão Social",
            "required" => true,
            "minimum_size" => 8,
        ],
        "fantasy_name" => [
            "field_name" => "Nome Fantasia",
            "required" => true,
            "minimum_size" => 8,
        ],
        "cnpj" => [
            "field_name" => "CNPJ",
            "required" => true,
            "return_only_numbers" => true,
            "minimum_size" => 14,
            "maximum_size" => 14,
        ],
        "contact_name" =>  [
            "field_name" => "Nome do contato",
            "required" => true,
            "minimum_size" => 6,
        ],
        "email" =>  [
            "field_name" => "E-Mail",
            "required" => true,
            "minimum_size" => 6,
            "is_email" => true,
        ],
        "phone_number" => [
            "field_name" => "Telefone de contato",
            "required" => true,
            "minimum_size" => 9,
            "return_only_numbers" => true,
        ],
        "url" => [
            "field_name" => "URL",
            "required" => true,
            "minimum_size" => 5,
        ],
        "database" => [
            "field_name" => "Banco de dados",
            "required" => true,
            "minimum_size" => 6,
        ],
        "database_user" => [
            "field_name" => "Usuário do banco de dados",
            "required" => true,
            "minimum_size" => 4,
        ],
        "database_password" => [
            "field_name" => "Senha do usuário do banco de dados",
            "required" => true,
            "minimum_size" => 6,
        ],
        "system_status" => [
            "field_name" => "Status do sistema",
            "required" => true,
            "maximum_size" => 1,
        ],
        "redirect" => [
            "field_name" => "Redirecionar para",
            "required" => false,
            "minimun_size" => 8,
        ],
        "force_https" => [
            "field_name" => "Redirecionar para",
            "required" => false,
            "minimun_size" => 8,
        ],
    ];

    $data = doesCombinedValidationAndReturnValues($fieldValidations, $_POST);


    
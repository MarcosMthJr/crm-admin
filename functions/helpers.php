<?php
function returnRefusedValidationMessage($fieldName, $validationRefused, $httpStatusCode)
{
    http_response_code($httpStatusCode);

    $response =
        [
            "title" => "Erro ao preencher campo",
            "message" => "Por favor, preencha o campo ".utf8_encode($fieldName)." corretamente.",
            "field_name" => $validationRefused,
        ];

    $response = json_encode($response);

    echo $response;
}   

function returnOnlyNumbers($string){
    $onlyNumbers = preg_replace('/[^0-9]/', '', $string);
    return $onlyNumbers;
 }


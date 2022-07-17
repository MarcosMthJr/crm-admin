<?php
function returnRefusedValidationMessage($fieldName, $validationRefused, $httpStatusCode)
{
    http_response_code($httpStatusCode);

    $response =
        [
            "field_name" => utf8_encode($fieldName),
            "validation_refused" => $validationRefused
        ];

    $response = json_encode($response);

    echo $response;
}   

function returnOnlyNumbers($string){
    $onlyNumbers = preg_replace('/[^0-9]/', '', $string);
    return $onlyNumbers;
 }


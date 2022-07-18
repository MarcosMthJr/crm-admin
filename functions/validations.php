<?php
include_once(__DIR__ . "/helpers.php");

//combined validation

function doesCombinedValidationAndReturnValues($fieldValidations, $formValues)
{
    foreach ($fieldValidations as $fieldValidationsKey => $fieldValidation) {
        if (
            array_key_exists("return_only_numbers", $fieldValidation)
            && $fieldValidation["return_only_numbers"] === true
        ) {
            $formValues["$fieldValidationsKey"] = returnOnlyNumbers($formValues["$fieldValidationsKey"]);
        }
        foreach ($fieldValidation as $fieldValidationkey => $validationValue) {
            switch ($fieldValidationkey) {
                case 'required':
                    if ($validationValue === true) {
                        if (!checkIfItWasDeclared($formValues["$fieldValidationsKey"])) {
                            returnRefusedValidationMessage(
                                $fieldValidation["field_name"],
                                $fieldValidationkey,
                                400
                            );
                            exit;
                        }
                    }
                    break;
                case 'minimum_size':
                    if (!CheckFieldSize($formValues["$fieldValidationsKey"], $validationValue)) {
                        returnRefusedValidationMessage(
                            $fieldValidation["field_name"],
                            $fieldValidationkey,
                            400
                        );
                        exit;
                    }
                    break;
                case 'maximum_size':
                    if (!CheckFieldSize($formValues["$fieldValidationsKey"], false, $validationValue)) {
                        returnRefusedValidationMessage(
                            $fieldValidation["field_name"],
                            $fieldValidationkey,
                            400
                        );
                        exit;
                    }
                    break;
                case 'is_email':
                    if (!CheckIsValidemail($formValues["$fieldValidationsKey"])) {
                        returnRefusedValidationMessage(
                            $fieldValidation["field_name"],
                            $fieldValidationkey,
                            400
                        );
                        exit;
                    }
                    break;
            }
            
        }
        $data["$fieldValidationsKey"] = $formValues["$fieldValidationsKey"];
    }
    return $data;
}


//separate validations 

function checkIfItWasDeclared($formValue)
{
    if (isset($formValue) and !empty($formValue) and $formValue != "0") {
        return $formValue;
    }
    return false;
}


function CheckIsValidemail($emailValue)
{
    if (filter_var($emailValue, FILTER_VALIDATE_EMAIL)) {
        return  true;
    }
    return false;
}


function CheckFieldSize($fieldValue, $minimumSize = false, $maximumSize = false)
{
    if ($minimumSize !== false) {
        if (strlen($fieldValue) >= $minimumSize) {
            return true;
        }
        return false;
    }

    if ($maximumSize !== false) {
        if (strlen($fieldValue) <= $maximumSize) {
            return true;
        }
        return false;
    }
}

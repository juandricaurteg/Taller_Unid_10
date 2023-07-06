<?php
 $numberOne=0;
 $numberTwo=0;
 $operationType="S";
$message="";

$totalResult = 0;

if (
    isset($_POST["number_one"]) &&
    isset($_POST["number_two"]) &&
    isset($_POST["operation_type"])
) {

    $numberOne = intval($_POST["number_one"]);
    $numberTwo = intval($_POST["number_two"]);
    $operationType = $_POST["operation_type"];


  
    switch ($operationType) {
        case "S":
            $totalResult  = $numberOne +  $numberTwo;

            break;
        case "R":
            $totalResult  = $numberOne -  $numberTwo;
            
            break;
        case "M":
            $totalResult  = $numberOne *  $numberTwo;
            
            break;
        case "D":
            $totalResult  = $numberOne /  $numberTwo;
           
            break;
        default:
       $message="Ha elegido una opcion invalida";
 
    }
}

function typeOperation($type){
    switch ($type) {
        case "S":
            $typeOperation  =" Sumado ";

            break;
        case "R":
            $typeOperation  =" Restado ";
            
            break;
        case "M":
            $typeOperation  =" Mutipliacado ";
            
            break;
        case "D":
            $typeOperation  =" Dividido ";
           
            break;
        default:
       $message="Ha elegido una opcion invalida";
 
    }
    return $typeOperation;
}


?>



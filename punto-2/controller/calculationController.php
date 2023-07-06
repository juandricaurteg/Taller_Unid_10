<?php
 

//function calculationAge($number){
    $number=0;

$ageResult = "";

    if (
        isset($_POST["number"]) 
        ) {

            
        $number = intval($_POST["number"]);

        if($number<18 && $number>0){

            $ageResult="Menor de edad.";

        }elseif($number>=18 ){
            $ageResult="Mayor de edad.";
        }



   
    }

  //  return $ageResult;

//}


?>
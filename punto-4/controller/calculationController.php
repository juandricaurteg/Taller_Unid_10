<?php

$result="";
$message="";
$age="";

if(isset($_POST["age"])){

    $age=$_POST["age"];
   
    }

    $dateUser= new DateTime($age);
    $currenDate= new DateTime(date("Y/m/d"));

    $diff = $dateUser->diff($currenDate);
 
    $result=intval(($diff->days/365));

    if($result>0 && $result<18){
        $message=" No es mayor de edad ";
    }elseif($result>=18 ){
        $message=" Es mayor de edad ";
    }

    
       /* "la fecha ingresada es: ". $age.
     " y su edad es ".$result." por tanto usted: ".$message;*/

      if($age==""){

        $mess="";

      }elseif($result<=0 ){

        $mess = "Actualmente tienes ".$result." años, Lo siento...";
       

     }elseif($result>=1){
        $mess ="la fecha ingresada es: ". $age." y su edad es ".$result." años por tanto usted: ".$message;
     }
     
    

?>


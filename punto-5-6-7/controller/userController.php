<?php

include "./service/userDAO.php";
include "./model/users.php";
function getUsers(){
    $userrQuer = getAllUsers();

    $usersList = array();
    while($row= mysqli_fetch_assoc($userrQuery)){
        $user= new User(
            $row["id"],
            $row["nombre"],
            $row["apellido"],
            $row["cedula"],
        );

        $usersList[]=$user;

    }
    return $usersList;
}


?>
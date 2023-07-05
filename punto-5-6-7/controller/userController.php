<?php

include "./service/userDAO.php";
include "./model/users.php";
function getUsers(){
    $userQuery = getAllUsers();

    $usersList = array();
    while($row = mysqli_fetch_assoc($userQuery)){
        $user= new Users(
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
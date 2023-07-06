<?php include "./controller/userController.php"?>

<table class="table__container">
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cedula</th>
    </tr>
    
    <?php?>

    <?php 
    
    $users=getUsers();
        
    foreach ($users as $user){   
    
    ?>
    <tr>
        <td> <?php  echo $user->getId();?></td>
        <td> <?php  echo $user->getName();?></td>
        <td> <?php  echo $user->getLastName();?></td>
        <td> <?php  echo $user->getIdNumber();?></td>
    </tr>

    <?php }?>

    

</table>
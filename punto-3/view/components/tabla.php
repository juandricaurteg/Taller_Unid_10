<div>
    <table class="table-container">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Número de Cedula</th>
        </tr>

        <?php 
       

            
        $name=$_GET["name"];
        $lastName=$_GET["last_name"];
        $cardIdentification=$_GET["card_identification"];
        
        if( $name=="" ||   $lastName=="" || $cardIdentification==""){
            echo '<script language="javascript">alert("No puedes dejar casillas vacias");
            window.history.back();</script>';
        }

         ?>

        <tr>

        <td><?php echo  $name ?></td>
        <td><?php echo  $lastName   ?></td>
        <td><?php echo $cardIdentification   ?></td>
        </tr>

          
        
       
    </table>
</div>
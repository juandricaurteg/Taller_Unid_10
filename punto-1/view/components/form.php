 <?php include "./controller/calculationController.php"?>

<form 
    
    method="post">
    <h2>Calcular Operaciones basicas</h2>

    <div class="form__row">
        <div>
            <label for="number-one">Ingrese primer numero:</label>
            <input 
            id="number-one"
            type="text"
            name="number_one"
            placeholder="0">
            
        </div>

        <div class="form__row">
        <div>
            <label for="number-two">Ingrese segundo numero:</label>
            <input 
            id="number-two"
            type="text"
            name="number_two"
            placeholder="0">
            
        </div>

        <div>
        <label for="operation-type">Tipo de Operación</label>
            <select 
            id="operation-type"
            name="operation_type"
            placeholder="S">
        
        <option value="S">Sumar</option>
        <option value="R">Restar</option>
        <option value="M">Multiplicar</option>
        <option value="D">Dividir</option>


       
        </select>
        </div> 

    </div>
    <button>Realizar Operación</button>
   <p><a href="../index.php">Regresar</a></p> 
    
</form>
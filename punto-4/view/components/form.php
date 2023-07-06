 <?php include "./controller/calculationController.php"?>

<form 
    
    method="post">
    <h2>Calcular segun su edad</h2>

    <div class="form__row">
        <div>
            <label for="age">Digite la edad:</label>
            <input 
            id="age"
            type="date"
            name="age">
            
        </div>

    </div>
    <button>Calcular</button>
    <p><a href="../index.php">Regresar</a></p>
</form>
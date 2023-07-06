

<form 
    action="./view/pages/table-result.php"
    method="get">
    <h2>Mostrar datos de Usuario Mediante el Metodo Get</h2>

    <div class="form__row">
        <div>
            <label for="name">Digite su Nombre:</label>
            <input 
            id="name"
            type="text"
            name="name"
            placeholder="Diego">
            
        </div>

       

    </div>

    <div class="form__row">
        <div>
            <label for="last-name">Digite su Apellido:</label>
            <input 
            id="last-ame"
            type="text"
            name="last_name"
            placeholder="Rodriguez">
            
        </div>

       

    </div>
    <div class="form__row">
        <div>
            <label for="card-identification ">Digite su Numero de cedula:</label>
            <input 
            id="card-identification"
            type="text"
            name="card_identification"
            placeholder="1.123.123">
            
        </div>


    </div>
    <button>Enviar Datos</button>
    <p><a href="../index.html">Regresar</a></p>
</form>
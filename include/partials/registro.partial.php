<section class="seccionPrincipal">

    <h2 class="seccionBienvenida">Registre</h2>
    <form class="registro" id=   form method="post" action="./include/procesaRegistro.php">
        <label for="nombre">Nombre: <span>*</span></label>
        <input type="text" id="name" name="nombre" required>

        <label for="apellido">Apellidos:</label>
        <input type="text" id="surname" name="apellido">

        <label for="direccion">Dirección:</label>
        <input type="text" id="address" name="direccion">

        <label for="correo">Correu Electrònic: <span>*</span></label>
        <input type="email" id="email" name="correo" required>

        <label for="password">Contrasenya:</label>
        <input type="password" id="password" name="password">

        <label for="poblacion">Població:</label>
        <select id="city" name="poblacion">
            <option value="">Tria una població...</option>
            <option value="xativa">Xátiva</option>
            <option value="genoves">Genovés</option>
            <option value="novetle">Novetlè</option>
            <option value="losaRanes">La Llosa de Ranes</option>
        </select>

        <label for="tel">Telefono:</label>
        <input type="tel" id="phone" name="tel">

        <fieldset>
            <legend>Horari repartiment:</legend>
            <label>
                <input type="radio" name="horaRepar" value="mati"> Matí
            </label>
            <label>
                <input type="radio" name="horaRepar" value="vesprada"> Vesprada
            </label>
        </fieldset>

<fieldset>
    <legend>Estilos registro:</legend>
    <label>
        <input type="radio" name="estiloRegistro" value="morado" id="morado">
        <span>Morado</span>
    </label>
    <label>
        <input type="radio" name="estiloRegistro" value="amarillo" id="amarillo">
        <span>Amarillo</span>
    </label>
</fieldset>

<input type="checkbox" name="frutas[]" value="manzana" >Manzana<br>
<input type="checkbox" name="frutas[]" value="naranja" >Naranja<br>
<input type="checkbox" name="frutas[]" value="melon" >Melon<br>
<input type="checkbox" name="frutas[]" value="banana" >Banana<br>
<input type="checkbox" name="frutas[]" value="caqui" >Caqui<br>
<input type="checkbox" name="frutas[]" value="uva" >Uva<br>



<label for="number">Puntuar del 1-5:</label>
<input type="number" class="form-control" name="puntuacion" value="0" min="1" max="5" id="numero">
<input type="range" min="1" max="100" value="1" id="slider" name="multiplicador">


        <div class="form-buttons">
            <button type="submit">Envia</button>
            <button type="reset">Neteja</button>
        </div>

        

    </form>
</section>
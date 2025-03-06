<section class="seccionPrincipal">

    <h2 class="seccionBienvenida">Registro</h2>
    <form class="registro" id="registros" form method="post" action="./include/procesaRegistro.php">
        <div class="campo">
            <label for="nombre">Nombre: <span class="importante">*</span></label>
            <input type="text" id="name" name="nombre" pattern="[^:]*" required>
        </div>
        <div class="campo">
            <label for="apellido">Apellidos:</label>
            <input type="text" id="surname" name="apellido">
        </div>
        <div class="campo">
            <label for="direccion">Dirección:</label>
            <input type="text" id="address" name="direccion">
        </div>
        <div class="campo">
            <label for="correo">Correu Electrònic: <span class="importante">*</span></label>
            <input type="email" id="email" name="correo" pattern="[^:]*" required>
        </div>
        <div class="campo">
            <label for="password">Contrasenya: <span class="importante">*</span></label>
            <input type="password" id="password" name="password" pattern="[^:]*" required>
        </div>
        <div class="campo">
            <label for="password">Confirma la contrasenya: <span class="importante">*</span></label>
            <input type="password" id="password_confirm" name="password" pattern="[^:]*" required>
        </div>
            <?php
            if (isset($_GET['error'])) {
        echo "<p style='color: red;'>" . htmlspecialchars($_GET['error']) . "</p>";
    }
    ?>
        <div class="campo">
            <label for="poblacion">Població:</label>
            <select id="city" name="poblacion">
                <option value="">Tria una població...</option>
                <option value="xativa">Xátiva</option>
                <option value="genoves">Genovés</option>
                <option value="novetle">Novetlè</option>
                <option value="losaRanes">La Llosa de Ranes</option>
            </select>
        </div>
        <div class="campo">
            <label for="tel">Telefono:</label>
            <input type="tel" id="phone" name="tel">
        </div>
        <div class="campo">
            <fieldset>
                <legend>Horari repartiment:</legend>
                <label>
                    <input type="radio" name="horaRepar" value="mati"> Matí
                </label>
                <label>
                    <input type="radio" name="horaRepar" value="vesprada"> Vesprada
                </label>
            </fieldset>
        </div>

        <div class="campo">

            <input type="checkbox" name="frutas[]" value="manzana">Manzana<br>
            <input type="checkbox" name="frutas[]" value="naranja">Naranja<br>
            <input type="checkbox" name="frutas[]" value="melon">Melon<br>
            <input type="checkbox" name="frutas[]" value="banana">Banana<br>
            <input type="checkbox" name="frutas[]" value="caqui">Caqui<br>
            <input type="checkbox" name="frutas[]" value="uva">Uva<br>
        </div>
        <div class="campo">
            <label for="number">Puntuar del 1-5:</label>
            <input type="number" class="form-control" name="puntuacion" value="0" min="1" max="5" id="numero">
            <input type="range" min="1" max="100" value="1" id="slider" name="multiplicador">
        </div>
        <div class="campo">
            <div class="form-buttons">
                <button type="submit">Envia</button>
                <button type="reset">Neteja</button>
            </div>
        </div>


    </form>
</section>
<section class="main-section">
            <h2 class="section-title">Registre</h2>
            <form class="register-form" form method="post" action="./include/procesaRegistro.php">
                <label for="nombre">Nom: <span>*</span></label>
                <input type="text" id="name" name="nombre" required>

                <label for="apellido">Cognoms:</label>
                <input type="text" id="surname" name="apellido">

                <label for="direccion">Adreça:</label>
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

                <label for="tel">Telèfon:</label>
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

                <div class="form-buttons">
                    <button type="submit">Envia</button>
                    <button type="reset">Neteja</button>
                </div>
            </form>
        </section>
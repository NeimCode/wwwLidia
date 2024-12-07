<section class="main-section">
            <h2 class="section-title">Registre</h2>
            <form class="register-form" form method="post" action="processaFormulari.php">
                <label for="name">Nom: <span>*</span></label>
                <input type="text" id="name" name="name" required>

                <label for="surname">Cognoms:</label>
                <input type="text" id="surname" name="surname">

                <label for="address">Adreça:</label>
                <input type="text" id="address" name="address">

                <label for="email">Correu Electrònic: <span>*</span></label>
                <input type="email" id="email" name="email" required>

                <label for="password">Contrasenya:</label>
                <input type="password" id="password" name="password">

                <label for="city">Població:</label>
                <select id="city" name="city">
                    <option value="">Tria una població...</option>
                    <option value="valencia">València</option>
                    <option value="castello">Castelló</option>
                    <option value="alicante">Alacant</option>
                </select>

                <label for="phone">Telèfon:</label>
                <input type="tel" id="phone" name="phone">

                <fieldset>
                    <legend>Horari repartiment:</legend>
                    <label>
                        <input type="radio" name="schedule" value="mati"> Matí
                    </label>
                    <label>
                        <input type="radio" name="schedule" value="vesprada"> Vesprada
                    </label>
                </fieldset>

                <div class="form-buttons">
                    <button type="submit">Envia</button>
                    <button type="reset">Neteja</button>
                </div>
            </form>
        </section>
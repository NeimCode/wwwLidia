<h1>Contacte</h1>
        </div>
        <form action="./include/procesaContacto.php" method="post" class="register-form">
            <div class="campo">
                <label for="correo">Correu electrònic: <span>*</span></label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="campo">
                <label for="asunto">Assumpte: <span>*</span></label>
                <input type="text" id="asunto" name="asunto" required>
            </div>
            <div class="campo">
                <label for="mensaje">Missatge: <span>*</span></label>
                <textarea id="mensaje" name="mensaje" rows="5" required>Escriu ací el teu missatge</textarea>
            </div>
            <div class="botones">
                <button type="submit" class="btn enviar">Envia</button>
                <button type="reset" class="btn neteja">Neteja</button>
            </div>
        </form>
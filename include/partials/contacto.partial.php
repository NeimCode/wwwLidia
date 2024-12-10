<section class="seccionPrincipal">
<h2 class="seccionBienvenida">Contacto</h2>
        <form action="./include/procesaContacto.php" method="post" class="registro">
            <div class="campo">
                <label for="correo">Correo Electrónico: <span>*</span></label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="campo">
                <label for="asunto">Asunto: <span>*</span></label>
                <input type="text" id="asunto" name="asunto" required>
            </div>
            <div class="campo">
                <label for="mensaje">Mensaje: <span>*</span></label>
                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>
            <div class="botones">
                <button type="submit" class="btn enviar">Envia</button>
                <button type="reset" class="btn neteja">Neteja</button>
            </div>
        </form>
</section>
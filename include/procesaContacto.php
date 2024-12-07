
<h1>Contacte</h1>
<div class="campo">
    <p><strong>Correo electrónico:</strong></p>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['correo'])) {
            $correo = trim(htmlspecialchars($_POST['correo']));
            echo $correo;
        }
        ?>
</div>
<div class="campo">
    <p><strong>Asunto:</strong></p>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['asunto'])) {
            $asunto = trim(htmlspecialchars($_POST['asunto']));
            echo $asunto;
        }
        ?>
</div>
<div class="campo">
    <p><strong>Mensaje:</strong></p>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['mensaje'])) {
            $mensaje = trim(htmlspecialchars($_POST['mensaje']));
            echo $mensaje;
        }
        ?>
</div>

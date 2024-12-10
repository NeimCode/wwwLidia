<section class="registro" id="registros">
<h1>Contacte</h1>
<div class="campo">
    <p><strong>Correo electrónico:</strong></p>
    <?php
        echo $correo;
    ?>
</div>
<div class="campo">
    <p><strong>Asunto:</strong></p>
    <?php
        echo $asunto;
    ?>
</div>
<div class="campo">
    <p><strong>Mensaje:</strong></p>
    <?php
$explotado = explode(' ', $mensaje);
for ($i = 0; $i < count($explotado); $i++) { 
    if ($explotado[$i] == 'Fruita' || $explotado[$i] == 'Verdura') {
        echo '<span class="especial">' . $explotado[$i] . '</span>';
    } else if (strlen($explotado[$i]) >= 10) {
        echo '<span class="masDiez">' . $explotado[$i] . '</span>';

    } else if ($explotado[$i] == 'Gatos' || $explotado[$i] == 'gatos') {
        echo '<span class="gatos">' . $explotado[$i] . '</span>';

    } else {
        echo '<span class="elquesea">' . $explotado[$i] . '</span>';

    }
}
?>
</section>
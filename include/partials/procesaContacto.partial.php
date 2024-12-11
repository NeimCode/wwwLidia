<section class="seccionPrincipal">
<h2 class="seccionBienvenida">Contacto datos recibidos</h2>

<section class="registro">
<div class="campo">
    <p><strong>Correo electrónico:</strong>
    <?php
        echo "<span>" . $correo. "</span>";

    ?>
</div></p>
<div class="campo">
    <p><strong>Asunto:</strong>
    <?php
        echo "<span>" . $asunto. "</span>";

    ?></p>
</div>
<div class="campo">
    <p><strong>Mensaje:</strong>
    <?php
    echo "<ul>";

$explotado = explode(' ', $mensaje);
for ($i = 0; $i < count($explotado); $i++) { 
    if ($explotado[$i] == 'Fruita' || $explotado[$i] == 'Verdura') {
        echo '<li><span class="especial">' . $explotado[$i] . '</span></li>';
    } else if (strlen($explotado[$i]) >= 10) {
        echo '<li><span class="masDiez">' . $explotado[$i] . '</span></li>';

    } else if ($explotado[$i] == 'Gatos' || $explotado[$i] == 'gatos') {
        echo '<li><span class="gatos">' . $explotado[$i] . '</span></li>';

    } else {
        echo '<li><span class="elquesea">' . $explotado[$i] . '</span></li>';

    }
}
    echo '</ul>';

?></p>
</section>
</section>
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
        /* En processar el missatge de la pàgina de contacte, mostra en la pàgina de
processat una llista (<ul>) sense pics (list-style-type=none;) i inline-block
(display:inline-block;) en la que cada paraula del comentari és un element
dibuixat amb vores i colors de fons, i situats un al costat de l'altre. Cada paraula
pot estar en un <span> amb display:inline-block;.
Si alguna de les paraules és Fruita o Verdura (o algunes altres paraules que tu
decidisques, estiguen en majúscules o minúscules), mostra-les amb colors
diferents de la resta de paraules. Pots utilitzar classes en css distintes per
diferenciar la paraula clau de les demés. A més, si la paraula és igual o més
llarga de 10 caràcters, s'ha de mostrar amb el text de color blanc i el fons
negre.
Utilitza la funció explode() per tractar per separat les paraules del missatge
enviat. El separador és l'espai " ". */
        $explotado = explode(' ', $mensaje);
        for ($i=0; $i < count($explotado) ; $i++) { 
            echo $explotado[$i]; 
        }

}
    ?>
</div>
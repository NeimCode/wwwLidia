<h2 class="seccionBienvenida">Registro datos recibidos </h2>

<section class="registro">
    <p><strong>Nombre:</strong>
        <?php
        echo "<span>" . $nombre . "</span>";
        ?> </p>
    <p><strong>Apellidos:</strong>
        <?php
        echo "<span>" . $apellido . "</span>";
        ?> </p>
    <p><strong>Dirección:</strong>
        <?php
        echo "<span>" . $direccion . "</span>";
        ?> </p>
    <p><strong>Correo electrónico:</strong>
        <?php
        echo "<span>" . $correo . "</span>";
        ?> </p>
    <p><strong>Contraseña:</strong>
        <?php

        echo "<span>" . $password . "</span>";
        ?> </p>
    <p><strong>Población:</strong>
        <?php
        echo $poblacion; '</p>';
        switch ($poblacion) {
            case 'xativa':
                echo '<img src="../img/xativa.jpg" alt="xativa">';
                break;
            case 'genoves':
                echo '<img src="../img/genoves.jpg" alt="genoves">';
                break;
            case 'novetle':
                echo '<img src="../img/novetle.jpg" alt="novetle">';
                break;
            case 'LosaRanes':
                echo '<img src="../img/losaranes.jpg" alt="losaranes">';
                break;

            default:
            echo '<img src="../img/huh.webp" alt="??">';
                break;
        }

if ($poblacion != 'Sin Valor') {
    echo '<h1>Información de '. ($poblacion) . '</h1>';
    echo '<ul>';
    echo    '<li><strong>Habitants:</strong>' . $datosPoblacion['habitants'] .'</li>';
    echo    '<li><strong>Comarca:</strong>' . $datosPoblacion['comarca']. '</li>';
    echo    '<li><strong>Gentilici:</strong>'.$datosPoblacion['gentilici']. '</li>';
    echo    '<li><strong>Superfície geogràfica:</strong>'. $datosPoblacion['superficie'] . '</li>';
    echo '</ul>';
}
        ?>

    <p><strong>Telefono</strong>
    <?php
    echo "<span>" . $tel . "</span>";
    ?></p>
    <p><strong>Horario repartimiento:</strong>
        <?php
        echo "<span>" . $horaRepar . "</span>";
        ?></p>

<p><strong>Estilo usado:</strong>
        <?php
        echo "<span>" . $estiloRegistro . "</span>";
        ?></p>
        <p><Strong>Fruta preferida:</Strong>
        <?php
        if ($frutas == 'Sin Valor'){
            echo '<img src="../img/huh.webp" alt="??">';

        } else{
            $cantidadFruta = count($frutas);
            for ($i=0; $i < $cantidadFruta ; $i++) { 
                switch ($frutas[$i]) {
                    case 'manzana':
                        echo '<img src="../img/manzana.webp" alt="losaranes" class="gatito">';
                        break;
                    case 'banana':
                        echo '<img src="../img/banana.png" alt="losaranes" class="gatito">';
                        break;
                    case 'uva':
                        echo '<img src="../img/uva.png" alt="losaranes" class="gatito">';
                        break;
                    case 'caqui':
                        echo '<img src="../img/caqui.webp" alt="losaranes" class="gatito">';
                        break;
                    case 'melon':
                        echo '<img src="../img/melon.webp" alt="losaranes" class="gatito">';
                        break;
                    case 'naranja':
                        echo '<img src="../img/nranja.webp" alt="losaranes" class="gatito">';
                        break;
                    case 'Sin Valor':
                        echo '<img src="../img/nranja.webp" alt="losaranes" class="gatito">';
                        break;
                    default:
                    echo '<img src="../img/huh.webp" alt="??">';
                        break;
                }
            }
            echo '</p>';
        }
       

    ?>
    <p><strong>Puntuacion:</strong>
        <?php
                echo $puntuacion . "*" .$multiplicador;

        echo "<div class='img-container'>";
        switch ($puntuacion) {
            case 1:
                for ($i = 0; $i < $puntuacion * $multiplicador; $i++) {
                    echo '<img src="../img/gato1.png" alt="losaranes" class="gatito">';
                }
                break;
            case 2:
                for ($i = 0; $i < $puntuacion * $multiplicador; $i++) {
                    echo '<img src="../img/gato2.png" alt="losaranes" class="gatito">';
                }
                break;
            case 3:
                for ($i = 0; $i < $puntuacion * $multiplicador; $i++) {
                    echo '<img src="../img/gato3.png" alt="losaranes"  class="gatito">';
                }
                break;
            case 4:
                for ($i = 0; $i < $puntuacion * $multiplicador; $i++) {
                    echo '<img src="../img/gato4.png" alt="losaranes" class="gatito">';
                }
                break;
            case 5:
                for ($i = 0; $i < $puntuacion * $multiplicador; $i++) {
                    echo '<img src="../img/gato5.png" alt="losaranes" class="gatito">';
                }
                break;
            default:
                break;
        }
        echo "</div>";
        ?></p>
</section>
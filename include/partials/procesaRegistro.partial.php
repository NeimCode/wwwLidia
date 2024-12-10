<section class="registro" id="registros">
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
    <p><strong>Contraseña</strong>
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
                break;
        }
        ?>
            <h1>Información de <?php echo ucfirst($poblacion); ?></h1>
    <ul>
        <li><strong>Habitants:</strong> <?php echo $datosPoblacion['habitants']; ?></li>
        <li><strong>Comarca:</strong> <?php echo $datosPoblacion['comarca']; ?></li>
        <li><strong>Gentilici:</strong> <?php echo $datosPoblacion['gentilici']; ?></li>
        <li><strong>Superfície geogràfica:</strong> <?php echo $datosPoblacion['superficie']; ?></li>
    </ul>
    <p><strong>Telefono</strong>
    <?php
    echo "<span>" . $tel . "</span>";
    ?></p>
    <p><strong>Horario repartimiento</strong>
        <?php
        echo "<span>" . $horaRepar . "</span>";
        ?></p>

        <p><Strong>Fruta preferida:</Strong></p>
        <?php
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
                default:
                    # code...
                    break;
            }
        }

    ?>
    <p><strong>Puntuacion</strong>
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
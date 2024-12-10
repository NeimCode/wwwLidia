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
    <p><strong>Telefono</strong>
    <?php
    echo "<span>" . $tel . "</span>";
    ?></p>
    <p><strong>Horario repartimiento</strong>
        <?php
        echo "<span>" . $horaRepar . "</span>";
        ?></p>
    <p><strong>Puntuacion</strong>
        <?php
        switch ($puntuacion) {
            case 1:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../../img/gato.jpg" alt="losaranes" class="gatito">';
                }
                break;
            case 2:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../../img/gato.jpg" alt="losaranes" class="gatito">';
                }
                break;
            case 3:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../../img/gato.jpg" alt="losaranes"> class="gatito"';
                }
                break;
            case 4:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../../img/gato.jpg" alt="losaranes"> class="gatito"';
                }
                break;
            case 5:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../../img/gato.jpg" alt="losaranes" class="gatito">';
                }
                break;
            default:
                # code...
                break;
        }
        ?></p>
</section>
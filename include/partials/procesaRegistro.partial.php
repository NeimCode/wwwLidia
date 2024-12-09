<section class="registro" id="registros">
    <p><strong>Nombre:</strong></p>
    <?php
        echo $nombre;
    ?>
    <p><strong>Apellidos:</strong></p>
    <?php
        echo $apellido;
    ?>
    <p><strong>Dirección:</strong></p>
    <?php

    if (isset($_POST['direccion']) && strcmp(trim(htmlspecialchars($_POST['direccion'])), "") != 0) {
        echo $direccion;
    } else {
        echo "Sin valor";
    }
    ?>
    <p><strong>Correo electrónico:</strong></p>
    <?php
        echo $correo;
    ?>
    <p><strong>Contraseña</strong></p>
    <?php

    if (isset($_POST['password']) && strcmp(trim(htmlspecialchars($_POST['password'])), "") != 0) {
        echo $password;
    } else {
        echo "Sin valor";
    }
    ?>
    <p><strong>Población:</strong></p>
    <?php


    if (isset($_POST['poblacion']) && strcmp(trim(htmlspecialchars($_POST['poblacion'])), "") != 0) {
        if ($poblacion == 'xativa') {
            echo $poblacion;
           echo '<img src="../img/xativa.jpg" alt="xativa">';
        } else if ($poblacion == 'genoves') {
            echo $poblacion;
           echo '<img src="../img/genoves.jpg" alt="genoves">';
        } else if ($poblacion == 'novetle') {
            echo $poblacion;
           echo '<img src="../img/novetle.jpg" alt="novetle">';
        } else if ($poblacion == 'losaRanes') {
            echo $poblacion;
           echo '<img src="../img/losaranes.jpg" alt="losaranes">';
        }
    } else {
        echo "Sin valor";
    }
    ?>
    <p><strong>Telefono</strong></p>
    <?php


    if (isset($_POST['tel']) && strcmp(trim(htmlspecialchars($_POST['tel'])), "") != 0) {
        echo $tel;
    } else {
        echo "Sin valor";
    }
    ?>
    <p><strong>Horario repartimiento</strong></p>
    <?php

    if (isset($_POST['horaRepar']) && strcmp(trim(htmlspecialchars($_POST['horaRepar'])), "") != 0) {
        echo $horaRepar;
    } else {
        echo "Sin valor";
    }
    ?>
        <p><strong>Puntuacion</strong></p>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['puntuar'])) {
        $puntuacion = trim(htmlspecialchars($_POST['puntuar']));
    }
    if (isset($_POST['puntuar']) && strcmp(trim(htmlspecialchars($_POST['puntuar'])), "") != 0) {
        switch ($puntuacion) {
            case 1:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../img/gato.jpg" alt="losaranes" class="gatito">';
                }
                break;
            case 2:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../img/gato.jpg" alt="losaranes" class="gatito">';
                }
                break;
            case 3:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../img/gato.jpg" alt="losaranes"> class="gatito"';
                }
                break;
            case 4:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../img/gato.jpg" alt="losaranes"> class="gatito"';
                }
                break;
            case 5:
                for ($i = 0; $i < $puntuacion; $i++) {
                    echo '<img src="../img/gato.jpg" alt="losaranes" class="gatito">';
                }
                break;
            default:
                # code...
                break;
        }

    } else {
        echo "Sin valor";
    }
    ?>
</section>

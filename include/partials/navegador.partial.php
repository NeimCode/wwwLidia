
    <?php
    if (basename($_SERVER['PHP_SELF']) == 'index.php') {
        
    echo '<nav class="navegador">';
    echo '<a href="index.php?apartat=inicio">Inicio</a>';
    echo '<a href="index.php?apartat=registro">Registro</a>';
    echo '<a href="index.php?apartat=contacto">Contacto</a>';
    echo '<a href="index.php?apartat=tienda">Tienda</a>';
    echo '</nav>';

    }

    ?>

    <?php
    if (basename($_SERVER['PHP_SELF']) == 'procesaRegistro.php') {
        
    echo '<nav class="navegador">';
    echo '<a href="../index.php?apartat=inicio">Inicio</a>';
    echo '<a href="../index.php?apartat=registro">Registro</a>';
    echo '<a href="../index.php?apartat=contacto">Contacto</a>';
    echo '<a href="../index.php?apartat=tienda">Tienda</a>';
    echo '</nav>';

    }

    ?>
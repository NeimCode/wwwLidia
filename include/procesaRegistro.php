<?php
$nombre ="";
$apellido ="";
$correo ="";
$password ="";
$tel ="";
$horaRepar ="";
$poblacion ="";
$direccion ="";
$puntuacion ="";
$estiloRegistro="";
$multiplicador = "";

if (isset($_POST['nombre'])){
$nombre=trim(htmlspecialchars($_POST['nombre']));
} else{
    $nombre ="Sin Valor";
}

if (isset($_POST['multiplicador'])){
    $multiplicador=trim(htmlspecialchars($_POST['multiplicador']));
    } else{
        $multiplicador ="Sin Valor";
    }

if (isset($_POST['apellido']) && trim($_POST['apellido']) !== '') {
    $apellido = trim(htmlspecialchars($_POST['apellido']));
} else {
    $apellido = 'Sin valor';
}

if (isset($_POST['direccion'])){
    if ($direccion == ''){
    $direccion = 'Sin valor';
    } else{
        $direccion=trim(htmlspecialchars($_POST['direccion']));

    }
} else{
    $direccion ="Sin Valor";
}

if (isset($_POST['correo'])){
    if ($correo == ''){
    $correo = 'Sin valor';
    } else{
        $correo=trim(htmlspecialchars($_POST['correo']));

    }
} else{
    $correo ="Sin Valor";
}

if (isset($_POST['password'])){
    if ($password == ''){
    $password = 'Sin valor';
    } else{
        $password=trim(htmlspecialchars($_POST['password']));

    }
} else{
    $password ="Sin Valor";
}
if (isset($_POST['tel'])){
    if ($tel == ''){
    $tel = 'Sin valor';
    } else{
        $tel=trim(htmlspecialchars($_POST['tel']));

    }
} else{
    $tel="Sin Valor";
}


if (isset($_POST['horaRepar'])){
    if ($horaRepar == ''){
    $horaRepar = 'Sin valor';
    } else{
        $horaRepar=trim(htmlspecialchars($_POST['horaRepar']));

    }
} else{
    $horaRepar="Sin Valor";
}

if (isset($_POST['poblacion'])){
    if ($poblacion == ''){
    $poblacion = 'Sin valor';
    } else{
        $poblacion=trim(htmlspecialchars($_POST['poblacion']));

    }
} else{
    $poblacion ="Sin Valor";
}

if (isset($_POST['puntuacion'])){
    if ($puntuacion == ' '){
    $puntuacion = 'Sin Valor';
    } else{
        $puntuacion=trim(htmlspecialchars($_POST['puntuacion']));

    }
} else{
    $puntuacion ="Sin Valor";
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruiteria Verduleria Online</title>
    <link rel="stylesheet" href="../styles.css">

    <?php 
    $apartat="";
    if(isset($_GET['apartat'])){
    $apartat = $_GET['apartat'];
    }

    if(isset($_POST['estiloRegistro'])){
        $estiloRegistro = $_POST['estiloRegistro'];
        }

    switch ($estiloRegistro) {
        case 'amarillo':
            echo '<link rel="stylesheet" href="../estilos/amarillo.css">';
            break;
        case 'morado':
            echo '<link rel="stylesheet" href="../estilos/purpol.css">';
            break;
    }

    ?>
    
</head>
<body>
    <div class="wrapper">
<?php 
include("./partials/encabezado.partial.php");
include("./partials/navegador.partial.php");
include("./procesaNav.php");
include("./partials/procesaRegistro.partial.php");
include("./partials/pie.partial.php");
?>

</div>
</body>
</html>


<?php

$nombre ="";
$apellido ="";
$correo ="";
$password ="";
$tel ="";
$horaRepar ="";
$poblacion ="";


if (isset($_POST['nombre'])){
$nombre=trim(htmlspecialchars($_POST['nombre']));
} else{
    $nombre ="Sin Valor";
}

if (isset($_POST['apellido'])){
$apellido=trim(htmlspecialchars($_POST['apellido']));
} else{
    $apellido ="Sin Valor";
}
if (isset($_POST['direccion'])){
$direccion=trim(htmlspecialchars($_POST['direccion']));
} else{
    $direccion ="Sin Valor";
}
if (isset($_POST['correo'])){
$correo=trim(htmlspecialchars($_POST['correo']));
} else{
    $correo ="Sin Valor";
}
if (isset($_POST['password'])){
$password=trim(htmlspecialchars($_POST['password']));
} else{
    $password ="Sin Valor";
}
if (isset($_POST['tel'])){
$tel=trim(htmlspecialchars($_POST['tel']));
} else{
    $tel ="Sin Valor";
}
if (isset($_POST['horaRepar'])){
$horaRepar=trim(htmlspecialchars($_POST['horaRepar']));
} else{
    $horaRepar ="Sin Valor";
}
if (isset($_POST['poblacion'])){
$poblacion=trim(htmlspecialchars($_POST['poblacion']));
} else{
    $poblacion ="Sin Valor";
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


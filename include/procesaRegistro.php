<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
        $nombre = trim(htmlspecialchars($_POST['nombre']));}
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['apellido'])) {
        $apellido = trim(htmlspecialchars($_POST['apellido']));}
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['direccion'])) {
        $direccion = trim(htmlspecialchars($_POST['direccion']));
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['correo'])) {
        $correo = trim(htmlspecialchars($_POST['correo']));}
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['password'])) {
        $password = trim(htmlspecialchars($_POST['password']));
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['tel'])) {
        $tel = trim(htmlspecialchars($_POST['tel']));
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['horaRepar'])) {
        $horaRepar = trim(htmlspecialchars($_POST['horaRepar']));
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['poblacion'])) {
        $poblacion = trim(htmlspecialchars($_POST['poblacion']));
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


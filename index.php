<?php
session_start();

if (!isset($_SESSION["persona"])) {
    $_SESSION["persona"] = null; 
}

$persona = $_SESSION["persona"];


if (!isset($_SESSION["estiloRegistro"])) {
    $_SESSION["estiloRegistro"] = "default";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST['estiloRegistro'])) {
        $_SESSION["estiloRegistro"] = $_POST['estiloRegistro'];
    } else {
        $_SESSION["estiloRegistro"] = "default"; 
    }
}

$estiloRegistro = $_SESSION["estiloRegistro"];

switch ($estiloRegistro) {
    case 'amarillo':
        $estiloCSS = '<link rel="stylesheet" href="./estilos/amarillo.css">';
        break;
    case 'morado':
        $estiloCSS = '<link rel="stylesheet" href="./estilos/purpol.css">';
        break;
    default:
        $estiloCSS = '<link rel="stylesheet" href="styles.css">';
        break;
}
?>





<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruiteria Verduleria Online</title>    
    <?php 
    echo $estiloCSS;
    
if (isset($_SESSION['error'])) {
    echo '<div class="error">' . $_SESSION['error'] . '</div>';
}


    $apartat="";
    if(isset($_GET['apartat'])){
    $apartat = $_GET['apartat'];
    }
    ?>
</head>
<body>
    <div class="wrapper">

    
<?php 
include("./include/partials/data.partial.php");
include("./include/partials/css.partial.php");
include("./include/partials/encabezado.partial.php");
include("./include/partials/navegador.partial.php");
if ($_SESSION['persona'] == "admin") {
    include("./include/partials/bienvenido.partial.php");
    include("./include/partials/admin.partial.php");
} elseif ($_SESSION['persona'] !== null) {
    include("./include/partials/bienvenido.partial.php");
} else {
    include("./include/partials/login.partial.php");
include("./include/procesaNav.php");

}
include("./include/partials/pie.partial.php");

?>

</div>
</body>
</html>

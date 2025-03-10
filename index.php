<?php
session_start();

// Si no hay una sesión establecida, definir persona como null
if (!isset($_SESSION["persona"])) {
    $_SESSION["persona"] = null; 
}

$persona = $_SESSION["persona"];
$cookieName = ($persona !== null) ? "css_" . $persona : "css_invitado";

// 🔹 Guardar la preferencia de CSS si se envía por POST
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['estiloRegistro'])) {
    $estiloSeleccionado = $_POST['estiloRegistro'];

    // Verificar si el estilo seleccionado es válido
    if ($estiloSeleccionado === "amarillo" || $estiloSeleccionado === "morado") {
        $_SESSION["estiloRegistro"] = $estiloSeleccionado;
        setcookie($cookieName, $estiloSeleccionado, time() + (30 * 24 * 60 * 60), "/");
    } else {
        // Si no se selecciona un estilo válido (por ejemplo, ninguno), asignar "default"
        $_SESSION["estiloRegistro"] = "default";
        setcookie($cookieName, "default", time() + (30 * 24 * 60 * 60), "/");
    }
}

// 🔹 Si no hay un estilo en sesión, intentar obtenerlo de la cookie correcta
if (!isset($_SESSION["estiloRegistro"])) {
    if (isset($_COOKIE[$cookieName])) {
        $_SESSION["estiloRegistro"] = $_COOKIE[$cookieName];
    } else {
        $_SESSION["estiloRegistro"] = "default"; // Estilo por defecto si no hay ninguno
    }
}

// 🔹 Definir el CSS según el estilo elegido
$estiloRegistro = $_SESSION["estiloRegistro"];

switch ($estiloRegistro) {
    case 'amarillo':
        $estiloCSS = '<link rel="stylesheet" href="./estilos/amarillo.css">';
        break;
    case 'morado':
        $estiloCSS = '<link rel="stylesheet" href="./estilos/purpol.css">';
        break;
    default:
        $estiloCSS = '<link rel="stylesheet" href="./estilos/styles.css">'; // Estilo por defecto
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

if ($_SESSION['persona'] == "admin") {
    include("./include/partials/bienvenido.partial.php");
    include("./include/partials/admin.partial.php");
} elseif ($_SESSION['persona'] !== null) {
    include("./include/partials/bienvenido.partial.php");
    include("./include/partials/navegador.partial.php");
include("./include/procesaNav.php");
    

} else {
    include("./include/partials/navegador.partial.php");
    include("./include/partials/login.partial.php");
    if (isset($_SESSION['error'])) {
        echo '<div class="error">' . $_SESSION['error'] . '</div>';
    }
include("./include/procesaNav.php");

}
include("./include/partials/pie.partial.php");



?>

</div>
</body>
</html>
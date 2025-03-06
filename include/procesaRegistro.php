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
include ("./datos.php");
include ("./funcions.php");


if (!is_dir("usuaris")) {
    mkdir("usuaris", 0777, true);
}
$file_path = "usuaris/passwd.txt";


if (isset($_POST["frutas"])){
    $frutas=$_POST["frutas"];
    } else{
        $frutas = "Sin Valor";
    }
    

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
    $apellido = 'Sin Valor';
}

if (isset($_POST['direccion'])){
    if ($direccion == ''){
    $direccion = 'Sin Valor';
    } else{
        $direccion=trim(htmlspecialchars($_POST['direccion']));

    }
} else{
    $direccion ="Sin Valor";
}

if (isset($_POST['correo']) && trim($_POST['correo']) !== '') {
    $correo = trim(htmlspecialchars($_POST['correo']));
} else {
    $correo = 'Sin Valor';
}



if (!isset($_POST['password']) || !isset($_POST['password_confirm'])) {
    redirigirSiError("Falta alguna de las contraseñas.");
}

$password = trim($_POST['password']);
$password_confirm = trim($_POST['password_confirm']);

// Si las contraseñas no coinciden, redirigir
if ($password !== $password_confirm) {
    redirigirSiError("Las contraseñas no coinciden. Inténtalo de nuevo.");
}

if (isset($_POST['tel']) && trim($_POST['tel']) !== '') {
    $tel = trim(htmlspecialchars($_POST['tel']));
} else {
    $tel = 'Sin Valor';
}

if (isset($_POST['horaRepar']) && trim($_POST['horaRepar']) !== '') {
    $horaRepar = trim(htmlspecialchars($_POST['horaRepar']));
} else {
    $horaRepar = 'Sin Valor';
}

if (isset($_POST['poblacion']) && array_key_exists($_POST['poblacion'], $datosPoblacion)) {
    $poblacion = $_POST['poblacion'];
    $datosPoblacion = $datosPoblacion[$poblacion];
    if ($poblacion == ''){
    $poblacion = 'Sin Valor';

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


$resultat = meterUsuario($nombre, $correo, $password, $file_path);

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
include("./partials/data.partial.php");
include("./partials/encabezado.partial.php");
include("./partials/navegador.partial.php");
include("./procesaNav.php");
mostrarMensaje($resultat, $correo);
include("./partials/procesaRegistro.partial.php");
include("./partials/pie.partial.php");
?>

</div>
</body>
</html>


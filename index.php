<?php

session_start();
$_SESSION["persona"]="Rubén"; 
$persona = $_SESSION["persona"];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruiteria Verduleria Online</title>
    <link rel="stylesheet" href="styles.css">
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
include("./include/partials/data.partial.php");
include("./include/partials/encabezado.partial.php");
include("./include/partials/navegador.partial.php");
include("./include/procesaNav.php");
include("./include/partials/pie.partial.php");

?>

</div>
</body>
</html>

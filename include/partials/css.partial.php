<?php


if(isset($_POST['estiloRegistro'])){
    $estiloRegistro = $_POST['estiloRegistro'];
    } else {
$estiloRegistro ="Sin Valor";
        
    }

switch ($estiloRegistro) {
    case 'amarillo':
        $amarillo ='<link rel="stylesheet" href="../estilos/amarillo.css">';
        break;
    case 'morado':
        $morado ='<link rel="stylesheet" href="../estilos/purpol.css">';
        break;
}


?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div class="estilo">
    <legend>Estilos registro:</legend>
    <label>
        <input type="radio" name="estiloRegistro" value="morado" id="morado">
        <span>Morado</span>
    </label>
    <label>
        <input type="radio" name="estiloRegistro" value="amarillo" id="amarillo">
        <span>Amarillo</span>
    </label>
<button type="submit" class="enviar">Enviar</button>
</div>
</form>
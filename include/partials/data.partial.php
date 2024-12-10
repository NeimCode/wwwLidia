<?php
$dias = ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"];
$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Setiembre", "Octubre", "Noviembre", "Diciembre"];
$dia_semana = date("w"); 
$dia_mes = date("j");  
$mes = date("n") - 1;
$anyo = date("Y");
$data_actual = $dias[$dia_semana] . ", " . $dia_mes . " de " . $meses[$mes] . " de " . $anyo;
echo '<span class="data">' . $data_actual . '</span>';
?>

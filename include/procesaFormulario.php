<?php
$nom = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['nombre'])) {
    $nom = trim(htmlspecialchars($_POST['nombre']));
    echo "El teu nom és: " . $nom;
} else {
    echo "No has enviat cap nom.";
}
?>

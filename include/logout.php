<?php
session_start(); // Iniciar la sesión

// Eliminar todas las variables de sesión
unset($_SESSION['persona']);  // O la variable de sesión específica que contiene el nombre del usuario
unset($_SESSION['user']);     // Si también tienes el correo o cualquier otra información en la sesión

// Destruir la sesión
session_destroy(); // Destruye toda la sesión

// Redirigir al usuario a la página de inicio o página de login
header("Location: ../index.php"); // Cambia esto a la página a la que quieras redirigir
exit;
?>

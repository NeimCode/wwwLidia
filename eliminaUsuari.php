<?php
session_start();

// Comprovar si l'usuari és admin, si no, redirigir-lo
if (!isset($_SESSION['persona']) || $_SESSION['persona'] !== "admin@dam.com") {
    header("Location: index.php");
    exit();
}

// Comprovar si s'ha passat un correu electrònic per GET
if (isset($_GET['correo'])) {
    $correoEliminar = $_GET['correo'];
    $file_path = "./include/usuaris/passwd.txt";

    // Comprovar si el fitxer d'usuaris existeix
    if (file_exists($file_path)) {
        // Llegir totes les línies del fitxer en un array
        $usuarios = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $usuariosFiltrados = [];

        // Recórrer els usuaris i eliminar el que coincideix amb l'email
        foreach ($usuarios as $usuario) {
            list($nombre, $correo, $password) = explode(":", $usuario);
            if ($correo !== $correoEliminar) {
                $usuariosFiltrados[] = $usuario;
            }
        }

        // Escriure les línies restants de nou al fitxer
        file_put_contents($file_path, implode("\n", $usuariosFiltrados) . "\n");

        // Eliminar la cookie associada al CSS de l'usuari eliminat
        $cookie_name = "css_" . $correoEliminar;
        if (isset($_COOKIE[$cookie_name])) {
            setcookie($cookie_name, "", time() - 3600, "/"); // Expira la cookie
        }

        // Redirigir amb un missatge de confirmació
        header("Location: index.php?apartat=admin&mensaje=Usuari eliminat correctament");
        exit();
    } else {
        header("Location: index.php?apartat=admin&error=No es troba el fitxer d'usuaris");
        exit();
    }
} else {
    header("Location: index.php?apartat=admin&error=No s'ha especificat cap usuari");
    exit();
}
?>

<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = strtolower(trim($_POST['email']));
    $contra = trim($_POST['password']);

    $file = __DIR__ . "/usuaris/passwd.txt";
    $lineas = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $usuarioEncontrado = false;

    foreach ($lineas as $linea) {
        list($email_guardado, $contra_guardada) = explode(':', $linea);

        if (strtolower($email_guardado) === $email) {
            $usuarioEncontrado = true;
            if (password_verify($contra, $contra_guardada)) {
                $_SESSION['user'] = $email;
                unset($_SESSION['error']);
                header("Location: ../index.php");
                exit;
            } else {
                $_SESSION['error'] = "La contraseña no es correcta";
                header("Location: ../index.php");
                exit;
            }
        }
    }

    if (!$usuarioEncontrado) {
        $_SESSION['error'] = "El usuario no existe :c";
        header("Location: ../index.php");
        exit;
    }

}   
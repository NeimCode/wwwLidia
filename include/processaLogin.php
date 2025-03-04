<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = strtolower(trim($_POST['email']));
    $contra = trim($_POST['password']);

    $file = __DIR__ . "/usuaris/passwd.txt";
    $lineas = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $usuarioEncontrado = false;
    foreach ($lineas as $linea) {
        $datos = explode(':', trim($linea), 4); 

        list($nombre_usuario, $email_guardado, $contra_guardada) = $datos;
    
        echo "Email guardado: [$email_guardado] | Contraseña guardada: [$contra_guardada] <br>"; // Debug
    
        if (strtolower($email_guardado) === $email) {
            if ($contra === $contra_guardada) {
                $_SESSION['user'] = $email;
                unset($_SESSION['error']);
                header("Location: ../index.php");
                exit;
            } else {
                $_SESSION['error'] = "La contraseña no es correcta  $contra $contra_guardada ";
                header("Location: ../index.php");
                exit;
            }
        }
    }
    

    if (!$usuarioEncontrado) {
        $_SESSION['error'] = "El usuario no existe :c" ;
        header("Location: ../index.php");

        exit;
    }

}   
<?php
session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
    $email = strtolower(trim($_POST['email'])); 
    $password = trim($_POST['password']);

$file = '/usuaris/passwd.txt';
    $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); 
    $userFound = false;
    foreach ($lines as $line) {
        list($stored_email, $stored_password) = explode(':', $line);

        if (strtolower($stored_email) === $email) {
            $userFound = true;
            if (password_verify($password, $stored_password)) {
                $_SESSION['user'] = $email;
                $_SESSION['error'] = "Test.";
                header("Location: ../index.php"); 
                exit;
            } else {
                $_SESSION['error'] = "La contraseña no es correcta";
                header("Location: ../index.php");
                exit;
            }
        }
    }

    if (!$userFound) {
        $_SESSION['error'] = "El usuario no existe :c";
        header("Location: ../index.php");
        exit;
    }
}
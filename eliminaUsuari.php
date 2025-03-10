<?php
if (isset($_GET['email'])) {
    $emailToDelete = trim($_GET['email']);

    $filename = './include/usuaris/passwd.txt';


    if (file_exists($filename)) {
        $fileContents = file($filename, FILE_IGNORE_NEW_LINES);

        $updatedUsers = array_filter($fileContents, function($line) use ($emailToDelete) {
            $user = explode(":", $line);
            return trim($user[1]) !== $emailToDelete;
        });

        file_put_contents($filename, implode("\n", $updatedUsers));
    }

if (isset($_COOKIE['css'])) {
    setcookie('css', '', time() - 3600, '/', $_SERVER['HTTP_HOST'], true, true);
    unset($_COOKIE['css']);
}

    header('Location: index.php');
    exit();
}
?>
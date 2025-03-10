<?php
function gestionaUsuaris() {
    $filename = './include/usuaris/passwd.txt';
    $fileContents = file($filename);
    echo '<table id="tabla-usuarios" class="tabla-estilizada">';

    echo '<tr><th>Nom</th><th>Email</th><th>Acció</th></tr>';
    
    foreach ($fileContents as $line) {
        $user = explode(":", $line); 
        $name = $user[0];
        $email = $user[1];
        $password = $user[2];
        
        if ($email != 'admin@dam.com') {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($name) . '</td>';
            echo '<td>' . htmlspecialchars($email) . '</td>';
            echo '<td><a href="eliminaUsuari.php?email=' . urlencode($email) . '"><img src="elimina.png" alt="elimina" /></a></td>';
            echo '</tr>';
        } else {
            echo '<tr>';
            echo '<td>' . htmlspecialchars($name) . '</td>';
            echo '<td>' . htmlspecialchars($email) . '</td>';
            echo '<td></td>';
            echo '</tr>';
        }
    }

    echo '</table>';
}
?>

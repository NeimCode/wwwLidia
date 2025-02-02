<?php
function meterUsuario(string $nom, string $email, string $password, string $filePath): bool {
    if (!file_exists($filePath)) {
        file_put_contents($filePath, "");
    }
    
    $usuaris = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($usuaris as $usuari) {
        list($existentNom, $existentEmail, $existentPass) = explode(":", $usuari);
        if ($existentEmail === $email) {
            return false;
        }
    }
    
    $registre = "$nom:$email:$password:\n";
    if (file_put_contents($filePath, $registre, FILE_APPEND | LOCK_EX) !== false) {
        return true;
        
    }
    return false;
}
function mostrarMensaje (bool $resultat, string $email) {
    $message = $resultat 
        ? "Usuario con correo $email registrado correctamente!" 
        : "¡Error! El usuario con el correo $email ya existe :c";
    $color = $resultat ? 'green' : 'red';
    echo "<p style='color:$color;'>$message</p>";
}

// function missatgeErrorLogin($error) {
//     switch ($error) {
//         case 'usuari_inexistent':
//             echo '<div class="error">L\'usuari no existeix. Si us plau, comprova el correu electrònic introduït.</div>';
//             break;
//         case 'contrasenya_incorrecta':
//             echo '<div class="error">La contrasenya no és correcta. Si us plau, intenta-ho de nou.</div>';
//             break;
//         case 'camp_buit':
//             echo '<div class="error">Tots els camps són obligatoris. Si us plau, completa el formulari.</div>';
//             break;
//         default:
//             echo '';
//             break;
//     }
// }

?>
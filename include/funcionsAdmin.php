<?php
function gestionaUsuaris() {
    $file_path = "./include/usuaris/passwd.txt";  // Ruta del archivo de usuarios

    if (!file_exists($file_path)) {
        echo "<p>No hay usuarios registrados.</p>";
        return;
    }

    echo '<table border="1">
            <tr>
                <th>Nombre</th>
                <th>Correo</th>
                <th>Acción</th>
            </tr>';

    // Leer el contenido del archivo en un array
    $usuarios = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

    // Recorrer cada línea del archivo
    foreach ($usuarios as $usuario) {
        list($nombre, $correo, $password) = explode(":", $usuario);  // Separar los datos de cada usuario

        echo "<tr>
                <td>$nombre</td>
                <td>$correo</td>
                <td>";

        // Si el correo no es el de admin, permitir la eliminación
        if ($correo !== "admin@dam.com") {
            echo "<a href='./eliminaUsuari.php?correo=$correo'>
                      <img src='./imagenes/eliminar.png' alt='Eliminar usuario'/>
                  </a>";
        } else {
            echo "Admin";  // No se puede eliminar al admin
        }

        echo "</td></tr>";
    }

    echo '</table>';
}
?>

<?php
    switch ($apartat) {
        case 'inicio':
            include'./include/partials/inicio.partial.php';
            break;
        case 'registro':
            include'./include/partials/registro.partial.php';
            break;
        case 'contacto':
            include'./include/partials/contacto.partial.php';
            break;
        case 'tienda':
            include'./include/partials/tienda.partial.php';
            break;        
        default:
            # code...
            break;
    }
?>
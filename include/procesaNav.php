<?php

if (basename($_SERVER['PHP_SELF']) == 'index.php') {
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
            include'./include/partials/inicio.partial.php';
            break;
    }
} else {
    switch ($apartat) {
        case 'inicio':
            include'./partials/inicio.partial.php';
            break;
        case 'registro':
            include'./partials/registro.partial.php';
            break;
        case 'contacto':
            include'./partials/contacto.partial.php';
            break;
        case 'tienda':
            include'./partials/tienda.partial.php';
            break;        
        default:
            break;
    }
}
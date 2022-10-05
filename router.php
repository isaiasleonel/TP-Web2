<?php
// van los require de los php
require_once './app/controllers/controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// parametro
$action = 'home';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

//parsear la accion
$params = explode('/', $action);

// Unico controlador
$controllerCatalogo = new productoController();

switch ($params[0]) {
    case 'home':
        $controllerCatalogo->showHome();
        break;
        // case 'catalogo':
        //     $controllerCatalogo->showCatalogo();
        //     break;
    case 'ordenamiento':
        $controllerCatalogo->showOrders($params[1]);
        break;

    default:
        echo ('404 Page not found');
        break;
}

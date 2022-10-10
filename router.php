<?php
// van los require de los php
require_once './app/controllers/categoria.controller.php';
require_once './app/controllers/producto.controller.php';
require_once './app/controllers/auth.controller.php';


define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

// parametro
$action = 'inicio';
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
}

//parsear la accion
$params = explode('/', $action);


switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showFormLogin();
        break;
    case 'validate':
        $authController = new AuthController();
        $authController->validateUser();
        break;

    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'inicio':
        $controllerProducto = new productoController();
        $controllerProducto->showProducto();

        $controllerCategoria = new categoriaController();
        $controllerCategoria->showAsideCategoria();
        break;

        // case 'catalogo':
        //     $controllerCatalogo->showCatalogo();
        //     break;
    case 'ordenamiento':
        $controllerProducto = new productoController();
        $id = $params[1];
        $controllerProducto->showOrders($id);
        break;

    default:
        echo ('404 Page not found');
        break;
}

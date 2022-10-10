<?php
require_once './app/Models/producto.model.php';
require_once './app/Views/producto.view.php';


class productoController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new productoModel();
        $this->view = new productoView();
    }

    public function showProducto()
    {
        $homeP = $this->model->getDbProyCat();
        $this->view->showProducto($homeP);
    }

    public function showOrders($id)
    {
        $ordenamiento = $this->model->getDbProduct($id);
        $this->view->showOrders($ordenamiento);
    }
}

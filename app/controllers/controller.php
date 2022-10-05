<?php
require_once './app/Models/model.php';
require_once './app/Views/view.php';


class productoController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new productoModel();
        $this->view = new productoView();
    }

    public function showHome()
    {
        $homeP = $this->model->getDbProyCat();
        $home = $this->model->getDbCategoria();
        $this->view->showHome($home, $homeP);
    }

    // public function showCatalogo()
    // {
    //     $catalogo = $this->model->getDbProduct();
    //     $this->view->showCatalogo($catalogo);
    // }

    public function showOrders($id)
    {
        $ordenamiento = $this->model->getDbProduct($id);
        $this->view->showOrders($ordenamiento);
    }
}

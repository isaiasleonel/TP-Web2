<?php
require_once './app/Models/categoria.model.php';
require_once './app/Views/categoria.view.php';


class categoriaController
{
    private $model;
    private $view;

    public function __construct()
    {
        $this->model = new categoriaModel();
        $this->view = new categoriaView();
    }

    public function showAsideCategoria()
    {
        $categorias = $this->model->getDbCategoria();
        $this->view->showAsideCategoria($categorias);
    }
}

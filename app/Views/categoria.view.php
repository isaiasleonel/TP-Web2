<?php
require_once './smarty-master/libs/Smarty.class.php';

class categoriaView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    // Para Agregar Categorias
    function  formCategoria($categorias)
    {
        $this->smarty->assign('categorias', $categorias);
        $this->smarty->display('./Templates/addFormcategoria.tpl');
    }

    // Para Editar como ADM
    function  viewEditar($categoriaID, $select)
    {
        $this->smarty->assign('categoriaID', $categoriaID);
        $this->smarty->assign('select', $select);
        $this->smarty->display('./Templates/admHome.tpl');
    }
}

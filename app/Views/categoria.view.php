<?php
require_once './smarty-master/libs/Smarty.class.php';

class categoriaView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }


    function  showAsideCategoria($categorias)
    {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($categorias));
        $this->smarty->assign('categorias', $categorias);

        // mostrar el tpl
        $this->smarty->display('./Templates/aside-home.tpl');
    }
}

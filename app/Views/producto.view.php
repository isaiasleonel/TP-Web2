<?php
require_once './smarty-master/libs/Smarty.class.php';

class productoView
{
    private $smarty;

    public function __construct()
    {
        $this->smarty = new Smarty();
    }

    //-----------------home----------------
    function showProducto($productos)
    {
        // asigno variables al tpl smarty
        $this->smarty->assign('count', count($productos));
        $this->smarty->assign('productos', $productos);

        // mostrar el tpl
        $this->smarty->display('./Templates/home.tpl');
    }
    //---------------------------------------------------------------------


    // ----------------catalogo--------------
    function showOrders($catalogos)
    {
        $this->smarty->assign('count', count($catalogos));
        $this->smarty->assign('catalogos', $catalogos);

        $this->smarty->display('./Templates/productos.tpl');
    }
}









//     //muestro array de marca
//     $arrayBrand = getBrand();
//     echo "<ul>";
//     foreach ($arrayBrand as $value) {
//         echo "<li><a href='catalogo.php'> $value->marca_fk</a></li>";
//     }
//     echo "</ul>";
// }




//         $filterCategoria = getFilterCategoria();
//         // $arraycategory = getCategory();
//         echo "<ul>";
//         foreach ($filterCategoria as  $value) {
//             echo "<li> $value->categoria_fk</li>";
//         }
//         echo "</ul>";
//     }
// }

    // Hecho con Smarty 🎇
    // private $smarty;

// public function __construct()
// {
//     $this->smarty = new Smarty(); // inicializo Smarty
// }

// function showProduct($productos)
// {
//     // asigno variables al tpl smarty
//     $this->smarty->assign('count', count($productos));
//     $this->smarty->assign('tasks', $productos);

//     // mostrar el tpl
//     $this->smarty->display('taskList.tpl');
// }

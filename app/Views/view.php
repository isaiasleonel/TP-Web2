<?php
// require_once './libs/smarty-4.2.1/libs/Smarty.class.php';

class productoView
{
    //-----------------home----------------
    function showHome($categoria, $producto)
    {
        require_once './Templates/header.php';

?>

        <h1>WorldGammer</h1>
        <h2>Nuestros productos</h2>
        <h3>Categoria</h3>
        <!-- ---------- START MAIN APP ---------- -->
        <section class="container">
            <div class="row">
                <!-- ---------- Row 1: START ACCORDION CATEGORY ---------- -->
                <div class="col-12 col-md-4 mb-4">

                    <div class="accordion accordion-flush" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-memory" viewBox="0 0 16 16">
                                        <path d="M1 3a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.586a1 1 0 0 0 .707-.293l.353-.353a.5.5 0 0 1 .708 0l.353.353a1 1 0 0 0 .707.293H15a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H1Zm.5 1h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5Zm5 0h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5Zm4.5.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-4ZM2 10v2H1v-2h1Zm2 0v2H3v-2h1Zm2 0v2H5v-2h1Zm3 0v2H8v-2h1Zm2 0v2h-1v-2h1Zm2 0v2h-1v-2h1Zm2 0v2h-1v-2h1Z" />
                                    </svg>
                                    <span class="ms-2"> Categorias</span>
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <?php foreach ($categoria as  $value) { ?>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a class="nav-link" href="ordenamiento/<?php echo $value->id ?>"><?php echo $value->categoria_fk ?></a>
                                            </li>
                                        </ul>
                                    <?php  } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ---------- Row 2: START CARD PRODUCTS ---------- -->
                <div class="col-12 col-md-8 producto-class">
                    <?php foreach ($producto as $newBD) {  ?>
                        <div class="card mb-3">
                            <div class="row g-0">
                                <div class="col-4 col-lg-auto px-2">
                                    <img src="<?php echo $newBD->imagen ?>" class="img-fluid rounded-start" width="160" alt="...">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php echo $newBD->nombre ?></h5>
                                        <p class="card-text">$<?php echo $newBD->precio ?></p>
                                        <button class="btn btn-primary">Sumar al carrito</button>
                                        <a type="button" class="btn btn-primary">Editar</a>
                                        <a type="button" class="btn btn-primary">Eliminar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- ---------- END CARD PRODUCTS ---------- -->
            </div>
        </section>
        <?php

        include_once './Templates/footer.php';
    }
    // <!-- ---------- END ACCORDION CATEGORY ---------- -->


    // ----------------catalogo--------------
    function showOrders($catalogos)
    {
        require_once './Templates/header.php';
        //  Arreglo de producto 
        foreach ($catalogos as $value) {
        ?>
            <div class="col-12 col-md-8 producto-class">
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-4 col-lg-auto px-2">
                            <img src="<?php echo $value->imagen ?>" class="img-fluid rounded-start" width="160" alt="...">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $value->nombre ?></h5>
                                <p class="card-text">$<?php echo $value->precio ?></p>
                                <button class="btn btn-primary">Sumar al carrito</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
        }
        require_once './Templates/footer.php';
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

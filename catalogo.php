<?php
// require_once('libs/smarty/Smarty.class.php');
require_once 'db.php';
// $smarty = new Smarty();




// catalogo
// function showCatalogo()
// {
//     $ok = $_GET[''];
//     var_dump($ok);

//     if (isset($_POST)) {
//         //  muestro array de producto
//         $arrayProduct =  getTable();
//         foreach ($arrayProduct as $value) {
//             var_dump($arrayProduct);

//             echo "<img src='$value->imagen' alt='img'> </img> ";
//             echo "<h3> $value->categoria_fk : $value->marca_fk </h3>";
//             echo "<h3>$$value->precio </h3>";
//         }
//     }





//     //muestro array de marca
//     $arrayBrand = getBrand();
//     echo "<ul>";
//     foreach ($arrayBrand as $value) {
//         echo "<li><a href='catalogo.php'> $value->marca_fk</a></li>";
//     }
//     echo "</ul>";
// }




// // mostrar categoria asiganadas 
// function showOrder($id)
// {
//     if (isset($id)) {
//         $idNew = $id;
//         var_dump($idNew);
//     }



//     //arreglo de categoria designadas
//     $arrayProduct =  getTable();
//     $arrayNew = $arrayProduct[$idNew];

//     //recorro arreglo
//     // mostrar 
//     echo "<img src='$arrayNew->imagen' alt='img'> </img> ";
//     echo "<h3> $arrayNew->categoria_fk : $arrayNew->marca_fk </h3>";
//     echo "<h3>$$arrayNew->precio </h3>";
// }











// // tabla fusionada     
// $tableInner = getTable();
// // var_dump($tableInner);
// echo "<ul>";
// foreach ($tableInner as $key => $value) {
//     echo "<li><a href='catalogo.php/$key'> $value->marca_fk</a></li>";
// }
// echo "</ul>";

<?php
class productoModel
{
    private $db;


    public function __construct()
    {

        $this->db = new PDO('mysql:host=localhost;' . 'dbname=ventatecnologica;charset=utf8', 'root', '');
    }


    // ------------------Categoria---------------------------
    public function getDbCategoria()
    {
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();
        $categoria = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objeto
        return $categoria;
    }


    //------------------Inner Join de Producto y Categoria -----------------------
    public function getDbProyCat()
    {
        $query = $this->db->prepare('SELECT  producto.id_producto, producto.precio , producto.nombre, producto.imagen , marca.marca_fk , categoria.categoria_fk FROM producto  INNER JOIN marca ON producto.marca_fk = marca.id INNER JOIN categoria ON producto.categoria_fk= categoria.id');
        $query->execute();
        $innePyC = $query->fetchAll(PDO::FETCH_OBJ);
        return $innePyC;
    }


    function getDbProduct($id)
    {
        $query = $this->db->prepare('SELECT * FROM producto WHERE categoria_fk = ? ');
        $query->execute([$id]);
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        return $productos;
    }









    // PAra hacer inner join con 3 tablas
    // SELECT  producto.id_producto, producto.precio , producto.nombre, producto.imagen , marca.marca_fk , categoria.categoria_fk FROM producto  INNER JOIN marca ON producto.marca_fk = marca.id INNER JOIN categoria ON producto.categoria_fk= categoria.id;'


    // function getLinkDB()
    // {
    //     return new PDO('mysql:host=localhost;' . 'dbname=ventatecnologica;charset=utf8', 'root', '');
    // }
    // function getProduct()
    // {
    //     $db = getLinkDB();
    //     $sentencia = $db->prepare('SELECT * FROM producto');
    //     $sentencia->execute();
    //     $productos = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //     return $productos;
    // }
    // function getCategory()
    // {
    //     $db = getLinkDB();
    //     $sentencia = $db->prepare('SELECT * FROM categoria');
    //     $sentencia->execute();
    //     $categoria = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //     return $categoria;
    // }
    // function getBrand()
    // {
    //     $db = getLinkDB();
    //     $sentencia = $db->prepare('SELECT * FROM marca');
    //     $sentencia->execute();
    //     $marcas = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //     return $marcas;
    // }


    // function getTable()
    // {
    //     $db = getLinkDB();
    //     $sentencia = $db->prepare('SELECT producto.id_producto, producto.precio , producto.nombre, producto.imagen , marca.marca_fk , categoria.categoria_fk FROM producto  INNER JOIN marca ON producto.marca_fk = marca.id INNER JOIN categoria ON producto.categoria_fk= categoria.id;');
    //     $sentencia->execute();
    //     $tableInner = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //     return $tableInner;
    // }

    // function getFilterCategoria()
    // {
    //     $db = getLinkDB();
    //     $sentencia = $db->prepare(' SELECT categoria.categoria_fk, producto.precio , producto.nombre, producto.imagen  FROM categoria  INNER JOIN producto ON categoria.id = producto.categoria_fk ');
    //     $sentencia->execute();
    //     $categoriaFilter = $sentencia->fetchAll(PDO::FETCH_OBJ);
    //     return $categoriaFilter;
    // }


    // filtramos CAT U PRO =>  Placa de video
    // SELECT categoria.categoria_fk, producto.precio , producto.nombre, producto.imagen  FROM categoria  INNER JOIN producto ON categoria.id = producto.categoria_fk  WHERE categoria.categoria_fk= "Placa de Video"


    //Para el buscador de google 
    //SELECT * FROM producto WHERE nombre LIKE 'G%';
}

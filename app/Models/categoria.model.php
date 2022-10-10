<?php
class categoriaModel
{
    // privatizo los datos
    private $db;

    // conecto la base de dato con el constructor 
    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=ventatecnologica;charset=utf8', 'root', '');
    }

    // ---------------Base de dato de la tabla Categoria---------------------------
    public function getDbCategoria()
    {
        $query = $this->db->prepare('SELECT * FROM categoria');
        $query->execute();
        $categoria = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objeto
        return $categoria;
    }
}

<?php
class Product
{
    private $idProducto;
    private $nombre;
    private $foto;
    private $precio;

    function __construct($idProducto, $nombre, $foto, $precio)
    {
        $this->idProducto = $idProducto;
        $this->nombre = $nombre;
        $this->foto = $foto;
        $this->precio = $precio;
    }
    public function __set($propiedad, $var)
    {

        $this->$propiedad = $var;
    }
    public function __get($propiedad)
    {

        return $this->$propiedad;
    }
    static function getAll($conexion)
    {
        try {
            $consulta = "SELECT * FROM productos";
            $result = $conexion->prepare($consulta);
            $result->execute();
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function buscar($conexion)
    {
        try {
            $consulta = "SELECT * FROM productos WHERE idProducto=$this->idProducto";
            $result = $conexion->prepare($consulta);
            $result->execute();
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
}
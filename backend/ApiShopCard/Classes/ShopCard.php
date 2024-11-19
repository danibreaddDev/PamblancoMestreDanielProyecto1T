<?php
class ShopCard
{
    private $idUnico;
    private $dniCliente;
    private $idProducto;
    private $nombreProducto;
    private $precio;
    private $cantidad;
    function __construct($idUnico, $dniCliente, $idProducto, $nombreProducto, $precio, $cantidad)
    {
        $this->idUnico = $idUnico;
        $this->dniCliente = $dniCliente;
        $this->idProducto = $idProducto;
        $this->nombreProducto = $nombreProducto;
        $this->precio = $precio;
        $this->cantidad = $cantidad;
    }
    public function __set($propiedad, $var)
    {

        $this->$propiedad = $var;
    }
    public function __get($propiedad)
    {

        return $this->$propiedad;
    }
    public function existe($conexion)
    {
        try {
            $consulta = "SELECT * FROM carrito WHERE idUnico=:idUnico and idProducto=:idProducto";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":idUnico", $this->idUnico);
            $result->bindParam(":idProducto", $this->idProducto);
            $result->execute();
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function getAll_byidUnico($conexion)
    {
        try {
            $consulta = "SELECT * FROM carrito WHERE idUnico='$this->idUnico'";
            $result = $conexion->prepare($consulta);
            $result->execute();
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function añadir($conexion)
    {
        try {
            $consulta = "INSERT INTO carrito (idUnico,dniCliente,idProducto,nombre,precio,cantidad) VALUES (:idUnico,:dniCliente,:idProducto,:nombre,:precio,:cantidad)";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":idUnico", $this->idUnico);
            $result->bindParam(":dniCliente", $this->dniCliente);
            $result->bindParam(":idProducto", $this->idProducto);
            $result->bindParam(":nombre", $this->nombreProducto);
            $result->bindParam(":precio", $this->precio);
            $result->bindParam(":cantidad", $this->cantidad);
            $result->execute();
            return $conexion->lastInsertId();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function modificar($conexion, $param)
    {
        //para modificar nos hace falta las dos claves primarias
        try {
            $fields = $this->getParams($param);
            $consulta = "UPDATE carrito SET $fields WHERE idUnico=:idUnico";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":idUnico", $this->idUnico);
            $result->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function eliminar($conexion)
    {
        //para eliminar nos hace falta las dos claves primarias
        try {
            $consulta = "DELETE FROM carrito WHERE idUnico=:idUnico and idProducto=:idProducto";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":idUnico", $this->idUnico);
            $result->bindParam(":idProducto", $this->idProducto);
            $result->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function nuevaCantidad($conexion, $param)
    {
        try {
            $fields = $this->getParams($param);
            $consulta = "UPDATE carrito SET $fields WHERE idUnico=:idUnico and idProducto=:idProducto";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":idUnico", $this->idUnico);
            $result->bindParam(":idProducto", $this->idProducto);
            $result->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    function getParams($input)
    {
        $filterParams = [];
        foreach ($input as $param => $value) {
            if ($param == "cantidad" || $param == "precio") {
                $filterParams[] = "$param=$value";
            } else {
                $filterParams[] = "$param='$value'";
            }
        }
        return implode(", ", $filterParams);
    }
}

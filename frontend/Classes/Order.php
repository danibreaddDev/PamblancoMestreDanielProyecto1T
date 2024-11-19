<?php
class Order
{
    private $idPedido;
    private $fecha;
    private $dirEntrega;
    private $dniCliente;
    function __construct($idPedido, $fecha, $dirEntrega, $dniCliente)
    {
        $this->idPedido = $idPedido;
        $this->fecha = $fecha;
        $this->dirEntrega = $dirEntrega;
        $this->dniCliente = $dniCliente;
    }
    public function __set($propiedad, $var)
    {

        $this->$propiedad = $var;
    }
    public function __get($propiedad)
    {

        return $this->$propiedad;
    }
    static function lastID($conexion)
    {
        try {
            $consulta = "SELECT COUNT(*) FROM pedidos";
            $result = $conexion->prepare($consulta);
            $result->execute();
            return $result->fetchColumn();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function existe($conexion)
    {
        try {
            $consulta = "SELECT * FROM pedidos WHERE idPedido=:idPedido";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":idPedido", $this->idPedido);
            $result->execute();
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
        }
    }
    public function insertar($conexion)
    {
        try {
            $consulta = "INSERT INTO pedidos (idPedido, fecha, dirEntrega, dniCliente) 
            VALUES (:idPedido, :fecha, :dirEntrega,:dniCliente)";
            $result = $conexion->prepare($consulta);
            $result->bindParam(':idPedido', $this->idPedido);
            $result->bindParam(':fecha', $this->fecha);
            $result->bindParam(':dirEntrega', $this->dirEntrega);
            $result->bindParam(':dniCliente', $this->dniCliente);
            $result->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}

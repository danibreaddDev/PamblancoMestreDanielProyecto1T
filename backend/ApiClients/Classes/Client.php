<?php
class Client
{
    private $dniCliente;
    private $nombre;
    private $pwd;
    private $dirEntrega;


    function __construct($dniCliente, $nombre, $pwd, $dirEntrega)
    {
        $this->dniCliente = $dniCliente;
        $this->nombre = $nombre;
        $this->pwd = $pwd;
        $this->dirEntrega = $dirEntrega;
    }
    public function __set($propiedad, $var)
    {

        $this->$propiedad = $var;
    }
    public function __get($propiedad)
    {

        return $this->$propiedad;
    }

    static function getAll($conexion) //todos los clientes
    {
        try {
            $consulta = "SELECT * FROM clientes";
            $result = $conexion->prepare($consulta);
            $result->execute();
            $result->setFetchMode(PDO::FETCH_ASSOC);
            return $result->fetchAll();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function existe($conexion)
    {
        try {
            $consulta = "SELECT * FROM clientes WHERE dniCliente=:dniCliente";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":dniCliente", $this->dniCliente);
            $result->execute();
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function buscar($conexion)
    {
        try {
            $consulta = "SELECT * FROM clientes WHERE dniCliente=$this->dniCliente";
            $result = $conexion->prepare($consulta);
            $result->execute();
            return $result->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function añadir($conexion)
    {
        try {
            $consulta = "INSERT INTO clientes (dniCliente,nombre,pwd,dirEntrega) VALUES (:dniCliente,:nombre,:pwd,:dirEntrega)";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":dniCliente", $this->dniCliente);
            $result->bindParam(":nombre", $this->nombre);
            $result->bindParam(":dirEntrega", $this->dirEntrega);
            $password = $this->pwd;
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $result->bindParam(":pwd",  $hash);
            $result->execute();
            $respuesta = [
                "status" => "success",
                "message" => "insertado",
                "nombre" => $this->nombre,
                "dirEntrega" => $this->dirEntrega
            ];
            return $respuesta;
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function modificar($conexion, $param)
    {
        try {
            $fields = $this->getParams($param);
            $consulta = "UPDATE clientes SET $fields WHERE dniCliente=:dniCliente";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":dniCliente", $this->dniCliente);
            $result->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function eliminar($conexion)
    {
        try {
            $consulta = "DELETE FROM clientes WHERE dniCliente=:dniCliente";
            $result = $conexion->prepare($consulta);
            $result->bindParam(":dniCliente", $this->dniCliente);
            $result->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            die();
        }
    }
    public function autenticar($conexion)
    {
        try {
            if ($cliente = $this->existe($conexion)) {
                $password = $this->pwd;
                if (password_verify($password, $cliente["pwd"])) {
                    $_SESSION["dniCliente"] = $cliente["dniCliente"];
                    $datos = [
                        "status" => "success",
                        "dniCliente" => $cliente["dniCliente"],
                        "nombre" => $cliente["nombre"],
                        "dirEntrega" => $cliente["dirEntrega"]
                    ];
                    return $datos;
                }
                return [
                    "error" => "Usuario y/o contraseña incorrectos"
                ];
            }
            return [
                "error" => "no existe el usuario"
            ];
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
            die();
        }
    }
    function getParams($input)
    {
        $filterParams = [];
        foreach ($input as $param => $value) {
            if ($param === "pwd") {
                $hash = password_hash($value, PASSWORD_DEFAULT);
                $filterParams[] = "$param='$hash'";
            } else {
                $filterParams[] = "$param='$value'";
            }
        }
        return implode(", ", $filterParams);
    }
}

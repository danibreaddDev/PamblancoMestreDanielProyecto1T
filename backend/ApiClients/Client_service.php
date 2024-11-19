<?php
include("./Config/Autocharge.php");
$base = new BD();
//las peticiones van a ser en formato json ya que son del lado del cliente
$vector = json_decode(file_get_contents("php://input"), true);

//listar todos los clientes o por DNI
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["dniCliente"]) && isset($_GET["pwd"])) {
        $client = new Client($_GET["dniCliente"], "", $_GET["pwd"], "");
        $datos = $client->autenticar($base->link);

        header("HTTP/1.1 200 OK");
        header('Content-Type: application/json', false);
        echo json_encode($datos);
    }
    exit();
}
//añadir un cliente
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($vector["dniCliente"])) {
        $client = new Client($vector["dniCliente"], $vector["nombre"], $vector["pwd"], $vector["dirEntrega"]);
        if (!$client->existe($base->link)) {
            $respuesta = $client->añadir($base->link);
            header("HTTP/1.1 200 OK");
            header('Content-Type: application/json', false);
        } else {
            header("HTTP/1.1 200 OK");
            header('Content-Type: application/json', false);
            $respuesta = [
                "status" => "error",
                "message" => "cliente no insertado"
            ];
        }
        echo json_encode($respuesta);
        exit();
    }
}
//modificar un cliente
if ($_SERVER["REQUEST_METHOD"] == "PUT") {

    if (isset($vector["dniCliente"]) && isset($vector["dirEntrega"])) {
        $dniCliente = array_shift($vector);
        $cliente = new Client($dniCliente, "", "", "");
        $cliente->modificar($base->link, $vector); //hay que pasarle todos los parametros
        header("HTTP/1.1 200 OK");
        header('Content-Type: application/json', false);
        echo json_encode("cliente con el dni:  $dniCliente editado correctamente");
        exit();
    }
}
//eliminar un cliente
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    if (isset($vector["dniCliente"])) {
        $cliente = new Client($vector["dniCliente"], "", "", "");
        $cliente->eliminar($base->link);
        header("HTTP/1.1 200 OK");
        header('Content-Type: application/json', false);
        echo json_encode("eliminado cliente con dni: " .  $vector["dniCliente"] . "");
        exit();
    }
}
header("HTTP/1.1 400 BAD REQUEST");

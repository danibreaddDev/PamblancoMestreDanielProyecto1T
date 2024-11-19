<?php
include("./Config/Autocharge.php");
$base = new BD();
//no nos hace falta ya que la peticion se hace en el servidor, y construimos la pagina de detalle enviandole el id por la url
//$vector = json_decode(file_get_contents("php://input"), true);

//listar los productos o el producto por id
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["idProducto"])) {
        $producto = new Product($_GET["idProducto"], "", "", "", "", "", "", "", "", "");
        header('HTTP/1.1 200 OK');
        header('Content-Type: application/json',false);
        echo json_encode($producto->buscar($base->link));
        exit();
    } else {
        header('HTTP/1.1 200 OK');
        header('Content-Type: application/json');
        echo json_encode(Product::getAll($base->link));
        exit();
    }
}
header("HTTP/1.1 400 BAD REQUEST");
<?php
include("./Config/Autocharge.php");
$base = new BD();
//las peticiones van a ser en formato json ya que son del lado del cliente
$input = file_get_contents('php://input');
$vector = json_decode($input, true);

//listar todos los elementos del carrito por dniCLiente o idUnico

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET["idUnico"])) {
        $carrito = new ShopCard($_GET["idUnico"], "", "", "", "", "");
        header('HTTP/1.1 200 OK');
        header('Content-Type: application/json', false);
        echo json_encode($carrito->getAll_byidUnico($base->link));
    }
}

//añadir elemento al carrito comprobando si no existe se añade, si existe sumamos la cantidad //funcionando
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($vector["idUnico"])) {
        $idUnico = array_shift($vector);
        $dniCliente = array_shift($vector);
        $idProducto = (int) array_shift($vector);
        $nombreProducto = array_shift($vector);
        $precio = (int) array_shift($vector);
        $elementoCarrito = new ShopCard($idUnico, $dniCliente, $idProducto, $nombreProducto, $precio, "");
        if ($datos = $elementoCarrito->existe($base->link)) {
            //sumaremos cantidad
            $vector["cantidad"] += $datos["cantidad"];
            $elementoCarrito->nuevaCantidad($base->link, $vector);

            $respuesta = [
                "status" => "success",
                "message" => "Cantidad sumada al carrito"
            ];
        } else {
            //añadimos al carrito
            $elementoCarrito = new ShopCard($idUnico, $dniCliente, $idProducto, $nombreProducto, $precio, $vector["cantidad"]);
            $elementoCarrito->añadir($base->link);
            $respuesta = [
                "status" => "success",
                "message" => "Producto agregado al carrito"
            ];
        }
        header('HTTP/1.1 200 OK');
        header('Content-Type: application/json', false);
        echo json_encode($respuesta);
    } else {
        $respuesta = [
            "status" => "error",
            "message" => "Datos incompletos"
        ];
        header('HTTP/1.1 400 BAD REQUEST');
        header('Content-Type: application/json', false);
        echo json_encode($respuesta);
    }
    exit();
}
//actualizar contenido del carrito, las cantidades de un producto //funcionando
if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    if (isset($vector["idUnico"]) && isset($vector["idProducto"])) {
        $idUnico = array_shift($vector);
        $idProducto = (int) array_shift($vector);
        $carrito = new ShopCard($idUnico, "", $idProducto, "", "", "");

        //sumaremos cantidad;
        $carrito->nuevaCantidad($base->link, $vector);
        $respuesta = [
            "status" => "success",
            "message" => "Actualizada la cantidad"
        ];
        header('HTTP/1.1 200 OK');
        header('Content-Type: application/json', false);
        echo json_encode($respuesta);
    } elseif (isset($vector["idUnico"]) && isset($vector["dniCliente"])) {
        $idUnico = array_shift($vector);
        $carrito = new ShopCard($idUnico, "", "", "", "", "");
        $carrito->modificar($base->link, $vector);
        $respuesta = [
            "status" => "success",
            "message" => "modificado"
        ];
        header('HTTP/1.1 200 OK');
        header('Content-Type: application/json', false);
        echo json_encode($respuesta);
    } else {
        $respuesta = [
            "status" => "error",
            "message" => "datos incompletos"
        ];
        header('HTTP/1.1 400 BAD REQUEST');
        header('Content-Type: application/json', false);
        echo json_encode($respuesta);
    }

    exit();
}
//borrar elemento del carrito por dniCLiente o idUnico //funcionando
if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    if (isset($vector["idUnico"]) && isset($vector["idProducto"])) {

        $carrito = new ShopCard($vector["idUnico"], "", $vector["idProducto"], "", "", "");
        if ($carrito->existe($base->link)) {
            //eliminaremos si existe
            $carrito->eliminar($base->link);
            $respuesta = [
                "status" => "success",
                "message" => "Eliminado del carrito"
            ];
            header('HTTP/1.1 200 ok');
            header('Content-Type: application/json');
            echo json_encode($respuesta);
        } else {
            //no lo encuentra
            $respuesta = [
                "status" => "success",
                "message" => "no existe el producto"
            ];
            header('HTTP/1.1 400 error');
            header('Content-Type: application/json');
            echo json_encode($respuesta);
        }
        exit();
    }
}

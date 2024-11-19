<?php
class LineShopCard
{
    private $idPedido;
    private $idProducto;
    private $nlinea;
    private $cantidad;

    function __construct($idPedido, $idProducto, $cantidad, $nlinea)
    {
        $this->idPedido = $idPedido;
        $this->idProducto = $idProducto;
        $this->cantidad = $cantidad;
        $this->nlinea = $nlinea;
    }
    public function __set($propiedad, $var)
    {

        $this->$propiedad = $var;
    }
    public function __get($propiedad)
    {

        return $this->$propiedad;
    }
    static function insertarTodas($conexion, $datos_producto, $order)
    {
        try {
            $pdf = "";
            $salida = "<div class='container'>";
            $consulta = "INSERT INTO lineaspedidos (idPedido,nlinea,idProducto,cantidad) VALUES(:idPedido,:nlinea,:idProducto,:cantidad)";
            $result = $conexion->prepare($consulta);
            $precioTotal = 0;
            $linea = 0;
            $pdf .= "<h1>ORDER NUMBER: $order->idPedido</h1><br>";
            $pdf .= "<h1>DELIVERY ADDRESS: $order->dirEntrega</h1>";
            $idPedidoParam = $order->idPedido;
            $lineaParam = "";
            $productoParam = "";
            $cantidadParam = "";
            $result->bindParam(":idPedido", $idPedidoParam);
            $result->bindParam(":nlinea", $lineaParam);
            $result->bindParam(":idProducto", $productoParam);
            $result->bindParam(":cantidad", $cantidadParam);
            $salida = "<div class='container'>";
            $salida .= "<h2 class='fs-2 fw-bold'>Confirmed Order</h2>";
            $salida .= "<h3 clas='fs-3' subtitle>#$order->idPedido</h3>";
            $salida .= "<h3 clas='fs-3 subtitle'>$order->dirEntrega</h3>";
            foreach ($datos_producto as $producto) {
                $linea = $linea + 1;
                $lineaParam = $linea;
                $salida .= "<div class='row g-2'>";
                $salida .= "<div class='p-3 border rounded'>";
                $salida .= "<div class='d-flex flex-column flex-md-row justify-content-center justify-content-md-evenly w-100'>";
                $salida .= "<p>" . $linea . "</p>";
                $productoParam = $producto->idProducto;
                $salida .= "<p>" . $producto->nombre . "</p>";
                $cantidadParam = $producto->idProducto;
                $salida .= "<p>" . $producto->precio . " €</p>";
                $salida .= "<p>" . $producto->cantidad . "</p>";
                $cantidadParam = $producto->cantidad;
                $salida .= "</div>";
                $salida .= "</div>";
                $salida .= "</div>";
                $pdf .=
                    "<p>Product name: $producto->nombre Price: $producto->precio Quantity: $producto->cantidad</p><br>";

                $precioTotal = $precioTotal + $producto->precio * $producto->cantidad;
                $result->execute();
            }
            $pdf .= "<h2>Total Price: $precioTotal</h2>";
            $salida .= "<div class='row mt-2'><div class='d-flex justify-content-end'><p class='fs-3 fw-bold'>$precioTotal €</p></div></div>";
            $salida .= "<div class='row mt-2'><div class='d-flex justify-content-center'><a href='Pdf.php?datos=$pdf' target='_blank' class='btn btn-outline-success'>PDF GENERATE</a></div></div>";
            $salida .= "</div>";
            return $salida;
        } catch (PDOException $e) {
            echo "<br>" . $e->getMessage();
            die();
        }
    }
}

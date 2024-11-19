<?php
session_start();
if (!isset($_POST["enviar"])) {
    include("../Views/SeeConfirm.php");
} else {
    include("../Config/Autocharge.php");
    include("../Views/Start.html");
    $base = new BD();
    $lastID = Order::lastID($base->link);
    $idPedido = $lastID + 1;
    $datos_productos = json_decode($_POST["products"]);
    //crearemos el pedido e insertaremos las lineas
    $order = new Order($idPedido, date("Y-m-d H:i:s", time()), $_POST["dirEntrega"], $_SESSION["dniCliente"]);
    if (!$order->existe($base->link)) {
        try {
            $base->link->beginTransaction();
            $order->insertar($base->link);
            echo LineShopCard::insertarTodas($base->link, $datos_productos, $order);
            if ($base->link->commit()); {

                unset($_SESSION["idUnico"]);
                unset($_SESSION["dniCliente"]);
?>
                <script>
                    sessionStorage.clear();
                </script>
<?php
            }
        } catch (\PDOException $e) {
            $base->link->rollback();
            echo $e->getMessage();
            die();
        }
    }
    include("../Views/End.html");
}

<?php
session_start();
$dniCliente = "";
$idUnico = "";
if (isset($_SESSION["dniCliente"])) {
    $dniCliente = $_SESSION["dniCliente"];
}
if (isset($_SESSION["idUnico"])) {
    $idUnico = $_SESSION["idUnico"];
}

if (isset($_POST["addToCardShop"])) {
    if (!isset($_SESSION["idUnico"])) {
        $_SESSION["idUnico"] = uniqid();
        $idUnico = $_SESSION["idUnico"];
    }
?>
    <!--Script para insertar elemento al carrito-->
    <script type="text/javascript">
        let dniCliente = <?php echo json_encode($dniCliente); ?>;
        let idUnico = <?php echo json_encode($idUnico); ?>;
        let idProducto = <?php echo json_encode($_POST["idProducto"]); ?>;
        let nombre = <?php echo json_encode($_POST["nombre"]); ?>;
        let cantidad = <?php echo json_encode($_POST["cantidad"]); ?>;
        let precio = <?php echo json_encode($_POST["precio"]); ?>;
        sessionStorage.setItem("idUnico", idUnico);
        console.log(dniCliente);
        console.log(idUnico);
        console.log(idProducto);
        console.log(nombre);
        console.log(precio);
        console.log(cantidad);


        //peticion fetch para insertar el producto
        fetch("http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiShopCard/ShopCard_service.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify({
                    "idUnico": idUnico,
                    "dniCliente": dniCliente,
                    "idProducto": idProducto,
                    "nombreProducto": nombre,
                    "precio": precio,
                    "cantidad": cantidad

                })

            })
            .then(resp => resp.json())
            .then(data => console.log("Succes:", data))
            .catch(error => console.error("error:", error));
    </script>

<?php
}
//incluimos la vista para que se cargen del lado del cliente los elementos del carrito
include("../Views/SeeCardShop.html");

?>
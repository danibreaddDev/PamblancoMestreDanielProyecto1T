<?php
$datos = json_decode(file_get_contents("http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiProducts/Product_service.php?idProducto=" . $_GET["idProducto"] . ""), true);
include("../Views/seeDetails.php");

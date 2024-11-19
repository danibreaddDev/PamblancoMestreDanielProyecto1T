<?php
session_start();

// Comprobar si la sesión ya está iniciada
if (isset($_SESSION["dniCliente"])) {
    header("location: Products.php");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $idUnico = "";
    if (isset($_SESSION["idUnico"])) {
        $idUnico = $_SESSION["idUnico"];
    }
    if (isset($_POST["dni"]) && isset($_POST["password"])) {
        $dniCliente = $_POST["dni"];
        $pwd = $_POST["password"];
        $_SESSION["dniCliente"] = $dniCliente;

        $respuesta = [
            "status" => "success",
            "idUnico" => "$idUnico",
            "dniCliente" => "$dniCliente",
            "message" => "login exitoso"


        ];
        echo json_encode($respuesta);
    }
    exit();
} else {
    include("../Views/SeeValidate.html");
}

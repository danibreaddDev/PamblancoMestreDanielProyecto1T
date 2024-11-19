
<?php
$products = json_decode(file_get_contents("http://localhost/ejercicios/PamblancoMestreDanielProyecto1T/backend/ApiProducts/Product_service.php"),true); 
include("../Views/SeeProducts.php");


<?php
require '../Libraries/dompdf/autoload.inc.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();

//el string por url de los datos del pedido
$datos = $_GET["datos"];
$html = $datos;
$html .= "<h3>Thanks for the buy, We hope you be all rigth with our services. </h3><h1>LootClan</h1>";
//cargamos el html generado
$dompdf->loadHtml($html);
//orientacion y formato
$dompdf->setPaper('A4', 'landscape');
//renderiza el html a pdf
$dompdf->render();
//nos genera la salida del pdf, nos lo guarda en el dispositivo y la visualizacion en navegador
$dompdf->stream();

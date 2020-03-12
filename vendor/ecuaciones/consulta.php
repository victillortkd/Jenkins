<?php
$datosRecibidos = file_get_contents("php://input");
$datosDecodificados = json_decode($datosRecibidos, true);

require "../vendor/autoload.php";

$ecuacionGrado2 = new ecuaciones\modelo\EcuacionGrado2($datosDecodificados['a'], $datosDecodificados['b'],$datosDecodificados['c']);

$html = "<tr><th>X</th><th>Y</th></tr>";
for ($i=0; $i < 11; $i++){
    $resultado = $ecuacionGrado2->calcular($i);
    $html = "<tr><td>".$i."</td><td>".$resultado."</td></tr>";
    echo $html;
}

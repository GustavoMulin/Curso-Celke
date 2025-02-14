<?php

$resultado = "2";
echo "<br>Resultado exemplo um: $resultado<br>";
var_dump($resultado);

$resultado_dois = $resultado + 1;
echo "<br>Resultado exemplo dois: $resultado_dois<br>";
var_dump($resultado_dois);

$resultado_tres = $resultado_dois + 3.5;
echo "<br>Resultado exemplo três: $resultado_tres<br>";
var_dump($resultado_tres);

$resultado_quatro = 11;
echo "<br> Resultado exemplo quatro: $resultado_quatro <br>";
var_dump($resultado_quatro);

$resultado_cinco = (float) $resultado_quatro;
echo "<br>Resultado exemplo cinco: $resultado_cinco<br>";
var_dump($resultado_cinco);

$resultado_seis = 8.9;
echo "<br>Resultado exemplo seis: $resultado_seis<br>";
var_dump($resultado_seis);

$resultado_sete = (int) $resultado_seis;
echo "<br>Resultado exemplo sete: $resultado_sete<br>";
var_dump($resultado_sete);
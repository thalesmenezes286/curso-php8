<?php

$userFirstName = "Jimmy";
$userLastName = "Hendrix";
$age = 27;
$height = 1.75;

echo "<h3> Olá, ${userFirstName} ${userLastName}! </h3>";
echo "<p> Você tem ${age} anos e mede ${height}m. </p>";

$company = "Bora Programar";
$$company = "Curso de PHP 8";
echo "<p> ${company} - ${$company} </p>";

$calcA = 10;
$calcB = 20;

var_dump($calcA);
var_dump($calcB);

$temIdadeMinima = true;
$possuiHistoricoNegativo = false;

//Para o PHP todos esses valores são considerados falsos: 0, 0.0, "", null, false, array() e objetos sem propriedades.  
$a = 0;
$b = 0.0;
$c = "";
$d = null;

var_dump($temIdadeMinima);
var_dump($possuiHistoricoNegativo);
var_dump($a, $b, $c, $d);

//função callback   
$code = "<article><h1>Curso de PHP 8</h1></article>";]
$resultado = strip_tags($code);

echo $resultado;

<?php

/*
 * Comando echo
 * Não precisa obrigatoriamente de parênteses. 
 * Não retorna nenhum valor (retorno nulo).
*/
echo "<p>Olá Mundo!", " ", "<span class='tag'>#BoraProgramar!</span>", "</p>";

$hello = "Olá Mundo!";
$code = "<span class='tag'>#BoraProgramar!</span>";

echo "<p>$hello</p>";
echo '<p>$hello</p>';

$day = "dia";
echo "<p>Falta 1 $day para o evento!</p>";
echo "<p>Faltam 2 {$day}s para o evento!</p>";

//As chaves são utilizadas para proteger a variável
echo "<h3>{$hello}</h3>";
echo "<h4>{$hello} {$code}</h4>";

echo '<h3>' . $hello . " " . $code . "</h3>";


/*
 * Comando prinf
 * É uma função real (baseada na função printf da linguagem C) usada para exibir strings formatadas.
 */
$nome = "Maria";
$idade = 30;
printf("Olá, meu nome é %s e tenho %d anos.", $nome, $idade);
?>
<?php
//Crie um while que exiba a tabuada de um número informado na variável $n. 
$n = 5;
$n2 = 1;
while ($n2 <= 10) {
    echo "$n x $n2 = " . ($n * $n2) . "\n";
    $n2++;
}
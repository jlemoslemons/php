<?php
//Crie um for que exiba os 20 primeiros números da sequência de Fibonacci.
$n1 = 0;
$n2 = 1;
echo "$n1 $n2 ";
for ($i = 3; $i <= 20; $i++) {
    $n3 = $n1 + $n2;
    echo "$n3 ";
    $n1 = $n2;
    $n2 = $n3;
}
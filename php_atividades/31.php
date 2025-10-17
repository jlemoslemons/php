<?php
//Crie uma função que receba um array de números e retorne o maior valor do array sem usar max().
function maiorValor($array) {
    $maior = $array[0];
    foreach ($array as $valor) {
        if ($valor > $maior) {
            $maior = $valor;
        }
    }
    return $maior;
}
$valores = [3, 4, 7, 2, 9, 5];
echo "Maior valor: " . maiorValor($valores);
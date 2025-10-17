<?php
//Faça um elseif para classificar uma nota em “Reprovado”, “Recuperação” e “Aprovado”.
$n = 6.5;
if ($n >= 7) {
    echo "Aprovado";
} elseif ($n >= 5) {
    echo "Recuperação";
} else {
    echo "Reprovado";
}
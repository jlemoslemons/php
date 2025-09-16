<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$reset = "\033[0m";

$numeros = [15, -8, 23, -12, 7, -3, 18, -25, 4, -1];

echo $amarelo . $preto . " IDENTIFICADOR DE NÚMEROS " . $reset . "\n";

echo "Digite o primeiro número: ";
$a = (float)trim(fgets(STDIN));

do {
echo "Digite o operador (+ - * /): ";
$op = trim(fgets(STDIN));
} while (!in_array($op, ['+', '-', '*', '/']));

echo "Digite o segundo número: ";
$b = (float)trim(fgets(STDIN));

$resultado = match ($op) {
'+' => $a + $b,
'-' => $a - $b,
'*' => $a * $b,
'/' => $b != 0 ? $a / $b : "Erro: divisão por zero",
default => "Operador inválido",
};

echo $verde . $preto . " Resultado: $resultado " . $reset . "\n";
?>
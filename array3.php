<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$azul = "\033[44m";
$roxo = "\033[45m";
$reset = "\033[0m";

$numeros = [];

echo $amarelo . $preto . " MULTIPLICADOR DE VETOR " . $reset . "\n";
echo "Digite 10 valores numéricos:\n\n";

// Coletando os 10 números
for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . ($i + 1) . "º número: ";
    $numeros[$i] = (float)trim(fgets(STDIN));
}

// Exibindo o vetor original
echo "\n" . $azul . $preto . " VETOR ORIGINAL " . $reset . "\n";
echo "Números digitados: [" . implode(", ", $numeros) . "]\n";

// Solicitando o número multiplicador
echo "\n" . $roxo . $preto . " OPERAÇÃO DE MULTIPLICAÇÃO " . $reset . "\n";
echo "Digite o número que irá multiplicar todos os elementos: ";
$multiplicador = (float)trim(fgets(STDIN));

// Multiplicando todos os elementos
$numerosMultiplicados = [];
for ($i = 0; $i < count($numeros); $i++) {
    $numerosMultiplicados[$i] = $numeros[$i] * $multiplicador;
}

// Exibindo os resultados
echo "\n" . $verde . $preto . " RESULTADOS DA MULTIPLICAÇÃO " . $reset . "\n";

echo "Detalhamento das operações:\n";
for ($i = 0; $i < count($numeros); $i++) {
    echo ($i + 1) . ". " . $numeros[$i] . " × " . $multiplicador . " = " . $numerosMultiplicados[$i] . "\n";
}

echo "\n" . $azul . $preto . " VETOR ORIGINAL: " . $reset . "\n";
echo "[" . implode(", ", $numeros) . "]\n";

echo "\n" . $verde . $preto . " VETOR MULTIPLICADO: " . $reset . "\n";
echo "[" . implode(", ", $numerosMultiplicados) . "]\n";
?>
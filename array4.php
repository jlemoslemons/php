<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$azul = "\033[44m";
$roxo = "\033[45m";
$reset = "\033[0m";

$vetor_a = [];
$vetor_b = [];
$vetor_resultado = [];

echo $amarelo . $preto . " MULTIPLICAÇÃO DE DOIS VETORES " . $reset . "\n";

// Coletando dados do primeiro vetor
echo $azul . $preto . " PRIMEIRO VETOR (A) " . $reset . "\n";
echo "Digite 10 números para o vetor A:\n\n";

for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . ($i + 1) . "º número do vetor A: ";
    $vetor_a[$i] = (float)trim(fgets(STDIN));
}

// Coletando dados do segundo vetor
echo "\n" . $roxo . $preto . " SEGUNDO VETOR (B) " . $reset . "\n";
echo "Digite 10 números para o vetor B:\n\n";

for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . ($i + 1) . "º número do vetor B: ";
    $vetor_b[$i] = (float)trim(fgets(STDIN));
}

// Multiplicando os elementos nas posições correspondentes
echo "\n" . $verde . $preto . " CALCULANDO MULTIPLICAÇÃO " . $reset . "\n";

for ($i = 0; $i < 10; $i++) {
    $vetor_resultado[$i] = $vetor_a[$i] * $vetor_b[$i];
}

// Exibindo os resultados
echo "\n" . $verde . $preto . " RESULTADOS DA MULTIPLICAÇÃO " . $reset . "\n";

echo "Multiplicação posição por posição:\n";
for ($i = 0; $i < 10; $i++) {
    echo "Posição " . $i . ": " . $vetor_a[$i] . " × " . $vetor_b[$i] . " = " . $vetor_resultado[$i] . "\n";
}
?>
<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$azul = "\033[44m";
$roxo = "\033[45m";
$reset = "\033[0m";

// Criando o vetor com os nomes dos meses
$meses = [
    1 => "Janeiro",
    2 => "Fevereiro", 
    3 => "Março",
    4 => "Abril",
    5 => "Maio",
    6 => "Junho",
    7 => "Julho",
    8 => "Agosto",
    9 => "Setembro",
    10 => "Outubro",
    11 => "Novembro",
    12 => "Dezembro"
];

echo $amarelo . $preto . " IDENTIFICADOR DE MESES " . $reset . "\n";

do {
    echo "Digite um número de 1 a 12 para identificar o mês: ";
    $numeroMes = (int)trim(fgets(STDIN));
    
    if ($numeroMes < 1 || $numeroMes > 12) {
        echo $roxo . $preto . " ⚠️  Número inválido! Digite um valor entre 1 e 12. " . $reset . "\n";
    }
} while ($numeroMes < 1 || $numeroMes > 12);

// Identificando o mês correspondente
$nomeDoMes = $meses[$numeroMes];

echo "\n" . $verde . $preto . " RESULTADO " . $reset . "\n";
echo "Mês correspondente: " . $nomeDoMes . "\n";
?>
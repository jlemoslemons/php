<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$azul = "\033[44m";
$reset = "\033[0m";

$numeros = [];

echo $amarelo . $preto . " ANALISADOR DE NÚMEROS " . $reset . "\n";
echo "Digite 10 números:\n\n";

// Coletando os 10 números
for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . ($i + 1) . "º número: ";
    $numeros[$i] = (float)trim(fgets(STDIN));
}

// Inicializando contadores
$negativos = 0;
$positivos = 0;
$pares = 0;
$impares = 0;

// Analisando os números
foreach ($numeros as $numero) {
    // Contando negativos e positivos
    if ($numero < 0) {
        $negativos++;
    } elseif ($numero > 0) {
        $positivos++;
    }
    
    // Contando pares e ímpares
    if ($numero % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
}

// Exibindo os resultados
echo "\n" . $verde . $preto . " RESULTADOS DA ANÁLISE " . $reset . "\n";
echo "Análise dos números:\n";
echo "Números negativos: $negativos\n";
echo "Números positivos: $positivos\n";
echo "Números pares: $pares\n";
echo "Números ímpares: $impares\n";
?>
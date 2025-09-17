<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$azul = "\033[44m";
$roxo = "\033[45m";
$reset = "\033[0m";

$valores = [];

echo $amarelo . $preto . " INVERSOR DE VALORES " . $reset . "\n";
echo "Digite 10 valores (números ou texto):\n\n";

// Coletando os 10 valores
for ($i = 0; $i < 10; $i++) {
    echo "Digite o " . ($i + 1) . "º valor: ";
    $valores[$i] = trim(fgets(STDIN));
}

// Exibindo na ordem inversa
echo "\n" . $verde . $preto . " ORDEM INVERSA " . $reset . "\n";
echo "Valores na ordem contrária:\n";
for ($i = count($valores) - 1; $i >= 0; $i--) {
    echo (10 - $i) . ". " . $valores[$i] . "\n";
}
?>
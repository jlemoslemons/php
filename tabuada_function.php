<?php

/**
 * Calculadora de Tabuada Simples - PHP Terminal
 */

// Function para calcular e mostrar a tabuada
function mostrarTabuada($numero) {
    echo "\n=== TABUADA DO $numero ===\n";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = $resultado\n";
    }
    echo "\n";
}

// Function para ler número do usuário
function lerNumero() {
    echo "Digite um número (0 para sair): ";
    return trim(fgets(STDIN));
}

// Function para validar se é número
function ehNumero($valor) {
    return is_numeric($valor);
}

// Programa principal
echo "=== CALCULADORA DE TABUADA ===\n";

while (true) {
    $numero = lerNumero();
    
    // Sair se digitar 0
    if ($numero == '0') {
        echo "Tchau!\n";
        break;
    }
    
    // Verificar se é um número válido
    if (!ehNumero($numero)) {
        echo "Erro: Digite apenas números!\n\n";
        continue;
    }
    
    // Mostrar a tabuada
    mostrarTabuada((int)$numero);
}
?>
<?php
$cores = ["\033[30m", "\033[102m", "\033[43m", "\033[0m"];
$classe = [];

echo $cores[2] . $cores[0] . " SISTEMA DE NOTAS DA CLASSE " . $cores[3] . "\n";

for ($i = 1; $i <= 10; $i++) {
    echo "--- Aluno $i ---\nNome: ";
    $nome = trim(fgets(STDIN));
    
    do {
        echo "Nota (0-10): ";
        $nota = (float)trim(fgets(STDIN));
        if ($nota < 0 || $nota > 10) echo "Nota inválida!\n";
    } while ($nota < 0 || $nota > 10);
    
    $classe[] = ["aluno" => $nome, "nota" => $nota];
}

$notas = array_column($classe, "nota");
$maxIndex = array_keys($notas, max($notas))[0];
$media = array_sum($notas) / count($notas);

echo $cores[2] . $cores[0] . " RESULTADOS " . $cores[3] . "\n";
echo "Média: " . number_format($media, 2) . "\n";
echo $cores[1] . $cores[0] . " Maior nota: {$classe[$maxIndex]['aluno']} ({$notas[$maxIndex]}) " . $cores[3] . "\n\n";

foreach ($classe as $i => $aluno) {
    echo ($i + 1) . ". {$aluno['aluno']} - {$aluno['nota']}\n";
}
?>

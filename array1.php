<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$reset = "\033[0m";

// Array para armazenar os dados dos alunos
$classe = [
    ["aluno" => "Ana", "nota" => "8.5"],
    ["aluno" => "Carlos", "nota" => "7.2"],
    ["aluno" => "Beatriz", "nota" => "9.1"],
    ["aluno" => "Diego", "nota" => "6.8"],
    ["aluno" => "Fernanda", "nota" => "8.9"],
    ["aluno" => "Gabriel", "nota" => "7.5"],
    ["aluno" => "Helena", "nota" => "9.3"],
    ["aluno" => "Igor", "nota" => "6.4"],
    ["aluno" => "Juliana", "nota" => "8.7"],
    ["aluno" => "Lucas", "nota" => "7.9"],
];

// Calcular média da classe
$somaNotas = 0;
$maiorNota = $classe[0]["nota"];
$alunoMaiorNota = $classe[0]["aluno"];

foreach ($classe as $estudante) {
    $somaNotas += $estudante["nota"];
    
    // Verificar se é a maior nota
    if ($estudante["nota"] > $maiorNota) {
        $maiorNota = $estudante["nota"];
        $alunoMaiorNota = $estudante["aluno"];
    }
}

$mediaClasse = $somaNotas / count($classe);

// Exibir resultados
echo $amarelo . $preto . " RESULTADOS DA TURMA " . $reset . "\n";
echo $verde . $preto . "Média da classe: " . number_format($mediaClasse, 2) . "\n";
echo $verde . $preto . "Aluno com maior nota: $alunoMaiorNota (Nota: $maiorNota) " . $reset;
?>
<!-- não finalizado -->
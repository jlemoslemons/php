<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$azul = "\033[44m";
$reset = "\033[0m";

$alunos = [];

echo $amarelo . $preto . " SISTEMA DE NOTAS DOS ALUNOS " . $reset . "\n";
echo "Digite os dados de 10 alunos:\n\n";

// Coletando os dados dos 10 alunos
for ($i = 0; $i < 10; $i++) {
    echo "--- Aluno " . ($i + 1) . " ---\n";
    
    echo "Nome do aluno: ";
    $nome = trim(fgets(STDIN));
    
    do {
        echo "Nota do aluno (0 a 10): ";
        $nota = (float)trim(fgets(STDIN));
        
        if ($nota < 0 || $nota > 10) {
            echo "⚠️  Nota inválida! Digite uma nota entre 0 e 10.\n";
        }
    } while ($nota < 0 || $nota > 10);
    
    // Armazenando os dados no vetor
    $alunos[] = [
        'nome' => $nome,
        'nota' => $nota
    ];
    
    echo "\n";
}

// Calculando a média da classe
$somaNotas = 0;
foreach ($alunos as $aluno) {
    $somaNotas += $aluno['nota'];
}
$media = $somaNotas / count($alunos);

// Encontrando o aluno com maior nota
$maiorNota = 0;
$alunoMaiorNota = '';

foreach ($alunos as $aluno) {
    if ($aluno['nota'] > $maiorNota) {
        $maiorNota = $aluno['nota'];
        $alunoMaiorNota = $aluno['nome'];
    }
}

// Exibindo os resultados
echo $verde . $preto . " RESULTADOS DA TURMA " . $reset . "\n";
echo "Estatísticas da turma:\n";
echo "Média da classe: " . number_format($media, 2) . "\n";
echo "Aluno com maior nota: " . $alunoMaiorNota . number_format($maiorNota, 1) . "\n";
?>
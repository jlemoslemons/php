<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$azul = "\033[44m";
$roxo = "\033[45m";
$vermelho = "\033[41m";
$reset = "\033[0m";

// Criando os vetores para armazenar os dados
$nomes = [];
$cidades = [];
$idades = [];
$sexos = [];

echo $amarelo . $preto . " SISTEMA DE CADASTRO DE PESSOAS " . $reset . "\n";
echo "Cadastre 10 pessoas com os seguintes dados:\n\n";

// Cadastrando as 10 pessoas
for ($i = 0; $i < 10; $i++) {
    echo $azul . $preto . " --- PESSOA " . ($i + 1) . " --- " . $reset . "\n";
    
    // Nome
    echo "Nome: ";
    $nomes[$i] = trim(fgets(STDIN));
    
    // Cidade
    echo "Cidade: ";
    $cidades[$i] = trim(fgets(STDIN));
    
    // Idade
    do {
        echo "Idade: ";
        $idade = (int)trim(fgets(STDIN));
        
        if ($idade < 0 || $idade > 120) {
            echo $vermelho . $preto . " ⚠️  Idade inválida! Digite uma idade entre 0 e 120 anos. " . $reset . "\n";
        }
    } while ($idade < 0 || $idade > 120);
    $idades[$i] = $idade;
    
    // Sexo
    do {
        echo "Sexo (M/F): ";
        $sexo = strtoupper(trim(fgets(STDIN)));
        
        if (!in_array($sexo, ['M', 'F'])) {
            echo $vermelho . $preto . " ⚠️  Sexo inválido! Digite M para masculino ou F para feminino. " . $reset . "\n";
        }
    } while (!in_array($sexo, ['M', 'F']));
    $sexos[$i] = $sexo;
    
    echo "\n";
}

// 1. Listagem de todos os nomes e idades
echo $verde . $preto . " 1. LISTAGEM: NOMES E IDADES " . $reset . "\n";
echo "┌─────┬──────────────────────────┬───────┐\n";
echo "│ Nº  │         Nome             │ Idade │\n";
echo "├─────┼──────────────────────────┼───────┤\n";
for ($i = 0; $i < 10; $i++) {
    $nome_formatado = str_pad($nomes[$i], 24, " ");
    $idade_formatada = str_pad($idades[$i], 5, " ", STR_PAD_LEFT);
    echo "│ " . str_pad(($i + 1), 3, " ", STR_PAD_LEFT) . " │ " . $nome_formatado . " │" . $idade_formatada . " │\n";
}
echo "└─────┴──────────────────────────┴───────┘\n\n";

// 2. Listagem de quem mora em Santos
echo $roxo . $preto . " 2. LISTAGEM: MORADORES DE SANTOS " . $reset . "\n";
$moradoresSantos = [];
for ($i = 0; $i < 10; $i++) {
    if (strtolower($cidades[$i]) === 'santos') {
        $moradoresSantos[] = $nomes[$i];
    }
}

if (count($moradoresSantos) > 0) {
    echo "Pessoas que moram em Santos:\n";
    foreach ($moradoresSantos as $index => $nome) {
        echo ($index + 1) . ". " . $nome . "\n";
    }
} else {
    echo "Nenhuma pessoa cadastrada mora em Santos.\n";
}
echo "\n";

// 3. Listagem de quem tem mais de 18 anos
echo $azul . $preto . " 3. LISTAGEM: MAIORES DE 18 ANOS " . $reset . "\n";
$maioresDeIdade = [];
for ($i = 0; $i < 10; $i++) {
    if ($idades[$i] > 18) {
        $maioresDeIdade[] = [
            'nome' => $nomes[$i],
            'idade' => $idades[$i]
        ];
    }
}

if (count($maioresDeIdade) > 0) {
    echo "Pessoas com mais de 18 anos:\n";
    foreach ($maioresDeIdade as $index => $pessoa) {
        echo ($index + 1) . ". " . $pessoa['nome'] . " (" . $pessoa['idade'] . " anos)\n";
    }
} else {
    echo "Nenhuma pessoa cadastrada tem mais de 18 anos.\n";
}
echo "\n";

// 4. Quantidade de pessoas do sexo masculino
echo $verde . $preto . " 4. CONTAGEM: SEXO MASCULINO " . $reset . "\n";
$masculinos = 0;
$nomesMasculinos = [];
for ($i = 0; $i < 10; $i++) {
    if ($sexos[$i] === 'M') {
        $masculinos++;
        $nomesMasculinos[] = $nomes[$i];
    }
}

echo "Quantidade de pessoas do sexo masculino: " . $masculinos . "\n";
?>
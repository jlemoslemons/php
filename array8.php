<?php
$preto = "\033[30m";
$verde = "\033[102m";
$amarelo = "\033[43m";
$azul = "\033[44m";
$roxo = "\033[45m";
$vermelho = "\033[41m";
$reset = "\033[0m";

// Criando a matriz de veículos com os dados fornecidos
$veiculos = [
    [0, "Uno", "Fiat", "prata", 4, 2014],
    [1, "Fiesta", "Ford", "preto", 2, 2015],
    [2, "Doblo", "Fiat", "verde", 4, 2013],
    [3, "Celta", "GM", "preto", 2, 2012],
    [4, "March", "Nissan", "prata", 2, 2015],
    [5, "Corsa", "GM", "branco", 2, 2010],
    [6, "Ranger", "Ford", "prata", 4, 2012],
    [7, "Trail Blazer", "GM", "branco", 4, 2014],
    [8, "Ecosport", "Ford", "preto", 4, 2013],
    [9, "Tucson", "Hyundai", "vinho", 4, 2012]
];

// Definindo os índices para melhor legibilidade
define('REGISTRO', 0);
define('MODELO', 1);
define('FABRICANTE', 2);
define('COR', 3);
define('PORTAS', 4);
define('ANO', 5);

echo $amarelo . $preto . " SISTEMA DE CADASTRO DE VEÍCULOS " . $reset . "\n";

// Exibindo todos os veículos cadastrados
echo $azul . $preto . " BANCO DE DADOS - VEÍCULOS CADASTRADOS " . $reset . "\n";
echo "┌────┬──────────────┬──────────┬─────────┬────────┬──────┐\n";
echo "│ Nº │    Modelo    │Fabricante│   Cor   │ Portas │ Ano  │\n";
echo "├────┼──────────────┼──────────┼─────────┼────────┼──────┤\n";

foreach ($veiculos as $veiculo) {
    echo "│ " . str_pad($veiculo[REGISTRO], 2, " ", STR_PAD_LEFT) . " │ " . 
         str_pad($veiculo[MODELO], 12, " ") . " │ " . 
         str_pad($veiculo[FABRICANTE], 8, " ") . " │ " . 
         str_pad($veiculo[COR], 7, " ") . " │ " . 
         str_pad($veiculo[PORTAS], 6, " ", STR_PAD_LEFT) . " │ " . 
         str_pad($veiculo[ANO], 4, " ", STR_PAD_LEFT) . " │\n";
}
echo "└────┴──────────────┴──────────┴─────────┴────────┴──────┘\n\n";

// a) Todos os modelos e os anos dos veículos
echo $verde . $preto . " A) MODELOS E ANOS DOS VEÍCULOS " . $reset . "\n";
echo "┌──────────────┬──────┐\n";
echo "│    Modelo    │ Ano  │\n";
echo "├──────────────┼──────┤\n";
foreach ($veiculos as $veiculo) {
    echo "│ " . str_pad($veiculo[MODELO], 12, " ") . " │ " . 
         str_pad($veiculo[ANO], 4, " ", STR_PAD_LEFT) . " │\n";
}
echo "└──────────────┴──────┘\n\n";

// b) Todos os veículos cor prata
echo $roxo . $preto . " B) VEÍCULOS COR PRATA " . $reset . "\n";
$veiculosPrata = [];
foreach ($veiculos as $veiculo) {
    if (strtolower($veiculo[COR]) === 'prata') {
        $veiculosPrata[] = $veiculo;
    }
}

if (count($veiculosPrata) > 0) {
    echo "┌────┬──────────────┬──────────┬──────┐\n";
    echo "│ Nº │    Modelo    │Fabricante│ Ano  │\n";
    echo "├────┼──────────────┼──────────┼──────┤\n";
    foreach ($veiculosPrata as $veiculo) {
        echo "│ " . str_pad($veiculo[REGISTRO], 2, " ", STR_PAD_LEFT) . " │ " . 
             str_pad($veiculo[MODELO], 12, " ") . " │ " . 
             str_pad($veiculo[FABRICANTE], 8, " ") . " │ " . 
             str_pad($veiculo[ANO], 4, " ", STR_PAD_LEFT) . " │\n";
    }
    echo "└────┴──────────────┴──────────┴──────┘\n";
} else {
    echo "❌ Nenhum veículo cor prata encontrado.\n";
}
echo "\n";

// c) Todos os veículos, cor e quantidade de portas
echo $azul . $preto . " C) VEÍCULOS: COR E QUANTIDADE DE PORTAS " . $reset . "\n";
echo "┌────┬──────────────┬─────────┬────────┐\n";
echo "│ Nº │    Modelo    │   Cor   │ Portas │\n";
echo "├────┼──────────────┼─────────┼────────┤\n";
foreach ($veiculos as $veiculo) {
    echo "│ " . str_pad($veiculo[REGISTRO], 2, " ", STR_PAD_LEFT) . " │ " . 
         str_pad($veiculo[MODELO], 12, " ") . " │ " . 
         str_pad($veiculo[COR], 7, " ") . " │ " . 
         str_pad($veiculo[PORTAS], 6, " ", STR_PAD_LEFT) . " │\n";
}
echo "└────┴──────────────┴─────────┴────────┘\n\n";

// d) Todos os veículos da Ford
echo $verde . $preto . " D) VEÍCULOS DA FORD " . $reset . "\n";
$veiculosFord = [];
foreach ($veiculos as $veiculo) {
    if (strtolower($veiculo[FABRICANTE]) === 'ford') {
        $veiculosFord[] = $veiculo;
    }
}

if (count($veiculosFord) > 0) {
    echo "┌────┬──────────────┬─────────┬────────┬──────┐\n";
    echo "│ Nº │    Modelo    │   Cor   │ Portas │ Ano  │\n";
    echo "├────┼──────────────┼─────────┼────────┼──────┤\n";
    foreach ($veiculosFord as $veiculo) {
        echo "│ " . str_pad($veiculo[REGISTRO], 2, " ", STR_PAD_LEFT) . " │ " . 
             str_pad($veiculo[MODELO], 12, " ") . " │ " . 
             str_pad($veiculo[COR], 7, " ") . " │ " . 
             str_pad($veiculo[PORTAS], 6, " ", STR_PAD_LEFT) . " │ " . 
             str_pad($veiculo[ANO], 4, " ", STR_PAD_LEFT) . " │\n";
    }
    echo "└────┴──────────────┴─────────┴────────┴──────┘\n";
} else {
    echo "❌ Nenhum veículo da Ford encontrado.\n";
}
echo "\n";

// e) Todos os veículos com ano >= 2013
echo $roxo . $preto . " E) VEÍCULOS ANO 2013 OU SUPERIOR " . $reset . "\n";
$veiculosNovos = [];
foreach ($veiculos as $veiculo) {
    if ($veiculo[ANO] >= 2013) {
        $veiculosNovos[] = $veiculo;
    }
}

if (count($veiculosNovos) > 0) {
    echo "┌────┬──────────────┬──────────┬─────────┬──────┐\n";
    echo "│ Nº │    Modelo    │Fabricante│   Cor   │ Ano  │\n";
    echo "├────┼──────────────┼──────────┼─────────┼──────┤\n";
    foreach ($veiculosNovos as $veiculo) {
        echo "│ " . str_pad($veiculo[REGISTRO], 2, " ", STR_PAD_LEFT) . " │ " . 
             str_pad($veiculo[MODELO], 12, " ") . " │ " . 
             str_pad($veiculo[FABRICANTE], 8, " ") . " │ " . 
             str_pad($veiculo[COR], 7, " ") . " │ " . 
             str_pad($veiculo[ANO], 4, " ", STR_PAD_LEFT) . " │\n";
    }
    echo "└────┴──────────────┴──────────┴─────────┴──────┘\n";
} else {
    echo "❌ Nenhum veículo de 2013 ou superior encontrado.\n";
}

// Estatísticas gerais
echo "\n" . $amarelo . $preto . " ESTATÍSTICAS GERAIS " . $reset . "\n";

// Contagem por fabricante
$fabricantes = [];
foreach ($veiculos as $veiculo) {
    $fabricante = $veiculo[FABRICANTE];
    $fabricantes[$fabricante] = isset($fabricantes[$fabricante]) ? $fabricantes[$fabricante] + 1 : 1;
}

// Contagem por cor
$cores = [];
foreach ($veiculos as $veiculo) {
    $cor = $veiculo[COR];
    $cores[$cor] = isset($cores[$cor]) ? $cores[$cor] + 1 : 1;
}

// Ano médio
$anoTotal = 0;
foreach ($veiculos as $veiculo) {
    $anoTotal += $veiculo[ANO];
}
$anoMedio = $anoTotal / count($veiculos);

echo "📊 Resumo do cadastro:\n";
echo "• Total de veículos: " . count($veiculos) . "\n";
echo "• Ano médio: " . round($anoMedio, 0) . "\n";
echo "• Veículos por fabricante:\n";
foreach ($fabricantes as $fabricante => $quantidade) {
    echo "  - " . $fabricante . ": " . $quantidade . " veículo(s)\n";
}
echo "• Veículos por cor:\n";
foreach ($cores as $cor => $quantidade) {
    echo "  - " . ucfirst($cor) . ": " . $quantidade . " veículo(s)\n";
}
?>
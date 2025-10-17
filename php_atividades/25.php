<?php
// Exiba todos os valores do array associativo com foreach.
$produto = [
    "nome" => "Notebook",
    "preco" => 2500.00,
    "quantidade" => 10
];
foreach ($produto as $chave => $valor) {
    echo "$chave: $valor | ";
}
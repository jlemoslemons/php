<?php
//Crie um array multidimensional com informações de 3 alunos (nome, idade e média). Exiba a média do segundo aluno.
$alunos = [
    ["nome" => "Ana", "idade" => 20, "media" => 8.5],
    ["nome" => "Bruno", "idade" => 22, "media" => 7.0],
    ["nome" => "Carlos", "idade" => 21, "media" => 9.0]
];
echo "Média do segundo aluno: " . $alunos[1]["media"];
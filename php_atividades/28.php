<?php
//Crie um array associativo com 3 cidades e seus respectivos estados. Exiba “A cidade [nome] fica em [estado]” para cada elemento. 
$cidades = [
    "Florianópolis" => "Santa Catarina",
    "São Paulo" => "São Paulo",
    "Rio de Janeiro" => "Rio de Janeiro"
];
foreach ($cidades as $cidade => $estado) {
    echo "$cidade fica em $estado.\n";
}
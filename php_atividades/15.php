<?php
//Refaça o exercício anterior usando match.
$dia = 3;
$semana = match ($dia) {
    1 => "Domingo",
    2 => "Segunda-feira",
    3 => "Terça-feira",
    4 => "Quarta-feira",
    5 => "Quinta-feira",
    6 => "Sexta-feira",
    7 => "Sábado"
};
echo "$semana";
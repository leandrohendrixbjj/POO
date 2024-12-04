<?php 

require __DIR__ . "/src/Modelo/Filme.php";


$filme = new Filme();
$filme->nome = 'Thor - Ragnarok';
$filme->anoLancamento = 2021;
$filme->genero = 'super-heroi';

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(7.8);
$filme->avalia(8.2);

echo $filme->media();
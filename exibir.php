<?php

// Abrir o arquivo txt para leitura

$arquivo = fopen("sigs.txt", "r");


$dat = fgets($arquivo);

$linha1 = fgets($arquivo);

$linha2 = fgets($arquivo);

$linha3 = fgets($arquivo);

$linha4  = fgets($arquivo);

// Fechar o arquivo txt
fclose($arquivo);
?>

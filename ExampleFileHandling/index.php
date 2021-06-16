<?php

// Para escrever no arquivo

// $arquivo = 'files/arquivo.txt';
// $conteudo = "Conteudo de teste\r\n";

// $arquivoAberto = fopen($arquivo, 'a'); //there is a list of possible modes for fopen -> 'a' = writing only -> 'r' = reading only
// fwrite($arquivoAberto, $conteudo);                                                  
// fclose($arquivoAberto);


// Para ler o arquivo

$arquivo = 'files/arquivo.txt';
$conteudo = "Conteudo de teste\r\n";

$tamanhoArquivo = filesize($arquivo);

$arquivoAberto = fopen($arquivo, 'r'); //there is a list of possible modes for fopen -> 'a' = writing only -> 'r' = reading only

//feof() fim do arquivo
while (!feof($arquivoAberto)) :
    $linha = fgets($arquivoAberto, $tamanhoArquivo);
    echo $linha . "<br>";
endwhile;

fclose($arquivoAberto);

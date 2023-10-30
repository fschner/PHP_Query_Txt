#Gerar Arquivo 

<?php

$query = "select * FROM SUA_TABELA;";
$linha1 = $conn->query($query)->fetchColumn();

$query2 = "sselect * FROM SUA_TABELA";
$linha2 = $conn->query($query2)->fetchColumn();

$query3 = "select * FROM SUA_TABELA";
$linha3= $conn->query($query3)->fetchColumn();

$query4 = "select * FROM SUA_TABELA";
$linha4= $conn->query($query4)->fetchColumn();


// Nome do arquivo baseado no mês
$nomeMes = strtolower(date('F'));
$nomeArquivo = 'Nome_Arquivo.txt';

// Conteúdo arquivo
$array = array($mes,$in,$rs,$trf,$rdm);
$dados = implode("\n",$array);

// Caminho para a pasta atual da aplicação
$pastaAtual = getcwd();

// Caminho completo para o arquivo
$caminhoCompleto = $pastaAtual . '/' . $nomeArquivo;

// Tenta criar o arquivo e escrever o conteúdo nele
if (file_put_contents($caminhoCompleto, $dados) !== false) {
    //echo "Arquivo $nomeArquivo criado com sucesso na pasta $pastaAtual.";
} else {
   // echo "Não foi possível criar o arquivo $nomeArquivo na pasta $pastaAtual.";
}

fclose($arquivo);

?>

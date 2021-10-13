<?php

$arquivo = 'arquivo.txt';
//$arquivo = 'caminho do arquivo que será manipulado';

$tamanhoArquivo=filesize($arquivo);
//filesize($arquivo) pega o tamanho do arquivo

$conteudo="Conteudo de teste\r\n";

$arquivoAberto=fopen($arquivo,'r');
//$arquivoAberto=fopen(nome/caminho do arquivo,'modo que será aberto');
//a=somente para escrita
//r=somente para a leitura

while(!feof($arquivoAberto)){
	$linha=fgets($arquivoAberto,$tamanhoArquivo);
	echo $linha."<br>";
}

//fgets($arquivoAberto,$tamanhoArquivo)
//pega cada linha do arquivo aberto.

//!feof(nome do arquivo)
//final do arquivo

//fwrite($arquivoAberto,$conteudo);
//escreve no arquivo

fclose($arquivoAberto);
//fecha o arquivo

?>

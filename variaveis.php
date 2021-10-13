<?php

	//Variaveis
	// $nome da variavel

	$Nome="Bruno";
	$vNum=10;
	$vNum2=20.5;
	
	//Constantes
	//define("nome da constante","valor");

	define("Cnome","Bruno");

	echo "Nome: $Nome <br>";
	//Como imprimir o conteudo de uma variavel

	$Nome="Amanda";
	echo "Nome: $Nome" . "<br>";

	$soma=10+20;
	echo "Valor: " . $soma."<br>";

	echo "<hr>";

	echo "Constante Cnome: ".Cnome."<br>";
	echo "Nome do arquivo: ".__FILE__."<br>";
	echo "Versão do PHP: ". PHP_VERSION."<br>";
	
	echo "Versão do SO: ".PHP_OS."<br>";
	//Constantes so podem ser chamadas com contatenador
	
	// "." é o contatenador do php
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Constantes e Variaveis</title>
</head>
	
<body>
	
</body>
</html>
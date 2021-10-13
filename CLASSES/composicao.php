<?php
	
	class Pessoa{
		private $nome;
		
		function __set($nome,$valor){
			$this->nome= $valor;
		}
		
		function __get($nome){
			return $this->nome;
		}
		
	}
	
	
	

	$exibe=new Pessoa();
	$exibe->nome="José";
	echo $exibe->nome="Danilo";
	
	

	

	

	

/*
	clone
	__construct
	invoke
	tostring
	__get pega os valores para usar para imprimir os valores por exemplo quando o atributo for privado
	__set adiciona automaticamente o valor
	
*/

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>CLASSES</title>
</head>

<body>
	
	<!--
	
	-->
</body>
</html>



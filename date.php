<?php
	$meses=array("Janeiro","Fevereiro","Março","Abriu","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

	$dia=date("d");
	$mes=date("m");
	$ano=date("y");
	echo $dia ." de ". $meses[$mes-1] ." de ". $ano . "<br>";

	$hora=date("h");
	//h é no formato de 12h
	//H é o formato de 24H
	$minuto=date("i");
	$segundo=date("s");

	echo $hora . " : " . $minuto . " : ".$segundo;

/*
$dia=date("d"); o data com "d" retorna o dia

$mes=date("m"); retorna o mes

$ano=date("y");retorna o ano
se Y maiusculo o ano vem com 4 digitos
se y minusculo o ano vem com 2 digitos
*/

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>Data e Horas</title>
</head>

<body>
	
	
	<!--
	
	-->
</body>
</html>

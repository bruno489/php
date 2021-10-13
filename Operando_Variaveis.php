<?php
	$num1=10;
	$num2=5;

	//Aritmeticos
	$res=$num1+$num2;
	$res2=$num1-$num2;
	$res3=$num1*$num2;
	$res4=$num1/$num2;

	$num1++;
	//incremento de variavel

	$num2 +=2;
	//soma-se 2 ao valor anterior de num2

	$res5=($num1/$num2)+2;
	//Primeiro faz o parentese

	echo "Soma: ". $res . "<br>";
	echo "Subtração: ". $res2 . "<br>";
	echo "Multiplicação: ". $res3 . "<br>";
	echo "Divisão: ". $res4 . "<br>";

	echo "Divisão 2: ". $res5 . "<br>";

	$res6= $num1 == $num2;
	echo "Resultado Comparativo: $res6";

/*
	$res4=$num1 % $num2;
	Resto da divisão de num 1 com num 2
	
	$res = num1 = num2;
	num1 recebe o resultado de num2
	
	$res = $num1 == $num2;
	res recebe a comparação de $num1 e $num2
	
	$num1==$num2
	$num1<$num2
	$num1>$num2
	
	AND OU &&
	OR OU ||
*/
	
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Operações com Variaveis</title>
</head>
	
<body>
	
</body>
</html>
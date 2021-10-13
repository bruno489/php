<?php
	$bolsa=array(6);
	//$nome do array = array(tamanho);
	$Veiculos=array("Carro","moto","Avião");
	//$Veiculos=array(Elementos);

	$comidas=array("nome"=>"feijão","tipo"=>"2");

	//$nome do array = array("nome do elemento" => elemento, "nome do elemento" => "elemento");
	
	$bolsa[0]="Lampada";
	$bolsa[1]="faca";
	$bolsa[2]="Corda";
	$bolsa[3]="fosforo";
	$bolsa[4]="caderno";
	$bolsa[5]=$comidas["nome"];
	//$nome do array[posição]=elemento;
	$i=5;

	
	echo "Elemento de indice $i = " . $bolsa[$i] . "<br>";

	echo "$bolsa[1] <br>";

	echo "Nome: " . $comidas["nome"] .  "<br>" . "Tipo: " . $comidas["tipo"];
	//para imprimir os elementos pelo nome

	echo "<hr>";

	$carros=array(
		array("Ecosport",60000),
		array("Onix",50000),
		array("Hilux",300000)
	);
	
		/*
	$Nome da matriz=array(
		linha [0] array("item[0]",item[1]),
		linha [1] array("item[0]",item[1]),
		linha [2] array("item[0]",item[1])
	)
	*/
		
	echo "Modelos: " . $carros[0][0]."<br>Valor: " . $carros[0][1] . "<br>";

	//$nome da matriz[linha][item]
		

/*
	
*/
	
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Arrays</title>
</head>
	
<body>
	
</body>
</html>
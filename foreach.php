<?php
	$transp=array("Carro","Moto","Avião","Navio","Submarino","Helicoptero","Jeep","Foguete","Espaço Nave"); 

	foreach($transp as $veiculo){
		echo "$veiculo <br>";
	}

	/*
	foreach(nome do array as nome que se da aos valores do array){
		echo "$nome dos elementos <br>";
	} */

	echo"<hr>";

	foreach($transp as $veiculo){
		echo "$veiculo <br>";
		if($veiculo=="Avião"){break;}
	}
	//para em um dos elementos

	echo"<hr>";

	foreach($transp as $veiculo){
		if($veiculo=="Avião"){echo "Avião está na lista <br>";}
		
	}
		
	//verifica se determinado elemento está na lista

/*
	Tem a função de varrer uma coleção de dado (array) e para cada um executar, um comando
*/
	
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Foreach</title>
</head>
	
<body>
	
</body>
</html>
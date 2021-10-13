<?php
	$opc=2; //1=carro - 2=moto - 3=bicilceta - 4=navio - 5=aviao

	switch($opc){
		case 1:
			echo "Carro";
			break;
		case 2:
			echo "Moto";
			break;
		case 3:
			echo "Bicicleta";
			break;
		case 4:
			echo "Navio";
			break;
		case 5:
			echo "Avião";
			break;
		default: 
			echo "Transporte inválido";
			break;
	}
	
	echo("<hr>");
	switch($opc){
		case ($opc < 3 and $opc > 0):
			echo "Transporte Terrestre";
			break;
		case 4:
			echo "Transporte Maritimo";
			break;
		case 5:
			echo "Transporte Aereo";
			break;
		
	}

/*
	
*/
	
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>Switch Case</title>
</head>
	
<body>
	
</body>
</html>
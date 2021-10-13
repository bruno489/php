<?php

	class veiculo{
		var $modelo;
		var $ano;
		var $cor;
		//um veiculo seja carro ou moto pode ter modelo, ano e cor
		
		function gerar($modelo,$ano,$cor){
			echo "<hr>Modelo: $modelo "."<br>Ano: $ano <br>Cor: $cor";
		}
		//um veiculo seja carro ou moto pode ter a função de andar
	}

	class carro extends veiculo{
		function ligaLimpador(){
			echo "<br>Limpando";
		}
		//Voce pode criar funções especificas para determinada função
	}

	class moto extends veiculo{
		
	}

	$XJ6=new moto();
	$XJ6->gerar("XJ6","2016","PRETA");

	$ecoSport=new carro();
	$ecoSport->gerar("EcoSport","2018","Branco");
	$ecoSport->ligaLimpador();

	//Note que a classe chamada foi moto que herdou com veiculos

/*
	herança é quando uma classe herda propriedades e metodos de outra classe por possuirem caracteristicas em comum
	
	class classe nova extends classe da qual se pegara as caracteristicas{}
	
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



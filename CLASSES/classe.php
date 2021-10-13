<?php
	
	class pessoa{
		var $nome;
		var $idade;
		var $genero;
		
		function falar(){
			echo "Oi gente";
			echo "<br>Me chamo ".$this->nome;
			echo "<br>Tenho ".$this->idade . " anos de idade";
			echo "<br>E sou ".$this->genero;
			//Este->genero
		}
		
		function acrescentar($nom,$idad,$gen){
			echo "<hr>";
			$this->nome=$nom;
			$this->idade=$idad;
			$this->genero=$gen;
		}
	}
	
	$Rodrigo=new pessoa();
	//Aqui é criado um novo objeto no caso, a pessoa rodrigo

	$Rodrigo->nome="Rodrigo sales";
	$Rodrigo->idade="14";
	$Rodrigo->genero="Homem";
	//Aqui atribuo valores para as variaveis/caracteristicas de rodrigo

	$Rodrigo->falar();
	//O que é feito em falar() sera realizado com as variaveis de rodrigo

	$Amanda=new pessoa();
	$Amanda->acrescentar("Amanda Cavalcanti",21,"Mulher");
	//Aqui eu chamei uma função que meramente acrescentou dados a amanda
	$Amanda->falar();

/*
	
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



<?php
	
	abstract class banco{
		protected $saldo;
		protected $limiteSaque;
		protected $juros;
		
		function gera($sald,$lim,$jur){
			$this->saldo=$sald;
			$this->limiteSaque=$lim;
			$this->juros=$jur;
			
			echo "Saldo: " . $this->saldo . "<br> Limite de saque: ".$this->limiteSaque. "<br>Juros: ".$this->juros;
		}
	}

	class itau extends banco{
		
	}

	class bradesco extends banco{
		
	}
	
	$itau=new itau();
	$itau->gera(1000,10000,2);
	

/*
	classe abstrata serve para outras classes herdarem essa classe
	
	
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



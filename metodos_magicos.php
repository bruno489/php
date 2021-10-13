<?php
	
	class Pessoa{
		
		function atribuiNome($nome){
			return "O nome da derrota é: " . $nome;
		}
	}
	
	class Exibe{
		public $pessoa;
		public $nome; 
		
		function __construct($nome){
			$this->pessoa=new Pessoa();
			$this->nome=$nome;
		}
		
		function exibeNome(){
			echo $this->pessoa->atribuiNome($this->nome);
			}
		}
	

	$exibe=new Exibe("José");
	$exibe->exibeNome();
	
	

	

	

	

/*
	function adiciona(objeto da classe $produtos){
			$this->produtos[]=$produtos;
		}
	
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



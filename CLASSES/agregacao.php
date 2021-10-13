<?php
	
	class Produtos{
		public $nome;
		public $valor;
		
		function __construct($nome,$valor){
			$this->nome=$nome;
			$this->valor=$valor;
		}
	}
	
	class Carrinho{
		public $produtos;
		
		function adiciona(Produtos $produtos){
			$this->produtos[]=$produtos;
		}
		
		function exibe(){
			foreach($this->produtos as $produto){
				echo "<hr>";
				echo $produto->nome."<br>";
				echo $produto->valor."<br>";
			}
		}
	}

	$televisao=new Produtos("Televisao","5000");
	$geladeira=new Produtos("Geladeira","1000");

	$carrinho=new Carrinho();
	$carrinho->adiciona($televisao);
	$carrinho->adiciona($geladeira);
	
	$carrinho->exibe();

	

	

	

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



<?php
	
	class Pedido{
		public $numero;
		public $cliente;
	}
	
	class Cliente{
		public $nome;
		public $endereco;
	}

	$cliente=new Cliente();
	$cliente->nome="Bruno Guedes";
	$cliente->endereco="Flavio Maroja Filho, 28";

	$pedido=new Pedido();
	$pedido->numero="1234";
	$pedido->cliente=$cliente;
	//Aqui foi criada uma associação de determinado pedido com determinado cliente, agora é possivel acessar os dados do cliente atraves do pedido 

	$dados=array(
		"Numero: "=>$pedido->numero,
		"Cliente: "=>$pedido->cliente->nome,
		"Endereco: "=>$pedido->cliente->endereco
	);
	//como se pode notar, foi possivel acessar o endereço atraves do pedido

	var_dump($dados);

	

/*
	filter_var($nome da variaver, filtro que sera utilizado)
	filtra uma determinada variavel
	FILTER_VALIDATE_EMAIL
	
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



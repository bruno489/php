<?php
	require 'brendow/produto.php';
	require 'bruno/produto.php';
		
	use models\produto as productModels;
	//productModels é o apelido do models
	//$produto=new productModels

	$produto=new \classes\produto();
	$produto->mostrarDetalhes();

	

/*
	$produto=new \namespace da pagina\o que voce quer chamar;
	
	
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



<?php
	
	include "conexao.inc";
	
	$vcod=$_GET["F_Cod"];
	$vproduto=$_GET["F_Prod"];
	$vpreco=$_GET["F_Preco"];
	$vqtde=$_GET["F_Qtde"];

	$sql="INSERT INTO tb_produtos VALUES ('$vcod','$vproduto',$vpreco,$vqtde)";

	$res=mysqli_query($con,$sql);
	$linhas=mysqli_affected_rows($con);
	
	if($linhas==1){
		echo "Registro gravado com sucesso<br>";
	}else{
		echo "Falha na gravação do registro<br>";
	}

	mysqli_close($con);

/*
	Quando for int ou float colocar sem as aspas
	
	
*/

?>

<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>CLASSES</title>
</head>

<body>
	<a href="formAula-31.html">Voltar</a>
	<!--
	
	-->
</body>
</html>



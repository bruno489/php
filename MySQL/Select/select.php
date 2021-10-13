<?php
	
	include "../coneccao.inc";
	

	//$vcat=$_GET["F_Cat"];

	$vcat1=1;
	$vcat2=2;

	$sql="SELECT * FROM tb_cadastro WHERE cat = $vcat1 OR cat = $vcat2";
	

	$res=mysqli_query($con,$sql);
	$linhas=mysqli_num_rows($res);

	echo $linhas . " Registros encontrados";
	
	mysqli_close($con);

/*
	$sql="SELECT * FROM tb_cadastro WHERE cat = $vcat";
	
	$sql="SELECT * FROM tb_cadastro WHERE cat = $vcat1 OR cat = $vcat2";
	podem ser usados os paramentro ou, and...
	
	SELECIONE TODOS DA nome da tabela no sql ONDE nome da coluna que quer consultar que for = a 1;
	
	
	mysqli_query(nome da conexao,nome da ação);
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



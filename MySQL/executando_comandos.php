<?php
	
	include "coneccao.inc";
	
	$res=mysqli_query($con,"select * from tb_cadastro");
	$linhas=mysqli_num_rows($res);

	echo "O banco possui ". $linhas." linhas";

	mysqli_close($con);

/*
	mysqli_query(nome da conecção,"comando / quem receberá / from / nome do banco de dados")
	fez a consulta/seleção de todos os dados que estão na tabela
	
	mysqli_num_rows(de qual banco);
	retorna o numero de linhas do banco de dados
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



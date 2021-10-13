<?php
	
	include "coneccao.inc";
	
	$vnome="Bruno";
	$vuser="brk1";
	$vsenha="1234";
	$vemail="bguedes1@gmail.com";
	$tel="1234512231";
	$vstat="1";
	$vobs="";

	$sql="INSERT INTO tb_cadastro VALUES (NULL,'$vnome','$vuser','$vsenha','$vemail','$tel',$vstat,'$vobs')";

	$res=mysqli_query($con,$sql);
	
	mysqli_close($con);

/*
	"INSERT INTO nome da tabela ('nome do campo que eu gostaria de acrescentar na tabela') VALUES ('o que sera amarzenado nesse campo')"
	"INSERT INTO tb_cadastro ('nome') VALUES ('vnome')"
	
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



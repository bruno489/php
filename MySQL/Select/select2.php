<?php
	
	include "../coneccao.inc";
	

	//$vcat=$_GET["F_Cat"];

	$vcat1=$_GET["F_Cat1"];
	$vcat2=$_GET["F_Cat2"];

	$sql="SELECT * FROM tb_cadastro WHERE cat = $vcat1 OR cat = $vcat2";
	$res=mysqli_query($con,$sql);
	
	while($vreg=mysqli_fetch_row($res)){
		$vcod=$vreg[0];
		$vnome=$vreg[1];
		$vuser=$vreg[2];
		$vsenha=$vreg[3];
		$vemail=$vreg[4];
		$vtel=$vreg[5];
		$vstatus=$vreg[6];
		
		echo"
		Codigo: $vcod<br>
		Nome: $vnome<br>
		Usuário: $vuser<br>
		Senha: $vsenha<hr>
		";
	}
	
	mysqli_close($con);

/*
	
	mysqli_fetch_row($res)
	Pega todos os componentes de um determinado array e os organizam em linhas formando um novo array
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


